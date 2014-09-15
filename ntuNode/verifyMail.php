<?php
  header("Content-Type: text/html; charset=utf8");
  $url="index.php";
  $main="main.php";
  session_start();
  if(!isset($_SESSION['verify']))
     {
         echo "<script>alert('expired link')</script>";  
         echo "<script>window.location.href='$url'</script>";
         exit;
     }
  $verifySave = $_SESSION['verify'];
  if(!isset( $_GET['id']))
    {
         echo "<script>alert('invalid link')</script>";  
         echo "<script>window.location.href='$url'</script>";
         exit;
    }
  $verifyNumber = $_GET['id'];
  if($verifySave != $verifyNumber)
     {
         echo "<script>alert('invalid link')</script>";  
         echo "<script>window.location.href='$url'</script>";
         exit;
     }
  $userName = $_SESSION['newuserName'];
  $userPswd = $_SESSION['passWord'];
  $emailAddress = $_SESSION['emailAddress'];
  $dbhost = 'localhost'; 
  $dbuser = 'root'; //我的用户名 
  $dbpass = ''; //我的密码 
  $dbname = 'ntunode'; //我的mysql库名 
  $tablename = 'userInfo';//表名
  /********连接数据库****************/
  $connect = mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$connect)//连接失败
   {
      echo "<script>alert('404 NotFound')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
   }
   mysql_select_db($dbname);
   mysql_query("SET NAMES utf8");
   /*******查找是否已经验证过***/
   $sql = "SELECT userName FROM ".$tablename." WHERE userName='".$userName."'";
   $result = mysql_query($sql); 
   $rs = mysql_fetch_row($result);
   if($rs!=0)//已经验证过
     {
      echo "<script>alert('Sorry,You have already Verified')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit;
     }
   /*******插入*****************/
   $insert = "INSERT INTO ".$tablename." (`userName`, `passWord`,`userMail`) VALUES ('$userName','$userPswd','$emailAddress')";
   $result = mysql_query($insert);
        if($result)
        {
         $_SESSION['userName'] = $userName;
         echo "<script>alert('Verified OK')</script>";
         echo "<script>window.location.href='$main'</script>";
         exit;
        }
        else
        {
            echo "<script>alert('Verified error')</script>";
            echo "<script>window.location.href='$url'</script>";
            exit;
        } 
?>
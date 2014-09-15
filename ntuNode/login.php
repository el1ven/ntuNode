<?php
  
  $fromurl="http://localhost/Smarty/ntuNode/index.php"; //只能从这个地址访问
  if( $_SERVER['HTTP_REFERER'] != $fromurl )
  {
   header("Location:".$fromurl);
   exit;
  }

  $userName=$_POST["userName"];
  $userPswd=$_POST["password"];
  $url="index.php";
  $main="main.php";
  
  $dbhost = 'localhost'; 
  $dbuser = 'root'; //我的用户名 
  $dbpass = ''; //我的密码 
  $dbname = 'ntunode'; //我的mysql库名 
  $tablename = 'userInfo';//表名
  /*******判断用户名密码是否为空*********/ 
  if($userName == NULL)
   {
	   echo "<script>alert('Please Input UserName')</script>";
       echo "<script>window.location.href='$url'</script>";  
	   exit;
   }
   if($userPswd==NULL)
   {
	   echo "<script>alert('Please Input PassWord')</script>";
	   echo "<script>window.location.href='$url'</script>";  
	   exit;
   }
  /********连接数据库****************/
  $connect = mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$connect)//连接失败
   {
      echo "<script>alert('404 NotFound')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
   }
   /*******查询*****************/
   mysql_select_db($dbname,$connect);
   mysql_query("SET NAMES 'utf8'",$connect);
   $sql = "SELECT userName FROM ".$tablename." WHERE userName='".$userName."' and passWord='".$userPswd."'";
   //print($sql);
   $result = mysql_query($sql); 
   if($result == false)//查询失败
     {
      echo "<script>alert('404 NotFound')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
     }
    else 
    {
      $rs = mysql_fetch_row($result);
      if($rs)//登陆成功
      {
        session_start();
        $_SESSION["user"]=$userName;
        //print($_SESSION["user"]);
       echo "<script>window.location.href='$main'</script>"; 
        exit;
      }
      else//登陆失败
      {
        echo "<script>alert('username or password error')</script>";
        echo "<script>window.location.href='$url'</script>";  
        exit;
      }
    }
?>
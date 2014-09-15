<?php
  
   $fromurl="http://localhost/Smarty/ntuNode/main.php"; //只能从这个地址访问
  if( $_SERVER['HTTP_REFERER'] != $fromurl )
  {
   header("Location:".$fromurl);
   exit;
  }
  header("Content-Type: text/html; charset=utf8");
  session_start();
  $userName=$_SESSION["user"];
  $TeleNumber=$_POST["TeleNumber"];
  $ProdName = $_POST["ProdName"];
  $ProdValue = $_POST["ProdValue"];
  $ProdWeight = $_POST["ProdWeight"];
  $TransNumber = $_POST["TransNumber"];
  $DeliCompany = $_POST["DeliCompany"];
  if(isset($_POST['Sensitive']))
     $Sensitive = "Yes";
  else
     $Sensitive = "No";
  date_default_timezone_set('Asia/Shanghai');
  $timeNow =  date('Y-m-d H:i:s',time());
  //rint($timeNow);
  $url="main.php";
  //$main="main.php";
  $dbhost = 'localhost'; 
  $dbuser = 'root'; //我的用户名 
  $dbpass = ''; //我的密码 
  $dbname = 'ntunode'; //我的mysql库名 
  $tablename = 'orderInfo';//表名
  /********连接数据库****************/
  $connect = mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$connect)//连接失败
   {
      echo "<script>alert('404 NotFound')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
   }
   /*******插入*****************/
   mysql_select_db($dbname);
   mysql_query("SET NAMES utf8");
   $insert = "INSERT INTO ".$tablename." (`orderNumber`, `orderTime`,`orderExpress`,`orderName`,`orderContact`,`Sensitive`) 
                                  VALUES ('$TransNumber','$timeNow' , '$DeliCompany' , '$ProdName' , '$TeleNumber'  , '$Sensitive')";
  //print($insert);
   $result = mysql_query($insert);
        if($result)
        {
         echo "<script>alert('submit OK')</script>";
         echo "<script>window.location.href='$url'</script>";
         exit;
        }
        else
        {
           echo "<script>alert('submit error')</script>";
           //echo "<script>window.location.href='$url'</script>";
           //exit;
        } 
?>
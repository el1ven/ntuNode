<?php
   require("PHPMailer/PHPMailerAutoload.php"); //下载的文件必须放在该文件所在目录
  $fromurl="http://localhost/Smarty/ntuNode/index.php"; //只能从这个地址访问
  if($_SERVER['HTTP_REFERER'] != $fromurl)
  {
   header("Location:".$fromurl);
   exit;
  }

  $userName=$_POST["userName"];
  $userPswd=$_POST["userPwd"];
  $emailAddress = $_POST["userEmail"];
  //生成验证字符串
   $verify_string = "";
   for ($i = 0; $i < 16; $i++) {
    $verify_string .= chr(mt_rand(65, 90));   // 码表上32-126为通用可见字符
   }  
   $verify_url = "http://localhost/Smarty/ntuNode/verifyMail.php?id=".$verify_string;
    header("Content-Type: text/html; charset=utf8");
  $url="index.php";
  $main="index.php";
  $dbhost = 'localhost'; 
  $dbuser = 'root'; //我的用户名 
  $dbpass = ''; //我的密码 
  $dbname = 'ntunode'; //我的mysql库名 
  $tablename = 'userInfo';//表名
   if($userName==NULL)
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
      echo "<script>alert('connection error')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
   }
   /*******插入*****************/
   mysql_select_db($dbname,$connect);
   mysql_query("SET NAMES 'utf8'",$connect);
   $sql = "SELECT userName FROM ".$tablename." WHERE userName='".$userName."'";
   $result = mysql_query($sql); 
   if($result == false)//执行失败
     {
      echo "<script>alert('select error')</script>";
      echo "<script>window.location.href='$url'</script>"; 
      exit; 
     }
  else//查询成功
     {
      $rs = mysql_fetch_row($result);
      if($rs!=0)//存在重复用户名
      {
        echo "<script>alert('repeated username')</script>";
        echo "<script>window.location.href='$url'</script>";  
        exit;
      }
      else//用户名合法
      {
          $mail = new PHPMailer();
          $mail->IsSMTP(); // telling the class to use SMTP
       // $mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
          $mail->SMTPAuth = true; // enable SMTP authentication
          $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
          $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server or ssl://smtp.gmail.com
          $mail->Port = 465; // set the SMTP port for the GMAIL server
          $mail->Username = "YOUY0004@gmail.com"; // GMAIL username
          $mail->Password = "abc1212887"; // GMAIL password
          $mail->SetFrom('YOUY0004@ntuNode.com', 'ntuNode');
          //$mail->AddReplyTo("name@yourdomain.com","First Last");
          $mail->Subject = "欢迎注册ntuNode,我们希望能给您带来美好的购物之旅：";
          $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
          $mail->IsHTML(true); //支持html格式内容
          $mail->AddEmbeddedImage("image/img/logo.png","my_attach","attachment");
          $photo = '<img src="cid:my_attach " style="border: none;" />';
          $body = "你好, <b>".$userName."</b>! <br/>这是一封来自ntuNode</a>的邮件!".$photo."<br/>
                 <br/>欢迎成为ntuNode的一员，通过点击以下链接完成注册:<br/><br/>".$verify_url."<br/>";//邮件内容
          $mail->MsgHtml($body);
          $mail->AddAddress($emailAddress, $userName);
          if(!$mail->Send()) 
          {
          echo "<script>alert('System error,Please register later')</script>";
          echo "<script>window.location.href='$url'</script>";
          exit();  
          } 
         session_start();
         $_SESSION['verify'] = $verify_string;
         $_SESSION['newuserName'] = $userName;
         $_SESSION['passWord'] = $userPswd;
         $_SESSION['emailAddress'] = $emailAddress;
         echo "<script>alert('register OK,Please Check your mail')</script>";
         echo "<script>window.location.href='$url'</script>";
         exit;
       }
     }
?>
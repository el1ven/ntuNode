<?php /*%%SmartyHeaderCode:32312541517eeb09ad2-30621934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aecc82cfa9425f644816fcc5c54eb627d3b0684' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1410675199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32312541517eeb09ad2-30621934',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54153330ce6bb6_11674640',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54153330ce6bb6_11674640')) {function content_54153330ce6bb6_11674640($_smarty_tpl) {?><html>
<head>
    <title>MyForm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="application-name" content="Bunkr">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
<body style="background-image:url(image/img/form3.jpg);font-size:18px;font-family:Arial, sans-serif">

    <!导航栏-------------------------------------------------------------------------------!>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:transparent;border: 1px solid transparent;">
       <div class="container">

           <div class="navbar-header">
               <img src="image/img/logo.png"/>
           </div>

           <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav" style="margin-top:12px;">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Introduction</a></li>
                   <li><a href="#">Contact</a></li>
                   <li><a href="#">Manage</a></li>
               </ul>
           </div>
      </div>
  </div>

<div class="container">
    <div class="thumbnail" style="margin-left: auto;margin-right:auto;width:600px;margin-top:120px; filter:alpha(opacity=50); opacity:0.95;">
        <a href="" title="" target="" onclick=""><img class="lazy" src="image/img/formheader.jpg" width="600" height="200"  alt="stickUp"></a>
        <div class="caption">
            <form action="adminLogin.action" method="post">
                Hi,tangxinliang &nbsp;&nbsp;&nbsp;Time: 2014/9/10 10:20 &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="Manage My Node" class="btn" style="background-color: #e67862;"/>
                <hr>
                <br>
                Telephone Number(联系电话):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Product Name(商品简称):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Product Value(商品金额<500rmb):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Product Weight(预估重量kg):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Transportion Number(运单号):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Delivery Company(快递公司):<input type="text" class="form-control" name="adminPwd" placeholder="" style="width:300px;"/>
                <br>
                Is Sensitive Goods:&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"/>
                <hr><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
</div>

<!-- Le javascript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="css/bootstrap/js/bootstrap.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="css/bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery-ui.js"></script>

</body>
</html><?php }} ?>

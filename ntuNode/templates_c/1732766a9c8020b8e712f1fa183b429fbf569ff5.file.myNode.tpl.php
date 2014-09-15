<?php /* Smarty version Smarty-3.1.19, created on 2014-09-14 12:24:57
         compiled from ".\templates\myNode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228275415511c1179d6-97104578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1732766a9c8020b8e712f1fa183b429fbf569ff5' => 
    array (
      0 => '.\\templates\\myNode.tpl',
      1 => 1410683639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228275415511c1179d6-97104578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5415511c1561e1_54397393',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415511c1561e1_54397393')) {function content_5415511c1561e1_54397393($_smarty_tpl) {?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--绘制及移动端缩屏-->
    <title>Manage My Node</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <script>


        var polarData = [
                {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                },
                {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                },
                {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                },
                {
                    value: 120,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Dark Grey"
                }

            ];

            window.onload = function(){
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
                    responsive:true
                });
            };
    </script>
</head>
<body>
<div class="container" style="font-family: 'Open Sans', 'trebuchet ms', arial, sans-serif;">

    <h1 style="text-align: center;"><img src="image/img/logo.png"/>Check My Node:&nbsp;Know Yourself Better</h1>
    <hr><br>

    <h3>Step1:My Interests Of Shopping(我的购物种类分布)</h3><br>
    Food(食品)：<div style="background-color:red;width:20px;height:20px;"></div>
    Cloth(服饰)：<div style="background-color:green;width:20px;height:20px;"></div>
    Electric Product(电子产品)：<div style="background-color:blue;width:20px;height:20px;"></div>
    Needs(生活用品)：<div style="background-color:yellow;width:20px;height:20px;"></div>
    Others：(其他)：<div style="background-color:grey;width:20px;height:20px;"></div>
    <div id="canvas-holder" style="width:40%;text-align:center;margin-left:auto; margin-right:auto;">
        <canvas id="chart-area" width="300" height="300"/>
    </div>

   

    <h3>Step2:My Node Information（我的订单信息）</h3><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>  
                </tr>  
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>    
                </tr>
                <tr>
                    <td>2</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Integer</td>
                    <td>nec</td>
                    <td>odio</td>
                    <td>Praesent</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>libero</td>
                    <td>Sed</td>
                    <td>cursus</td>
                    <td>ante</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>dapibus</td>
                    <td>diam</td>
                    <td>Sed</td>
                    <td>nisi</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Nulla</td>
                    <td>quis</td>
                    <td>sem</td>
                    <td>at</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>nibh</td>
                    <td>elementum</td>
                    <td>imperdiet</td>
                    <td>Duis</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>sagittis</td>
                    <td>ipsum</td>
                    <td>Praesent</td>
                    <td>mauris</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Fusce</td>
                    <td>nec</td>
                    <td>tellus</td>
                    <td>sed</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>augue</td>
                    <td>semper</td>
                    <td>porta</td>
                    <td>Mauris</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>massa</td>
                    <td>Vestibulum</td>
                    <td>lacinia</td>
                    <td>arcu</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>eget</td>
                    <td>nulla</td>
                    <td>Class</td>
                    <td>aptent</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>taciti</td>
                    <td>sociosqu</td>
                    <td>ad</td>
                    <td>litora</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>torquent</td>
                    <td>per</td>
                    <td>conubia</td>
                    <td>nostra</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>per</td>
                    <td>inceptos</td>
                    <td>himenaeos</td>
                    <td>Curabitur</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>sodales</td>
                    <td>ligula</td>
                    <td>in</td>
                    <td>libero</td>
                </tr>    
            </tbody>      
        </table>
    </div>

    <div style="text-align:center;margin-left:auto; margin-right:auto;">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
           <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>
<!-- Le javascript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="css/bootstrap/js/bootstrap.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="css/bootstrap/js/jquery.js"></script>
<script src="css/bootstrap/js/jquery-ui.js"></script>
<script src="css/bootstrap/js/Chart.js"></script>

</body>
</html><?php }} ?>

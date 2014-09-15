<html lang="en">
<title>Node</title>
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

<body>

  <!导航栏-------------------------------------------------------------------------------!>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:transparent;border: 1px solid transparent;">
       <div class="container">
           <div class="navbar-header">
               <a class="navbar-brand" href="#">iNTU-Node</a>
           </div>
           <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Introduction</a></li>
                   <li><a href="#">Contact</a></li>
                   <li><a href="#">Manage</a></li>
               </ul>
           </div><!--/.nav-collapse -->
      </div>
  </div>

  <!大面板-------------------------------------------------------------------------------!>

  <div class="container" style="padding-top:0px;padding-left:0px;padding-right:0px;width:100%;height:800px;">

      
          <div class="row">
              <!图片切换-------------------------------------------------------------------------------!>
              <div class="col-md-12">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">

                          <div class="item active">
                              <img alt="First slide" src="image/img/show1.jpg">
                              <div class="carousel-caption" style="top:200px;left:0px;">

                                <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                color: #fff;background-color: transparent;border-color: #fff;border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;background-color: rgba(255,255,255,.25)!important;font-size: 14px;" data-toggle="modal" data-target=".bs-example-modal-sm">Log in</a>

                                <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;font-size: 14px;margin-left: 8px;
                                background-color: #e67862;border: 1px solid #e1644f;color: #fff;" data-toggle="modal" data-target="#myModal">Register</a>

                                <h1>Try to fill the form and enjoy the shopping!</h1>
                                <h2><a class="btn btn-green" href="#" role="button">Read More</a></h2>

                              </div>
                          </div>

                          <div class="item">
                              <img alt="Second slide" src="image/img/show2.jpg">
                                <div class="carousel-caption" style="top:200px;left:0px;">

                                  <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                color: #fff;background-color: transparent;border-color: #fff;border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;background-color: rgba(255,255,255,.25)!important;font-size: 14px;" data-toggle="modal" data-target=".bs-example-modal-sm">Log in</a>

                                <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;font-size: 14px;margin-left: 8px;
                                background-color: #e67862;border: 1px solid #e1644f;color: #fff;" data-toggle="modal" data-target="#myModal">Register</a>

                                <h1>Try to fill the form and enjoy the shopping!</h1>
                                <h2><a class="btn btn-green" href="#" role="button">Read More</a></h2>

                              </div>
                          </div>
                          <div class="item">
                              <img alt="Third slide" src="image/img/show3.jpg">
                                <div class="carousel-caption" style="top:200px;left:0px;">

                                  <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                color: #fff;background-color: transparent;border-color: #fff;border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;background-color: rgba(255,255,255,.25)!important;font-size: 14px;" data-toggle="modal" data-target=".bs-example-modal-sm">Log in</a>

                                <a href="#" class="btn btn-outline-inverse login login-attractive" style="
                                border-width: 2px;font-weight: 700;text-transform: uppercase;border-radius: 50px;padding: 8px 18px;font-size: 14px;margin-left: 8px;
                                background-color: #e67862;border: 1px solid #e1644f;color: #fff;" data-toggle="modal" data-target="#myModal">Register</a>

                                <h1>Try to fill the form and enjoy the shopping!</h1>
                                <h2><a class="btn btn-green" href="#" role="button">Read More</a></h2>

                              </div>
                          </div>

                      </div>

                      <!-- Controls -->

                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                      </a>

                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>

              <!登陆注册按钮区域-------------------------------------------------------------------------------!>

              <!--Login Modal  -->
                      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <h4 class="modal-title">Login Form</h4>
                                  </div>
                                  <form action="login.php" method="post"><!--login.action对应LoginAction-->
                                      <div class="modal-body">
                                          <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-user"></span>
                                      </span>
                                              <input type="text" class="form-control" placeholder="Username" name="userName"/>
                                          </div>
                                          <br>
                                          <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-lock"></span>
                                      </span>
                                              <input type="password" class="form-control" placeholder="Password" name="password"/>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                          <button type="reset" class="btn btn-danger">Reset</button>
                                      </div>
                                  </form>

                              </div>
                          </div>
                      </div>
                <!--Login Modal  -->

                      



                <!--Register Modal  -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Register Form</h4>
                                  </div>
                                  <div class="modal-body">
                                      <form action="register.php" method="post"><!--register.action对应RegisterAction-->
                                          <table cellpadding="2" cellspacing="2" style="border-spacing:5px;">
                                              <tr>
                                                  <td>
                                                      <div class="input-group input-group-lg">
                                                      <span class="input-group-addon">
                                                           <span class="glyphicon glyphicon-user" style="color:#1abc9c;"></span>
                                                      </span>
                                                          <input type="text" class="form-control" placeholder="Username" style="width:250px;" name="userName"/>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div style="color:#e74c3c;">&nbsp;&nbsp;&nbsp;&nbsp;A-Z,a-z,0-9 and _</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="input-group input-group-lg">
                                                      <span class="input-group-addon">
                                                           <span class="glyphicon glyphicon-lock" style="color:#1abc9c;"></span>
                                                      </span>
                                                          <input type="password" class="form-control" placeholder="Password" style="width:250px;" name="userPwd"/>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div style="color:#e74c3c;">&nbsp;&nbsp;&nbsp;&nbsp;A-Z,a-z and 0-9</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="input-group input-group-lg">
                                                      <span class="input-group-addon">
                                                           <span class="glyphicon glyphicon-envelope" style="color:#1abc9c;"></span>
                                                      </span>
                                                          <input type="text" class="form-control" placeholder="Email" style="width:250px;" name="userEmail"/>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div style="color:#e74c3c;">&nbsp;&nbsp;&nbsp;&nbsp;optional,deadline notification</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="input-group input-group-lg">
                                                      <span class="input-group-addon">
                                                           <span class="glyphicon glyphicon-qrcode" style="color:#1abc9c;"></span>
                                                      </span>
                                                          <input type="text" class="form-control" placeholder="Name" style="width:250px;" name="userReal"/>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div style="color:#e74c3c;">&nbsp;&nbsp;&nbsp;&nbsp;optional</div>
                                                  </td>
                                              </tr>
                                          </table>
                                          <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Register</button>
                                              <button type="reset" class="btn btn-warning">Reset</button>
                                          </div>
                                      </form>
                                  </div>

                              </div>
                          </div>
                      </div>
                <!--Register Modal  -->

 
          </div>
      <br><br>
    



      <!下方信息显示区域-------------------------------------------------------------------------------!>
      <div class="row">
          <div class="col-lg-4">
              <img class="img-circle" src="image/img/colors.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <img class="img-circle" src="image/img/gift.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
              <h2>Heading</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <img class="img-circle" src="image/img/time.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
      </div>


      <!--footer-->
      <footer>
        <div class="container" style="background-color:#4A4849;width:100%;">
          <div class="row">
            <div class="col-xs-12">
                <div class="submit" style="color:white;">
                    <p class="text-center">如果你的网站基于Bootstrap构建、并且用心的设计，那就提交到 <a href="mailto:admin@bootcss.com">admin@bootcss.com</a> 在这里展示吧！</p>
                    <p class="text-center">请注明“Bootstrap网站作品提交 -- 你的网址”</p>
                </div>
            </div>
          </div>
        </div>
    </footer>


  </div>

  <!-- Le javascript
   ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="css/bootstrap/js/bootstrap.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="css/bootstrap/js/jquery.js"></script>
  <script src="css/bootstrap/js/jquery-ui.js"></script>

  <script src="css/bootstrap/js/carousel.js"></script>
  <script src="css/bootstrap/js/modal.js"></script>

</body>
</html>





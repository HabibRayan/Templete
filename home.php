<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/ex.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/styel.css">
    <link rel="stylesheet" href="bootstrap/css/test.css">
    <link rel="stylesheet" href="bootstrap/css/demo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/jquery-3.3.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/simpleCart.min.js"></script>
</head>

<body style="background-color: #D4DFE4">

<div style="width: 70%;margin: auto">
    <div style="text-align: center">
        <div class="row">
            <img src="bootstrap/image/woocrackv3.png" alt="" width="240">
        </div>


    </div>

    <div class="row" style="text-align: center">
        <div class="col-md-6 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
        </div>
    </div>
    <div class="">
        <nav class="navbar " id="my-navbar">
            <div class="" style="background:#324C69;">
                <div class="navbar-header">
                    <button style="background:white;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navber-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar "></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="navber-collapse">
                    <ul class="nav navbar-nav"  >
                        <li>
                            <a href=""><strong style="color: #ffffff"><i class="glyphicon glyphicon-home"></i>Home</strong></a>
                        </li>
                        <li>
                            <a href=""><strong style="color: #ffffff"><i class="glyphicon glyphicon-align-justify"></i> Category</strong></a>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown">
                                <strong style="color: #ffffff">
                                    <i class="glyphicon glyphicon-refresh fa-spin" aria-hidden="true"></i>
                                    Update<b class="caret"></b></strong>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Update History</a> </li>
                                <li><a href="">How To Update</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><strong style="color: #ffffff"><i class="glyphicon glyphicon-tag"></i> Shop</strong></a>
                        </li>
                        <li style="background:rgba(0,255,124,0.87);">

                            <a href=""><strong style="color: #ffffff;"> Join Now</strong></a>
                        </li>
                        <li>
                            <a href=""><strong style="color: #ffffff"><i class=" glyphicon glyphicon-log-in"></i> Login</strong></a>
                        </li>
                        <li style="background: rgba(8,112,250,0.78);flex: auto;float: right" >
                            <a href="" >
                                <strong style="color:#ffffff;"><i class="glyphicon glyphicon-shopping-cart"></i> CART</strong>
                            </a>
                        </li>

                    </ul>
                    <div>
                        <ul class="nav"  style="float: right;">

                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </div>

    <div>
        <p align="center" style="background:#324C69;padding:10px;margin-bottom:20px">
            <b style="color:#B6D8FF;text-transform:capitalize">Join The Club, And Access <u style="color:#fff;">1980</u> Items For Free - </b>
            <a href="">
                <button type="button" class="button-join" style="background:#AE4E12;color:#fff;"> <b>JOIN CLUB NOW</b>
                </button>
            </a>
        </p>
    </div>

<!--    home content-->
<div style="width: 97%;height: auto;margin-left: 15px">
  <div class="row">
    <div style="width: 49%;float: left;background-color: white">
        <div style="margin: 10px;float: left">
            <img src="bootstrap/image/3.jpg" width="60" height="60">
        </div>
        <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
            <strong>Product Name</strong>
            <p>Product Short Description </p>
        </div>


        <br><hr style="margin: 6px 0px 0px 0px">

        <div style="margin: 10px;float: left">
            <img src="bootstrap/image/3.jpg" width="60" height="60">
        </div>
        <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
            <strong>Product Name</strong>
            <p>Product Short Description </p>
        </div>
        <br><hr style="margin: 6px 0px 0px 0px">

        <div style="margin: 10px;float: left">
            <img src="bootstrap/image/3.jpg" width="60" height="60">
        </div>
        <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
            <strong>Product Name</strong>
            <p>Product Short Description </p>
        </div>
    </div>

      <div style="width: 49%;float: right;background-color: white">
          <div style="margin: 10px;float: left">
              <img src="bootstrap/image/3.jpg" width="60" height="60">
          </div>
          <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
              <strong>Product Name</strong>
              <p>Product Short Description </p>
          </div>

          <br><hr style="margin: 6px 0px 0px 0px">

          <div style="margin: 10px;float: left">
              <img src="bootstrap/image/3.jpg" width="60" height="60">
          </div>
          <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
              <strong>Product Name</strong>
              <p>Product Short Description </p>
          </div>
          <br><hr style="margin: 6px 0px 0px 0px">

          <div style="margin: 10px;float: left">
              <img src="bootstrap/image/3.jpg" width="60" height="60">
          </div>
          <div style="margin-top: 6px;color: rgba(0,24,84,0.91) ">
              <strong>Product Name</strong>
              <p>Product Short Description </p>
          </div>
    </div>
  </div>




</div>
<br>
    <div class="">
        <p align="center" style="background:#324C69;padding:10px;margin-bottom:20px">
            <b style="color:#B6D8FF;text-transform:capitalize">All Plugins And Themes 100% Original With GPL License. We Not Provided Nulled/Crack Item</b>
        </p>
    </div>

    <div style="text-align: center">
        <b ><u>BEST PREMIUM WOOCOMMERCE PLUGINS</u></b>
    </div>

<!--    homme content-->
    <div class="" style="margin-left:5px;margin-right: 5px">
        <div class="row" style="margin-top: 20px">
            <div class="">
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 220px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 17px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>


    <div style="text-align: center">
        <b ><u>BEST PREMIUM WORDPRESS PLUGINS</u></b>
    </div>

    <!--    homme content-->
    <div class="" style="margin-left:5px;margin-right: 5px">
        <div class="row" style="margin-top: 20px">
            <div class="">
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 220px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 17px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <b ><u>BEST PREMIUM WOOCOMMERCE THEMES</u></b>
    </div>

    <!--    homme content-->
    <div class="" style="margin-left:5px;margin-right: 5px">
        <div class="row" style="margin-top: 20px">
            <div class="">
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 220px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 17px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 " style="padding:10px 0px 0px 10px;height: 235px;width: 232px; " >
                    <a href="https://woocrack.com/product-category/wordpress-plugins/">
                        <div class="imageBox ">
                            <img src="bootstrap/image/2.jpg" class="img-responsive">
                            <h3 class="textPositionH3">Version <br>
                                2.2.2
                            </h3>

                            <div style="padding: 5px">
                                <strong>product Name</strong>
                            </div>


                            <a href="">
                                <button style="margin-left: 3px">DOWNLOAD</button>

                                <button class="button" type="button" data-hover="Add To Cart" data-active="I'M ACTIVE" style="margin-left: 0px">
                                    <span style="padding: 25px" > $5.00 </span>
                                </button>
                            </a>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

<!--    footer-->
    <footer >

        <div class="row" style="text-align: center">
            <p><strong style="color: #3B5B7E;">Stay Connected With Me...</strong></p>
            <a href="" style="color: ;font-size: 50px;" ><i class="fa fa-facebook"></i></a>
            <a href="" style="color: rgba(22,102,250,0.78);font-size: 50px;padding: 15px" ><i class="fa fa-twitter"></i></a>
            <a href="" style="color: ;font-size: 50px;" ><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="row xfoot" style=" ">
            <div style="text-align: center; color: white;margin-top: 15px">
                <a href=""><strong style="color: white;padding: 10px"> Terms &amp; conditions</strong></a>
                <a href=""><strong style="color: white;padding: 10px">Faq</strong></a>
                <a href=""><strong style="color: white;padding: 10px">Dmca</strong></a>
                <a href=""><strong style="color: white;padding: 10px">Sitemap</strong></a>
            </div>
        </div>

        <div class="copyright" style="text-align: center; padding: 10px">
            <div class="footercredits">Copyright © Woocrack | powered by Pim Studio</div>
        </div>
    </footer>
</div>




</body>
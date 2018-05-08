<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">

    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/jquery-3.3.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/simpleCart.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse" >
<nav style="" class="navbar">
    <div class="container-fluid">
        <div class="col-md-8 col-sm-9 col-lg-9" style="margin-left:200px;">
        <ul class="nav navbar-nav" >
            <li class="active">
                <a href="#"> <i class="glyphicon glyphicon-home"></i><strong> Home</strong>
                </a>
            </li>
            <li class="active">
                <a href="#"><i class="glyphicon glyphicon-align-justify"></i><strong> Category</strong></a>
            </li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-refresh fa-spin" aria-hidden="true">
                    </i> <strong > Update</strong><b class="caret"></b>
                </a>
            <ul class="dropdown-menu">
                <li><a href="">Update History</a> </li>
                <li><a href="">How To Update</a> </li>
            </ul>
            </li>
            <li class="active">
                <a href="#"><strong> Shop</strong></a>
            </li>
            <li style="background:rgba(7,255,118,0.87);">
                <a href="#"> <strong style="color: rgba(255,0,121,0.87)"> JOIN CLUB</strong></a>
            </li>
            <li class="active">
                <a href="#" ><i class=" glyphicon glyphicon-log-in"></i><strong> Login</strong> </a>
            </li>
        </ul>

    </div>
        <div class="col-md-4 col-sm-3 col-lg-3">
            <ul class="nav navbar-nav">
                <li class="active" style="color: rgba(50,235,255,0.87)">

                    <strong >Cart(0)</strong> <i>|</i><strong>0.00</strong><i class="glyphicon glyphicon-shopping-cart"></i>
                </li>
            </ul>
        </div>

    </div>
   </nav>
</div>

<div class="container">
    <div class="navbar col-ms-12" style="background:#3B5B7E;">
        <ul class="nav navbar-nav" >
            <li >
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
        </ul>
        <div class="" style="background:#3B5B7E;">
            <ul class="nav navbar-nav" >
                <strong style="color:#ffffff;padding: 20px">Cart (0.0)</strong>
            </ul>
        </div>


    </div>


</div>

</body>
</html>

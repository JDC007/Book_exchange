<?php
include("connect.php");

if(isset($_POST) & !empty($_POST))
{
$bookname = $_POST['bookname'];
$bookdetails = $_POST['bookdetails'];
$bookpic = $_POST['bookpic'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$edition = $_POST['edition'];
$isbn = $_POST['isbn'];
$price = $_POST['price'];
$dealname = $_POST['dealname'];
$catname = $_POST['catname'];


$sql = "INSERT INTO bookinfo (bookname, bookdetails, bookpic, author, publisher, edition, isbn, price, dealname, catname) VALUES ('$bookname', '$bookdetails', '$bookpic', '$author', '$publisher', '$edition', '$isbn', '$price', '$dealname', '$catname')";


if(mysqli_query($connection, $sql))
{

    echo "Records inserted successfully.";

} 
else
{

    echo "ERROR: Could not able to submit data";

}

header("Location: post-success.html");

}

//$sql2 = "INSERT INTO dealtype (dealname) VALUES ('$dealname')";

//mysqli_query($connection, $sql2);



?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookseeking - Home</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{URL::asset('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{URL::asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{URL::asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{URL::asset('plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{URL::asset('plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{URL::asset('plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{URL::asset('plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{URL::asset('plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{URL::asset('img/favicon.png')}}" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<!--Header Starts Here -->
<section>
  <div class="container" style="height: 160px; margin-top: -100px; margin-bottom:50px;" >
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="index.html">
            <img style="height:280px; width:280px;" src="images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="all-posts.html">All Books</a>
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="category.html">Engineering</a>
                  <a class="dropdown-item" href="single.html">Business</a>
                  <a class="dropdown-item" href="store-single.html">English</a>
                  <a class="dropdown-item" href="dashboard.html">Comics</a>
                  <a class="dropdown-item" href="user-profile.html">Novels</a>
                  <a class="dropdown-item" href="submit-coupon.html">Poems</a>
                  <a class="dropdown-item" href="blog.html">Travel</a>
                  <a class="dropdown-item" href="single-blog.html">Religious</a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Deals <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Buy</a>
                  <a class="dropdown-item" href="#">Sell</a>
                  <a class="dropdown-item" href="#">Borrow</a>
                  <a class="dropdown-item" href="#">Exchange</a>
                  <a class="dropdown-item" href="#">Lend</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              <li class="nav-item">
                <a class="nav-link login-button" href="account-info.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link add-button" href="post-ads.php"><i class="fa fa-plus-circle"></i> Add Post</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--Header Ends Here -->


  <section id="content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-3"></div> 
          <div class="col-md-6" "col-md-offset-6" style="background-color:light;">
            <div class="page-login-form box">
              <div class="col-md-3"></div>
              <h3>
                Post Ads
              </h3>
              <form method="POST" role="form" class="login-form">
                <div class="form-group" style="margin-top: 30px;">
                  
                  <input type="text" style="text-align:center" id="#" class="form-control" name="bookname" placeholder="Book Name" required>
                </div> 

                
                <div class="form-group">
                  
                  <input type="textarea" style="text-align:center" id="#" class="form-control" name="bookdetails" placeholder="Book Description">
                </div> 
                
                
                  
                    <div class="form-group">
                <label class="form-group" for="textarea"> Picture </label>
                <div class="col-md-12">
                <div class="mb10"  style="margin-bottom: 20px;">
                  <input id="input-upload-img1" type="file" class="file" name="bookpic" data-preview-file-type="text">
                </div>
                
                
                <div class="form-group">
                  
                    <input type="text" style="text-align:center" id="#" class="form-control" name="author" placeholder="Author Name">
                </div> 

                
                <div class="form-group">
                  
                    <input type="text" style="text-align:center" id="#" class="form-control" name="publisher" placeholder="Publisher Name">
                </div>

                
                <div class="form-group">
                  
                    <input type="text" style="text-align:center" id="#" class="form-control" name="edition" placeholder="Edition">
                </div>

                
                <div class="form-group">
                  
                    <input type="text" style="text-align:center" id="#" class="form-control" name="isbn" placeholder="ISBN">
                </div>

                
                <div class="form-group">
                  
                    <input type="number" style="text-align:center" id="#" class="form-control" name="price" placeholder="Price">
                </div>


                <div class="form-group">
<label class="col-md-12 control-label">Category</label>
<div class="col-md-12">
<select name="catname" id="category-group" class="form-control" method="POST" required>
<option value="0" selected="selected"> Select a category...</option>
<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Engineering -
</option>
<option value="CSE"> CSE</option>
<option value="EEE"> EEE</option>
<option value="CEE"> CEE</option>
<option value="Physics and Mathematics"> Physics and Mathematics
</option>

<option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -  Business -
</option>
<option value="Marketing"> Marketing</option>
<option value="Finance"> Finance</option>
<option value="Human Resource"> Human Resource</option>
<option value="Economics"> Economics</option>

<option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - English -
</option>
<option value="ENG102"> ENG102</option>
<option value="ENG103"> ENG103</option>
<option value="ENG105"> ENG105</option>
<option value="ENG115"> ENG115</option>

<option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Novels -
</option>
<option value="Adventure Novels"> Adventure Novels</option>
<option value="Drama Novels"> Drama Novels</option>
<option value="Translated Novels"> Translated Novels</option>
<option value="West Bengal Novels"> West Bengal Novels</option>


<option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Religious -
</option>
<option value="Islamic">Islamic</option>
<option value="Hindu"> Hindu</option>
<option value="Buddhism"> Buddhism</option>
<option value="Christianity"> Christianity</option>

<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Poems -
</option>
<option value="Bengali Poems"> Bengali Poems</option>
<option value="English Poems"> English Poems</option>
<option value="Translated Poems"> Translated Poems</option>
<option value="West Bengal Poems"> West Bengal Poems</option>

<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Comics -
</option>
<option value="Action Comics"> Action Comics</option>
<option value="Superhero Comics"> Superhero Comics</option>
<option value="Translated Comics"> Translated Comics</option>
<option value="Comedy Comics"> Comedy Comics</option>

</select>
</div>
</div>

<!-- <select name="dealname" type="text" class="form control" method="POST" required>
  <option value="0" selected="selected"> Select a deal type...</option>
  <option value="Exchange">Exchange</option>
  <option value="Lend">Lend</option>
  <option value="Borrow">Borrow</option>
  <option value="Sell">Sell</option>
  <option value="Buy">Buy</option>
</select>  -->

<div class="form-group">
<label class="col-md-12 control-label">Deals Types</label>
<div class="col-md-12">
<select name="dealname" id="category-group" class="form-control" method="POST" required>
  <option value="0" selected="selected"> Select a deal type...</option>
  <option value="Exchange">Exchange</option>
  <option value="Lend">Lend</option>
  <option value="Borrow">Borrow</option>
  <option value="Sell">Sell</option>
  <option value="Buy">Buy</option>
</select>
</div> 

      
      <button class="btn btn-success" style="background-color:green; margin-top: 20px; margin-bottom: 10px;" >Post</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo.png" alt="" style="width: 200px; height:80px;">
          <!-- description -->
          <p class="alt-color">Bookseeking is an online platform where users can exchange books with other users and also borrow, lend, buy and sell books online. </p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block"  style="margin-top:40px">
          
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block" style="margin-top:40px">
          
          <ul>
            <li><a href="#">Browse categories</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Donate</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7" style="margin-top:42px;">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="mobile-icon" >
          </a>
          <p>Get the BookSeeking Mobile App </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2017. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="{{ URL::asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/tether/js/tether.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/raty/jquery.raty-fa.js')}}"></script>
  <script src="{{ URL::asset('plugins/bootstrap/dist/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{ URL::asset('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
  <script src="{{ URL::asset('plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
  <script src="{{ URL::asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw')}}"></script>
  <script src="{{ URL::asset('js/scripts.js')}}"></script>

</body>

</html>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
        function checkvalidation() {
            var username = document.getElementById("user");
            if (username.value.length > 15) {
                alert("Username should not exceed 15 characters!!");
                return false;}
            const phone = document.getElementById("mobile");
            if (phone.value.length != 10) {
                alert("Phone number should be of 10 digits!!");
                return false;}
            return true;}
    </script>


  </head>
<body>

<?php include 'menu.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home1.jpg" alt="stadium" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Camp Nou</h3>
        <p>The iconic stadium of Barcelona</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/home2.jpg" alt="team" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Squad Team</h3>
        <p>World class players!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/home3.jpg" alt="logo" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Crest</h3>
        <p>Visca El Barca!!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
<img src="images/aboutus.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4">FC BARCELONA MUSEUM</h2>
    <p class="py-3">A place where you can see the greatness achieved by the club FC BARCELONA!! Come and get the taste of what it's like to be a catalan.</p>
    <a href="about.php" class="btn btn-success">check more</a>
</div>
</div>
</div>
</section>


<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Our Facilities</h2>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="card-img-top" src="images/service1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trophy</h4>
    <p class="card-text">See the Trophy Cabinet</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class=col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="card-img-top" src="images/service2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">UEFA Champions League</h4>
    <p class="card-text">Watch UCL with catalans</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class=col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="card-img-top" src="images/service3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">GOAT</h4>
    <p class="card-text">See all the videos of the one and only GOAT</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

</div>
</div>
</section>


<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery1.jpg" class="img-fluid pf-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery2.jpg" class="img-fluid pf-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery3.jpg" class="img-fluid pf-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery4.jpg" class="img-fluid pf-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery5.jpg" class="img-fluid pf-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gallery6.jpg" class="img-fluid pf-4">
        </div>
</div>
</section>






<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Reserve Your Visit!!</h2>
    </div>

<div class="w-50 m-auto">
    <form action="userinfo.php" onsubmit="return checkvalidation()" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" id="user" name="user"autocomplete="off" class="form-control">
</div>
<div class="form-group">
            <label>Email-ID</label>
            <input type="text"name="email"autocomplete="off" class="form-control">
</div>
<div class="form-group">
            <label>Mobile Number</label>
            <input type="text" id="mobile" name="mobile"autocomplete="off" class="form-control">
</div>
<div class="form-group">
            <label>COMMENT!!</label>
            <textarea class="form-control" name="comments">
</textarea>
</div>
<button type="submit" class="btn btn-success">submit</button>
</form>
</section>




<footer>
    <p class="p-3 bg-dark text-white text-center">FcBarcelona,Spain</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div>
    <nav class="navbar fade-up">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="imgs\logoC.jpg" alt="Logo" width="60" height="44" class="d-inline-block align-text-top">      
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Customize your look
                </a>
                <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="#">Ethnic</a></li>
                   <li><a class="dropdown-item" href="#">Western</a></li>
                   <li><a class="dropdown-item" href="#">Salwars</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">AboutUs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
         <!-- <form class="d-flex" role="search">
            <a href="login.php" class="btn btn-outline-success">Login</a>
          </form>-->
            
               <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  LoginAs
</button>

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login Options</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <a href="testLogin.php" class="btn btn-outline-success">Admin</a>
        <a href="userLogin.php" class="btn btn-outline-success">User</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </div>
      </nav>
   <!-------------------------------------------------------------------->
  <section class="homepage fade-down">
    <div class="container py-5">
      <div class="row py-4">
        <div class=" pt-5 text-center">
          <p class="pt-5 ">"From our heart to your wardrobe,<br> wear the warmth that tells your story."</p>
          <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Our collections</button>
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------->

  <section class="text-center">
    <div class="container">
        <div class="row">
            
            <div class="col">
                <img src="imgs/icon2.jpg" class="img-fluid" alt="Image 1">
            </div>
           
            <div class="col">
                <img src="imgs/icon1.jpg" class="img-fluid" alt="Image 2">
            </div>
           
            <div class="col">
                <img src="imgs/icon3.jpg" class="img-fluid" alt="Image 3">
            </div>
        </div>
    </div>
</section>

  <!------------------------------------------------------------------------>
  <div class="custom-section">
  <figure class="text-center">
  <blockquote class="blockquote  customize animate">
    <p>Design Your Signature Style !</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Show off your unique style  <cite title="Source Title">with custom pieces crafted just for you.</cite>
  </figcaption>
</figure>
    <!--h1>customize your look!</h1-->
     <div class="row row-cols-1 row-cols-md-3 g-4 ">
      <div class="col">
        <div class="card h-100">
         <img src="imgs\gown1.jpg" class="card-img-top animate" alt="...">
         <div class="card-body">
           <h5 class="card-title">Gown</h5>
            <p class="card-text">
              Create the gown of your dreams with our custom design service! Schedule a consultation with our expert designer to bring your unique vision to life using premium fabrics and personalized details. Experience elegance tailored just for you—book your appointment today!
            </p>
          </div>
            <button type="button" class="btn btn-outline-danger " onclick="openWhatsApp()">Create My Gown</button>
        </div>
      </div>
    <div class="col">
    <div class="card h-100">
      <img src="imgs\lehenga.jpg" class="card-img-top animate" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lehenga</h5>
        <p class="card-text">
Create your dream lehenga with our custom design service! Collaborate with our expert designer to personalize every detail, ensuring it reflects your unique style. Book your consultation today and let’s craft a stunning piece just for you!
.</p>
      </div>
      <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Create My Lehenga</button>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imgs\frock.jpg" class="card-img-top animate" alt="...">
      <div class="card-body">
        <h5 class="card-title">Frocks</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Create My cloth</button>
     </div>
     </div> 
     </div>
  </div>

<!--------------------------------------------------------------->

<section class="container-lg pt-5">
<h1 class="text-center customize animate">Our Designs, Your Stories</h1>
  <div id="carouselExampleDark" class="carousel carousel-dark slide animate">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner  ">
    <div class="carousel-item active main-container" data-bs-interval="800">
      <img src="imgs\bride.jpg" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block overlay">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="800">
      <img src="imgs\brd.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="800">
      <img src="imgs\wd.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!---------------------------------------------------------------------->

<section class="pt-5 mb-5 dress px-5 animate">
  <div class="container-fluid explore">
    <div class="row">
      <div class="container text-center contain">
      <h1>Explore our creations</h1>
      <p>explore and let our designs help you personalize everydetail to bring your vision to life.</p>
      <button type="button" class="btn btn-primary " onclick="openWhatsApp()">Book appointment</button>
      </div>    
    </div>
  </div>
 </section>
</div>

<!-------------------------------------------------------------------->

<section class="mt-5 mb-5 ">
  <div class="container-sm animate" style="width: 67%;">
<div class="card bg-dark text-white">
  <img src="imgs/exp.jpg" class="card-img contact-img" alt="...">
  <div class="card-img-overlay contact-us">
    <h1 class="text-center card-title">Contact-Us</h1>
    <form method="POST">
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control " id="Email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="String" class="form-control" id="Name" name="name">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Query</label>
    <input type="String" class="form-control" id="query" name="query">
  </div>
  <div class="mb-3  d-flex justify-content-center">
  <input type="submit" class="btn btn-primary " name="submit" value="submit">
 </div>
</form>     
 
</div>   
</div>
</div>
</section> 
<?php 
   if($_POST['submit']){
      $email=$_POST['email'];
      $name=$_POST['name'];
      $query=$_POST['query'];
      $data="INSERT INTO customers(email,name,query) VALUES('$email','$name','$query')";
      $check=mysqli_query($connection,$data);
      if($check){
       header('location:demo.php');
      }
      else{
        echo"record not inserted";
      }
   }

?>  

 <!----------------------------------------------------------------->

 <div class="pt-5 mini animate">
   <footer class="footer animate">
  <div class="container">
  <div class="row">
    <div class="footer-col">
        <h4>Sobhagu</h4>
        <p>Disign your dream OutFitDisign your dream OutFitDisign your dream OutFit</p>
        <div class=" text-center text-left">
      <ul class="list-unstyled list-inline">
        <li class="list-inline-item">
          <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-facebook-f fs-3"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-twitter fs-3"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-instagram fs-3"></i></a>
        </li>
      </ul>
  </div>
    </div>  
   
    <div class="footer-col">
        <h4>Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none">home</a></li>
          <li><a href="#" class="text-decoration-none ">aboutUs</a></li>
          <li><a href="#" class="text-decoration-none">privacy policy</a></li>
        </ul>
    </div> 
  
    <div class="footer-col">
        <h4>categories</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none ">ethnic</a></li>
          <li><a href="#" class="text-decoration-none ">westren</a></li>
        </ul>
    </div> 
 
    <div class="footer-col">
      <h4>Contact-Us</h4>
        <div class="social-links">
          <p><i  class="fas fa-home mr-3"></i>Karnataka, India</p>
          <p><i class="fas fa-envelope mr-3"></i>sobhagu@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i>+91 9900887766</p> 
        </div>
    </div>
</footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
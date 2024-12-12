<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    <nav class="navbar ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img\logoC.jpg" alt="Logo" width="60" height="44" class="d-inline-block align-text-top">      
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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
          <form class="d-flex" role="search">
            <a href="login.php" class="btn btn-outline-success">Login</a>
          </form>
        </div>
      </nav>
   <!-------------------------------------------------------------------->
  <section class="homepage">
    <div class="container py-5">
      <div class="row py-4">
        <div class=" pt-5 text-center">
          <p class="pt-5 ">"From our heart to your wardrobe,<br> wear the warmth that tells your story."</p>
          <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Our collections</button>
        </div>
      </div>
    </div>
  </section>
  <!--------------------------------------------------------------------->
  <section class="mini pt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <img src="img/icon2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-4" >
        <img src="img/icon1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-4">
        <img src="img/icon3.jpg" class="img-fluid" alt="">
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------------------------------->
  <div class="custom-section pt-5">
  <figure class="text-center">
  <blockquote class="blockquote  customize">
    <p>Design Your Signature Style !</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Show off your unique style  <cite title="Source Title">with custom pieces crafted just for you.</cite>
  </figcaption>
</figure>
    <!--h1>customize your look!</h1-->
     <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
         <img src="img\gown1.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Gown</h5>
            <p class="card-text">
              Create the gown of your dreams with our custom design service! Schedule a consultation with our expert designer to bring your unique vision to life using premium fabrics and personalized details. Experience elegance tailored just for you—book your appointment today!
            </p>
          </div>
            <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Create My Gown</button>
        </div>
      </div>
    <div class="col">
    <div class="card h-100">
      <img src="img\lehenga.jpg" class="card-img-top" alt="...">
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
      <img src="img\frock.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Frocks</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <button type="button" class="btn btn-outline-danger" onclick="openWhatsApp()">Create My cloth</button>
     </div>
     </div> 
     </div>
  </div>
<!----------------------------------------------------------------------->
<section class="container-lg pt-5">
<h1 class="text-center">Our Designs, Your Stories</h1>
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="800">
      <img src="img\engagement.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="800">
      <img src="img\birthd.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="800">
      <img src="img\wedding.jpg" class="d-block w-100" alt="...">
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
<!--------------------------------------------------------------->
<section class="pt-5 dress">
  <div class="container-fluid explore">
    <div class="row">
      <div class="container text-center contain">
      <h1>Explore our creations</h1>
      <p>explore and let our designs help you personalize everydetail to bring your vision to life.</p>
      <button type="button" class="btn btn-primary" onclick="openWhatsApp()">Book appointment</button>
      </div>    
    </div>
  </div>
</section>
</div>
<!------
<div class="container">
  <div class="content-form">
    <section>
      <h2>Address</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
       Corporis ab officia iste exercitationem error incidunt doloribus, <br>
       veniam repellat fugiat? Tempore nisi ipsum odio! <br></p>
    </section>
    
    <section class="fa fa-phone fa-2x">
      <h2>Phone</h2>
      <p>9901258266</p>
    </section>

    <section class="fa fa-map fa-2x">
      <h2>E-mail</h2>
      <p>
        lorem@temprary.net.in
      </p>
    </section>

    <section></section>
  </div>
</div>
---->
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
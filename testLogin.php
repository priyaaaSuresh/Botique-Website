<?php 
 include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<nav class="navbar fade-up">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="imgs\logoC.jpg" alt="Logo" width="60" height="44" class="d-inline-block align-text-top">      
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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

        </div>
      </nav>
   <center>
    <h1 class="text-center">LOGIN</h1>
   	<div class="container-sm pt-5" style=" background-color: #e6e6fa;">

   <form method="POST" action="#">		
	<div>
      <label>UserName</label>
      <input type="text" name="username" required>
    </div>

    <div class="pt-5">
      <label>password</label>
      <input type="password" name="password" required>
    </div>
      <br><br>
    <div>
      <input type="submit" value="login" name="login">
    </div>
   	</div>
  </form>

   </center>
   <?php 
     if($_POST['login']){
     	$username=$_POST['username'];
     	$password=$_POST['password'];

     	$query="SELECT * FROM logintable WHERE username='".$username."' AND  password='".$password."' ";

     	$result=mysqli_query($connection,$query);
     	$row=mysqli_fetch_array($result);

     	if($row["usertype"]=="user"){
     		header("location:home.php");
     	}
     	elseif($row["usertype"]=="admin"){
     		echo "admin";
     	}
     	else{
     		echo"incorrect password";
     	}
     }
   ?>
</body>
</html>
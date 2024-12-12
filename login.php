<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>

    <!-------------------------------->
    <div class="container">
        <form >
            <h3>Login</h3>   
            <input type = "String" placeholder="Username" class="inputStyle"><br>
            <input type = "password" placeholder="password"  class="inputStyle"><br>
            <lable style="font-size: 12px">Remember me</lable>
            <input type = "checkbox"> 
            <button class="button">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!-----------
/* <?php 
 //include('connection.php');
?> */
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <center>
    <h1 class="text-center">LOGIN</h1>
    <div class="container-sm pt-5" style="background-color: red;">

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
</html>--------------------->
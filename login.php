<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=Lo, initial-scale=1.0">
     <title>Login Page   </title>
    
     <link rel="stylesheet" href="login.css">
</head>
<body>
     <?php
     $host ="localhost";
     $user = "root";
     $password = "";
     $db = "loginpage";

     $conn = mysqli_connect($host,$user,$password,$db);
     if(isset($_POST['submit']))
     {
          $e=$_POST['email'];
          $p = $_POST['password'];

          $sql="select * from form where email='".$e."' and password='".$p."' limit 1";

          $result= mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($result);
          $count = mysqli_num_rows($result);
          if($count==1)
          {
               header("location:/IceCream/Success.html");
          }
          else{
               header("location:/IceCream/failure.html");

          }
     }
     ?>
     
     <div class="form">
          <!--login---------->
          <div class="login-form" id="logi">
              <strong>Log In</strong>
              <!--inputs-->
              <form action="login.php" method="post">
                  <input type="email" name="email" placeholder="Example@gmail.com" required />
                  <input type="password" name="password" placeholder="Password" required />
                  <input type="submit" value="Log In " name="submit" />
              </form>
          </div>
     </div>
     
</body>
</html>
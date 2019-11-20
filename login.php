<?php 
$host="localhost";
$user="root";
$password="";
$db="kurdishairlinee";


mysqli_connect($host,$user,$password);
mysqli_select_db($db);


if(isset($_POST["username"])){
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $sql = "select * from login where user='".$user."' AND pass='".$pass."' limit 1";
  $result = mysql_query($sql);
  if (mysql_num_rows($result)==1) {
    echo "tawawa";
    exit();
  } else {
    echo "nnnnn";
    exit();
  }
  
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js">
  </script>
  <script src="js/bootstrap.min.js">
  </script>
</head>
<body>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
     <button type="submit" class="btn btn-primary" value="btnLogin<?php 

$message = "Invalid Username or Password";
if(isset($_POST["btnLogin"])){
  $username = $_POST["username"];
    $password = $_POST["password"];
}

?>"><a href="home.php"> LOGIN </a></button>
</form>
</body>
</html>
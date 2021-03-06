<?php
include('connectDB.php');
session_start();
$username = "";
$name    = "";
$errors = array(); 

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  
  $user_check_query = "SELECT * FROM accounts WHERE username='$username' OR name='$name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['name'] === $name) {
      array_push($errors, "name already exists");
    }
  }
  
  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO accounts (username, name, password) 
  			  VALUES('$username', '$name', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

?>

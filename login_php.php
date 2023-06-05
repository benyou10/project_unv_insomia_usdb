
<?php

session_start();
if(isset($_POST["username"]) && isset($_POST["password"]) ){
	$username=$_POST['username'];
	$password=$_POST['password'];

include("database.php");

$sql ="SELECT * FROM `users`";
$res = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($res);
if($row['username']== $username & $row['password']==$password){

  $_SESSION['logged']=true;
  header('location:index.php');
}else{
  header('location:LOGINN.php');
}



}
?>


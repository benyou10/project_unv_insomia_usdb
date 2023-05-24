
<?php

session_start();
if(isset($_POST["username"]) && isset($_POST["password"]) ){
	$username=$_POST['username'];
	$password=$_POST['password'];


$username = $_POST['username'];
$_SESSION['username']=$username;
$password = $_POST['password'];
if ($username == 'ZahraInfo' && $password=="devweb23") {
	
	$_SESSION['logged']=true;
	header('Location: index.php');

} else {
	header('Location: LOGINN.php');
}

}
?>


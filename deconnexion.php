<?php
session_start();


session_destroy();
$_SESSION['logged']=false;

header("Location: index.php");
exit();
?>
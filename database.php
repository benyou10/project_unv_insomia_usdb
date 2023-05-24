<?php

$db_server="localhost:3307";
$db_user="root";
$db_pass="";
$db_name="project_dev_web";

$conn =mysqli_connect($db_server,$db_user,$db_pass,$db_name);
if($conn){
   

}else{
    echo"it went wrong";
}


?>
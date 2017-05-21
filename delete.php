<?php
include("lib/config.php");


$id=$_GET["id"];
$query = "delete from users where id='$id'";
    $result = mysqli_query($conn,$query);
	header("Location:content.php");

?>
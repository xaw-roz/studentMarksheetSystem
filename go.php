<?php
/**
 * Created by PhpStorm.
 * User: rocks
 * Date: 11/13/2016
 * Time: 5:24 PM
 */
include("lib/config.php");
if(isset($_POST['submit'])){
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    // Check connection

    $query = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);
    echo "in go";

    if($result){
        $_SESSION["userid"] = $result1["id"];
        header("Location:content.php");
    }
    else{
        echo "Some error";
    }
}

?>
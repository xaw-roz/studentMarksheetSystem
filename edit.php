<?php
include("lib/config.php");


$id=$_GET["id"];
$query = "select * from users where id=$id";
//echo $query;
    $result = mysqli_query($conn,$query);
	
	 $rs_res = mysqli_fetch_assoc($result);
	 
  //  echo stripslashes($rs_res["username"]);
    ?>
	<h2>Edit </h2>
	<form action = "executeEdit.php" method = "POST">
	<input type="hidden" name="id" value="<?php
            echo stripslashes($rs_res["id"]);
            ?>">
        Username : <input type="text" name="username" value="<?php
            echo stripslashes($rs_res["username"]);
            ?>" ><br>
        Password : <input type="password" name="password" value="<?php echo $rs_res["password"]?>"><br>
        <input type="submit" value="submit" name="submit">
    </form>
	

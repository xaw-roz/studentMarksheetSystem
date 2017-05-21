<?php
include("lib/config.php");
include("includes/checksession.php");
$rs_results = mysqli_query($conn,"Select * from users");


?>
<html>
<head>
<title>User Management</title>
</head>

<body>
<h2>User List</h2>
<table border="2px">
    <thead>
    <th>Username</th>
    <th>Password</th>
    </thead>

    <tbody>
    <?php
    while ($rs_res = mysqli_fetch_assoc($rs_results))
    {
    ?>
    <tr>
        <td><?php
            echo stripslashes($rs_res["username"]);
            ?></td>

        <td><?php echo $rs_res["password"]?></td>
		<td>
		 <a href="delete.php?id=<?php echo $rs_res["id"]; ?>">delete</a> 
		</td>
		<td>
		 <a href="edit.php?id=<?php echo $rs_res["id"]; ?>">edit</a> 
		</td>
	
    </tr>
    <?php }?>
    </tbody>
</table>
</body>
</html>

<?php
session_start();
include "connection.php";
?>
<?php
$userid=$_GET["userid"];

$email=$_GET["email"];
setcookie("userid1",$userid);
$mobile=$_GET["mobile"];

$sql = "INSERT INTO login (userid,email, mobile)
VALUES ('$userid','$email',$mobile)";
$link->query($sql);
?>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Quiz</title> 
    </head>
    
	<body align="center">
        
    <?php
    header("Location: main.php");
    exit();
    ?>
	</body>
</html>
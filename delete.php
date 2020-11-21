<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "urok31");
	$text = "DELETE FROM KS WHERE id = '".$_GET['id']."' ";
	$zapros_vstavit = mysqli_query($connect, $text);
	header('Location: http://urok31/acc.php?name=' . $_GET['user'] . '');
	exit();
?>
<?php  
	$connect= mysqli_connect("127.0.0.1","root","","urok31");
	$UPDATE = mysqli_query($connect , "SELECT * FROM KS WHERE id = '".$_GET['id']."' ");
	$result = $UPDATE->fetch_assoc();
	$summ = $result["donated"] + 10;
	$zapros_text = "UPDATE KS SET donated = '{$summ}' WHERE id = '".$_GET['id']."'";
    $zapros_update = mysqli_query($connect, $zapros_text);
	header('Location: http://urok31/index.php');
	exit();
?>
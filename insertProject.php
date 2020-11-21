<?php  
	$connect= mysqli_connect("127.0.0.1","root","","urok31");
	$text_zaprosa_vstavit = "INSERT INTO KS (title, description, goal, img, user, place) 
							 VALUES ('".$_GET['title']."','".$_GET['description']."','".$_GET['goal']."','".$_GET['img']."','".$_GET['user']."','".$_GET['place']."')"; 

	if ($_GET['title']="" || $_GET['description']="" || $_GET['goal']="" || $_GET['img']="" || $_GET['user']="" || $_GET['place']="") {
		header('Location: http://urok31/acc.php?error=Заполните все');
		exit();
	}
	else{
		header('Location: http://urok31/acc.php');
		exit();
	}
?>
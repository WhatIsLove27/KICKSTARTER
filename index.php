<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<a href="index.php"><img src="logo.png" class="w-25"></a>
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" ><i class="fa fa-search"></i> Search</a>
			<a href=" acc.php"><img src="lk.png" class="rounded-circle" ></a>
		</div>
	</div>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'urok31'); 
		$query = mysqli_query($con, "SELECT * FROM KS");
	?>
</div>
<div class="col-10 mx-auto mb-5">
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php echo $query->num_rows ?></span></h4>
	
	<div class="row mt-5">
		<?php 
	 		for($i=0;$i<$query->num_rows;$i++){
	 			$res = $query->fetch_assoc();
	 	?>		
		<!--Вывести сами проекты здесь-->
		<div class="col-4  py-1 " style="border: 1px solid #dbdbdb">
			<div class="col-12 bg-primary" style=" background-image: url(<?php echo $res['img'] ?>); background-size: 100% 100%;background-position: center; height: 350px">
			</div>
			<div class="">
				<p class="text-uppercase text-bold "><?php echo $res['title']; ?></p>
				<p class="font-weight-light"><?php echo $res['description']; ?></p>
			</div>
			<div class=" mt-5" >
				<p class="font-weight-light"><?php echo "by " .$res['user'] . ", " . "<img src='karta.png' style='height: 25px'>" . $res['place']; ?></p>
			</div>
			<div class=" mt-1" >
				<p class="font-weight-light"><?php echo $res['goal'] . "$ pledged" ; ?></p>
				<p class="font-weight-light text-success"><?php echo $res['donated'] . "$" ; ?></p>
			</div>
			<form method="GET" action="updateDonate.php">
				<input type="" name="id" style="display: none" value=" <?php echo $res['id']  ?>">		
				<button class="bg-success text-center mx-auto">back this project +10$</button>
			</form>
		</div>
		<?php 
	 		} 
	 	?>
	</div>
</div>
</body>
</html>
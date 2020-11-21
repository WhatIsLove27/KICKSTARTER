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
			<a href=""><img src="lk.png" class="rounded-circle" ></a>
		</div>
	</div> 
	<div class="col-4 mx-auto" style="height: 300px">
		<form method="GET" action="insertProject.php">
			<div>
				<input type="" name="title" class="col-12" style="height: 40px" placeholder="Заголовок">
			</div>
			<div class="mt-1">
				<input type="" name="description" class="col-12" style="height: 40px" placeholder="Описание">
			</div>
			<div class="mt-1">
				<input type="" name="gaol" class="col-12" style="height: 40px" placeholder="Необходимая сумма">
			</div>
			<div class="mt-1">
				<input type="" name="img" class="col-12" style="height: 40px" placeholder="Обложка">
			</div>
			<div class="mt-1">
				<input type="" name="place" class="col-12" style="height: 40px" placeholder="Город">
			</div>
			<div class="mt-1">
				<input type="" name="user" class="col-12" style="height: 40px" placeholder="user">
			</div>
			<button class="bg-success text-center col-10 mt-2" style="margin-left: 8%">Добавить</button>
		</form>
		<p style="color:red"><?php echo  $_GET["error"] ?></p>
	</div>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'urok31'); 
		$query = mysqli_query($con, "SELECT * FROM KS ");
	?>
</div>
<div class="col-10 mx-auto mb-5">
	<h4 class="">My projects <span class="text-success font-weight-bold"><?php echo $query->num_rows ?></span></h4>
	<div class=" mt-5">
		<?php 
	 		for($i=0;$i<$query->num_rows;$i++){
	 			$res = $query->fetch_assoc();
	 	?>		
		<!--Вывести сами проекты здесь-->
		<div class="col-7 mx-auto py-1 ">
			<div class=" mx-auto text-center">
				<h3 class="text-uppercase text-bold "><?php echo $res['title']; ?></h3>
				<p class="font-weight-light"><?php echo $res['description']; ?></p>
			</div>
			<div class="row">
				<div class="col-8 " style=" background-image: url(<?php echo $res['img'] ?>); background-size: 100% 100%;background-position: center; height: 350px">
				</div>
				<div class="col-4">
					<h5 class="text-success">Собрано</h5>
					<h4 class="text-success"> <?php  echo $res['donated'];?> </h4>
					<h5 class="text-secondary">Необходимая сумма</h5>
					<h5 class="text-secondary"> <?php  echo $res['goal'];?> </h5>
					
					<form method="GET" action="change.php">
						<input type="" name="id" style="display: none" value=" <?php echo $res['id']?>">
						<button class="bg-success col-10 mx-auto rounded mt-2">Редактировать</button>
					</form>	
					
					
					
					<form method="GET" action="delete.php">
						<input type="" name="id" style="display: none" value=" <?php echo $res['id']?>">
						<input type="" name="user" style="display: none" value=" <?php echo $res['user']?>">
						<button class="bg-danger col-10 mx-auto rounded mt-2">Удалить проект</button>
					</form>	
					
				</div>
			</div>
		</div>
		<?php 
	 		} 
	 	?>
	</div>
	
</div>

</body>
</html>
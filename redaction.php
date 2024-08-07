<?php  
	$username = $_GET['username'];
	$email = $_GET['email'];
	$age = $_GET['age'];
	$ava = $_GET['avatar'];
	$password = $_GET['password']
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	
	<form action="profile.php" method="GET">
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 900px;">
		<div class="col-8 mx-auto pt-5">
				<h1 class="text-uppercase text-light mt-5 fw-light">Редактирование</h1>
						
					<p class="text-white m-0">Aватар</p>
					<input type="file" required value="<?php echo $ava; ?>" name="avatar" class="w-25 form-control bg-dark" style="color: white;">

					<p class="text-white m-0">Имя аккаунта Steam</p>
					<input type="text" value="<?php echo $username; ?>" name="username" class="w-25 form-control bg-dark" style="color: white;">

					<p class="text-white m-0 mt-3">Электронная почта</p>
					<input type="email" value="<?php echo $email; ?>" name="email" class="w-25 form-control bg-dark" style="color: white;">

					<p class="text-white m-0  mt-3">Возраст</p>
					<input type="number" value="<?php echo $age; ?>" name="age" class="w-25 form-control bg-dark" style="color: white;">

					<p class="text-white m-0  mt-5">Введите пароль</p>
					<input type="password" value="<?php echo $password; ?>" name="password" class="w-25 form-control bg-dark" style="color: white;">

					<button class="btn  btn-primary mt-4">Готово</button>
			
		</div>
	</div>
	</form>
</body>
</html>
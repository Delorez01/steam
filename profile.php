<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}


		.redak {
			color: blue;
			background: #171A21;
			height: 40px;
			width: 180px;
			border: 1px solid black;
			margin-left: 300px;
			margin-top: 50px;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<form action="redaction.php" method="GET">
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
			<div class="col-8 mx-auto p-5" style="background-color: #222431; height: 100%;">
				<?php  
					$username = $_GET['username'];
					$email = $_GET['email'];
					$age = $_GET['age'];
					$ava = $_GET['avatar'];
				?>
				<div style="display: flex;">
					<div>
						<img src="<?php echo $ava; ?>" style="height: 200px; width: 170px;">
					</div>
					<div style="margin: 20px;">
						<div class="name">
							<h1 style="color: white"><?php echo $username; ?></h1>
						</div>

						<div class="mail">
							<p style="color: white;">Электронная почта: <?php echo $email; ?></p>
						</div>
						<div class="age">
							<p style="color: white;">Возраст: <?php echo $age;?></p>
						</div>
						<?php 
						if ($age < 16) {
							echo '<p style="color:red">Ты еще маленький, петух.</p>';
							}
						?>
					</div>
					<div>
						<form action="redaction.php" method="GET">
							<input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">
							<input type="hidden" name="ava" value="<?php echo $_GET['ava']; ?>">
							<input type="hidden" name="age" value="<?php echo $_GET['age']; ?>">
							<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
							<input type="hidden" name="password" value="<?php echo $_GET['password']; ?>">
						
							<button class="redak">Редактировать🖋</button>
						</form>
					</div>
				</div>

					
						
				</div>
			</div>
	</form>

	
</body>
</html>
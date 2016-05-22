<?php session_start();
header('Content-type: text/html; charset=utf-8');
?>
<html> 
<head> <title> Система управления магазином </title> 
<link rel="stylesheet" type="text/css" href="bootstrap.min.css" media="all">
</head>
<body>
	<a href="mainpagedirect.html"><img src="Logo.png" alt="To MainPage"></a>
	<h1> How To Manage a Shop </h1>
	<div class='table'>
			<div class="title"> Welcome! </div>
				<ul>
					<li type='square'><a href="LookYourProfile.php">Мой профиль </a></li> <hr>
					<li type='square'><a href="LookNews.php">Новости </a></li> <hr>
					<li type='square'><a href="AddWorker.php"> Добавить сотрудника </a></li> <hr> 
					<li type='square'><a href="DeleteWorker.php"> Удалить сотрудника </a></li> <hr> 
					<li type='square'><a href="AddSchedule.php"> Добавить график работы </a></li> <hr> 
					<li type='square'><a href="SetNewFine.php"> Добавить штраф/премию </a></li> <hr>
				</ul>
	</div>
	<a href="About.html"><h5> About this project </h5> </a>
</body>
</html>
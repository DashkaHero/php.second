<?php session_start();
header('Content-type: text/html; charset=utf-8');
?>
<html> 
<head> <title> ������� ���������� ��������� </title> 
<link rel="stylesheet" type="text/css" href="bootstrap.min.css" media="all">
</head>
<body>
	<a href="mainpagedirect.html"><img src="Logo.png" alt="To MainPage"></a>
	<h1> How To Manage a Shop </h1>
	<div class='table'>
			<div class="title"> Welcome! </div>
				<ul>
					<li type='square'><a href="LookYourProfile.php">��� ������� </a></li> <hr>
					<li type='square'><a href="LookNews.php">������� </a></li> <hr>
					<li type='square'><a href="AddWorker.php"> �������� ���������� </a></li> <hr> 
					<li type='square'><a href="DeleteWorker.php"> ������� ���������� </a></li> <hr> 
					<li type='square'><a href="AddSchedule.php"> �������� ������ ������ </a></li> <hr> 
					<li type='square'><a href="SetNewFine.php"> �������� �����/������ </a></li> <hr>
				</ul>
	</div>
	<a href="About.html"><h5> About this project </h5> </a>
</body>
</html>
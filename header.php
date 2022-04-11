<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="./style/style.css" rel="stylesheet" type="text/css"/>
    <title>SPA-Салон</title>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">SPA-салон</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php" accesskey="1" title="">Главная</a></li>
			<li><a href="#services" accesskey="3" title="">Услуги</a></li>
			<li><a href="#sale" accesskey="4" title="">Акции</a></li>
			<?php if (!isset($_SESSION['auth'])) {?>
            <li><a href="login.php" accesskey="4" title="">Вход</a></li>
			<?php } else {?>
			<li><?echo $_SESSION['login']." ";?><a href="#" onclick="" title="">Выход</a></li>
			<?php } ?>	
  		</ul>
    </div>
</div>
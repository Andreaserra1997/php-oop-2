<?php

include_once __DIR__ . '/classes/Animalhouse.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Games.php';
include_once __DIR__ . '/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Shop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center p-3">Shop Animals</h1>
		<div class="row row-cols-3 g-5"><?php
			foreach ($arrProducts as $objProduct) {
				echo $objProduct->printCard();
			} ?>
		</div>
	</div>
</body>
</html>
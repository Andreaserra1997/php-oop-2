<?php


$categories = [
	new Category(1, 'Cats'),
	new Category(2, 'Dogs'),
];

$arrProducts = [
	new Animalhouse(1, 'Cuccia', 'Cuccia spaziosa per il tuo cane', 2500, $categories[1], 'Cuccia.jpg', 500, 700, 600),
	new Food(1, 'Croccantini', 'Gustosi croccantini per il tuo gatto', 450, $categories[0], 'Croccantini.jpg', '2024-02-21', 250),
	new Games(1, 'Palla', 'Una morbida palla per il tuo cane', 299, $categories[1], 'Palla.jpg', 'plastica', 'blu'),
];
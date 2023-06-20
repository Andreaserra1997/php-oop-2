<?php

class Product {

    private string $category;
    private $img;
    private string $title;
    private string $price;
    private string  $icon;

    function __construct($category, $img, $title, $price, $icon)
    {
        $this->category = $category;
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
    }

    public function getProduct() { 
        echo "<h1>La categoria è: {$this->category}</h1>";
        echo "{$this->img}";
        echo "<h2>Titolo: {$this->title}</h2>";
        echo "<h2>Il prezzo è: {$this->price}</h2>";
        echo "<div>Icon: {$this->icon}</div>";
    }
}

class Food extends Product{

}

class Games extends Product{

}

class Animalhouse extends Product{

}

$arrProducts = [
    new Product("Cane", "img", "title", "5,00€", "i")
];

foreach ($arrProducts as $product) {
    echo $product->getProduct();
    echo "<br>";
}
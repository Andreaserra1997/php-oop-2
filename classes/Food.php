<?php
include_once __DIR__ . '/Product.php';

class Food extends Product {
	public function __construct(
		int $id,
		string $name,
		string $description,
		int $price, 
		Category $category,
		string $image,
		protected string $expiry,
		protected int $weight, 
	) {
		parent::__construct($id, $name, $description, $price, $category, $image);
	}

	public function printCard() {
		
		$type = get_class($this);
		echo 
        "<div class=\"col\">
            <div class=\"card h-100\">
                <img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$this->name}</h5>
                    <p class=\"card-text\">{$this->description}</p>
                </div>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">Type: {$type}</li>
                    <li class=\"list-group-item\">Category: {$this->category->getName()}</li>
                    <li class=\"list-group-item\">Peso: {$this->weight}</li>
                    <li class=\"list-group-item\">Scadenza: {$this->expiry}</li>
                    <li class=\"list-group-item\">Prezzo: {$this->getFormattedPrice()}</li>
                </ul>
                <div class=\"card-body\">
                    <a href=\"#\" class=\"card-link\">Details</a>
                </div>
            </div>
        </div>";
	}
}
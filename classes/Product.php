<?php

class Product {
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $description,
		protected int $price, 
		protected Category $category,
		protected string $image,
	)
	{}

	public function getFormattedPrice() {
		return $this->price / 100 . ' €';
	}
}
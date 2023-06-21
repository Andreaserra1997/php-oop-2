<?php

class Category {
	public function __construct(
		protected int $id,
		protected string $name,
	) 
    {}
	public function getName() {
		return $this->name;
	}
}
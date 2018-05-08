<?php

namespace Entity;

class Products{
		private $product_id;
		private $name;
		private $description;
		private $price;
		private $image;
	

public function get_data(){

	return [
		'product_id'=> $this->product_id,
		'name' => $this->name,
		'description'=> $this->description,
		'price'=> $this->price,
		'image' => $this->image

	];
}
	
}
?>

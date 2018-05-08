<?php

namespace Entity;

class Products{
		public $product_id;
		public $name;
		public $description;
		public $price;
		public $image;
	

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

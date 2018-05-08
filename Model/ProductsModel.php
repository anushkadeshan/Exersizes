<?php
namespace Model;

use Core\Model;
use Entity\Products;

/**
 * 
 */
class ProductsModel extends Model
{
	protected $table = "products";
	function __construct()
	{
		parent::__construct();
	}

	public function getproducs(){
		return $this->select('*')->setEntity('Entity\Products')->find();
	}
}
?>
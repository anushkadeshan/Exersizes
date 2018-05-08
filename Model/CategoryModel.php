<?php
namespace Model;
use Core\Model;
use Entity\category;
class CategoryModel extends Model{
    protected $table = "catogery";
    function __construct(){
        parent::__construct();
    }
    public function getCategories(){
        return $this->select('*')->setEntity('Entity\category')->find();
    }
}
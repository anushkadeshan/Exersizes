<?php
namespace Entity;
class category{
    private $id;
    private $CatogeryName ;
    public function getName(){
        return $this->CatogeryName;
    }

    public function getId(){
    	return $this->id;
    }
}
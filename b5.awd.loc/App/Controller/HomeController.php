<?php
namespace Controller;
use \Core\Controller;
class HomeController extends Controller{

    
    function index(){
        $this->render('pages/home');
    }


    public function contact($data){
        $this->render('pages/contact');
    }

    public function services(){
        $this->render('pages/services');
    }
    public function elements(){
        $this->render('pages/elements');
    }
    public function blog(){
        $this->render('pages/blog');
    }
}
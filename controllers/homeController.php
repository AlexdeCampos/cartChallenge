<?php
class homeController extends controller {
    
    public function index(){
        $product = new product();

        $data = array(
            "products" => $product->getProducts()
        );

        $this->loadView('home',$data);
    }
}
<?php
class homeController extends controller {
    
    public function index(){
        $product = new products();

        $products = array();

        foreach($product->getProducts() as $list){
            $products[$list['sku']] = $list;
        }

        $data = array(
            "products" => $products
        );
        $this->loadView('home',$data);
    }
}
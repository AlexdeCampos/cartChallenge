<?php
class ajaxController extends controller {

    public function addToCart($sku = '3000045587',$qty = 1)
    {
        $products = new products();
        $productDetail = $products->getProduct($sku);

        if(!isset($_SESSION["cart"])){
            $_SESSION["cart"] = array(
                "itens" => array(),
                "total" => 0.00
            );
        }

        if(!isset($_SESSION["cart"]["itens"][$sku])){
            $detail = array(
                "sku"=>$productDetail["sku"],
                "name"=>$productDetail["name"],
                "description"=>$productDetail["description"],
                "price" => $productDetail["price"],
                "qty" => 0
            );
            
            $_SESSION["cart"]["itens"][$sku] = $detail;
        }
        $_SESSION["cart"]["itens"][$sku]["qty"] += $qty;
        $_SESSION["cart"]['total'] += $productDetail["price"] * $qty;
    }

    public function removeToCart($sku)
    {
        $itemPrice = $_SESSION["cart"]["itens"][$sku]["price"];
        $itemQty = $_SESSION["cart"]["itens"][$sku]["qty"];
        unset($_SESSION["cart"]["itens"][$sku]);

        $_SESSION["cart"]['total'] -= $itemPrice * $itemQty;
    }

    public function clearCart()
    {
        $_SESSION["cart"] = array(
            "itens" => array(),
            "total" => 0.00
        );
    }

    
}
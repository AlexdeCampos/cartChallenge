<?php
class products extends model{
    public function getProducts(){

        $products = $this->db->query("SELECT * FROM products");
        return $products->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduct($sku){
        $sql = $this->db->prepare("SELECT * FROM products WHERE sku = :sku");
		$sql->bindValue(":sku", $sku);
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
    }
}
<?php

include_once 'Product.php';

class ShoppingCart extends Product
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }

    public function removeProduct(Product $product)
    {
        if (array_key_exists($product->getId(), $this->products)) {
            unset($this->products[$product->getId()]);
        }
    }

    public function changeProductQuantity($productId, $newQuantity)
    {
        if (array_key_exists($productId, $this->products)) {
            $this->products[$productId]->setQuantity($newQuantity);
        }
    }

    public function printRecipt()
    {

    }
}

//$jajka = new Product('Jaja z wolnego wybiegu',0.30,20);
//$woda = new Product('Woda zrodlana',1.99,6);
//$chleb = new Product('chleb pszenny',3.49,10);

$koszyk = new ShoppingCart();
$koszyk->addProduct($jajka);
$koszyk->addProduct($chleb);
$koszyk->addProduct($woda);
$koszyk->changeProductQuantity(0,121);
$koszyk->removeProduct($jajka);

var_dump($koszyk);
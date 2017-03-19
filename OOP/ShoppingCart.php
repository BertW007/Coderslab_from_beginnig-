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

    public function getAllProductPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getTotalSum();
        }
        return $totalPrice;
    }

    public function printRecipt()
    {
        echo '<table border="black">
                 <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                 </tr>';
        foreach ($this->products as $object) {
            echo '<tr>
                    <td>' . $object->getId() . '</td>
                    <td>' . $object->getName() . '</td>
                    <td>' . $object->getDescription() . '</td>
                    <td>' . $object->getQuantity() . '</td>
                    <td>' . $object->getTotalSum() . 'zl</td>
                  </tr>';
        }

        echo '    <tr>
                    <td colspan="4" align="center">Total Price</td>
                    <td>'.$this->getAllProductPrice().'zl</td>
                  </tr>
              </table>';
    }
}

//$jajka = new Product('Jaja z wolnego wybiegu',0.30,20);
//$woda = new Product('Woda zrodlana',1.99,6);
//$chleb = new Product('chleb pszenny',3.49,10);

$koszyk = new ShoppingCart();
$koszyk->addProduct($jajka);
$koszyk->addProduct($woda);
$koszyk->addProduct($chleb);
$jajka->setQuantity(223);
$woda->setQuantity(2334);


$koszyk->printRecipt();
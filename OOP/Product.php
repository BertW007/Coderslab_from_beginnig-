<?php


class Product
{
    private $id, $name, $description, $price, $quantity;
    static private $nextId = 0;

    /**
     * Product constructor.
     * @param $name
     * @param $description
     * @param $price
     * @param $quantity
     */
    public function __construct($description, $price, $quantity)
    {
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->id = self::$nextId;
        self::$nextId++;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            die('Wrong name');
        }
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            die('Wrong description');
        }
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        if (is_float($price) && $price >= 0.01) {
            $this->price = $price;
        } else {
            $this->price = 0;
        }
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        if (is_int($quantity) && $quantity > 0) {
            $this->quantity = $quantity;
        } else {
            $this->quantity = 0;
        }
    }

    public function getTotalSum()
    {
        return ($this->quantity*$this->price);
    }
}
$jajka = new Product('Jaja z wolnego wybiegu',0.30,20);
$jajka->setName('Jajka');
$woda = new Product('Woda zrodlana',1.99,6);
$woda->setName('Woda');
$chleb = new Product('Chleb pszenny',3.49,10);
$chleb->setName('Chleb');
<?php


class Product
{
    private $id,$name, $description, $price, $quantity;
    static private $nextId = 0;

    /**
     * Product constructor.
     * @param $name
     * @param $description
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $description, $price, $quantity)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->id = self::$nextId;
        self::$nextId++;
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
        $this->name = $name;
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
        $this->description = $description;
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
        if(is_float($price)) {
            $this->price = $price;
        }else{
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
        if(is_int($quantity)){
            $this->quantity = $quantity;
        }else{
            $this->quantity = 0;
        }
    }




}
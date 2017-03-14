<?php

include_once 'Shape.php';

class Circle extends Shape
{
    private $radius;

    public function __construct($x, $y, $color, $radius)
    {
        parent::__construct($x, $y, $color);
        $this->setRadius($radius);
        echo 'Stworzyłem obiekt <br>';
    }

    /**
     * @param mixed $radius
     */
    private function setRadius($radius)
    {
        if(is_numeric($radius)){
            $this->radius = $radius;
        }else{
            $this->radius = 0;
        }
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function printInfo()
    {
        echo sprintf('Color: %s, X: %d, Y: %d, Radius: %d',
            $this->color,
            $this->x,
            $this->y,
            $this->radius
        );
    }

    public function field()
    {
        return pi()*pow($this->radius,2);
    }

    public function circuit()
    {
        return 2*$this->radius*pi();
    }

}

$circ = new Circle(5,10, 'red',4);
$circ->printInfo();
echo '<br>'.$circ->field();
echo '<br>'.$circ->circuit();
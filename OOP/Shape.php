<?php


class Shape
{
    protected $x, $y, $color;

    public function __construct($x, $y, $color)
    {
        $this->setColor($color);
        $this->setX($x);
        $this->setY($y);
    }

    private function setColor($color)
    {
        if (is_string($color)) {
            $this->color = $color;
        }else{
            $this->color = 'przezroczysty';
        }
    }

    private function setX($x)
    {
        if (is_numeric($x) ? $this->x = $x : $this->x = 0) ;
    }

    private function setY($y)
    {
        if (is_numeric($y) ? $this->y = $y : $this->y = 0) ;
    }

    public function printInfo()
    {
        echo sprintf('Color: %s, X: %d, Y: %d.',
            $this->color,
            $this->x,
            $this->y
        );
    }

    public function distToShape(Shape $shape)
    {
        $distX = $this->x - $shape->x;
        $distY = $this->y - $shape->y;
        $dist = sqrt(pow($distX,2) - pow($distY,2));
        return $dist;
    }
}

//$shape = new Shape(1,8,'blue');
//$shape->printInfo();
//echo '<hr>';
//$shape1 = new Shape(5,10,'yellow');
//$shape1->printInfo();
//echo '<hr>';
//echo $shape1->distToShape($shape);
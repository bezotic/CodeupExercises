<?php

require 'rectangle.php';


class Square extends Rectangle 
{

	






public function perimeter()
{

	echo 'the area of square is' . ' ' .($this->height*2 + $this->width*2);

}

}


$square1 = new Square(12,56);

echo $square1->perimeter() .PHP_EOL;
echo $square1->area() .PHP_EOL;
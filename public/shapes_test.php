<?php
    require_once 'Rectangle.php';
    require_once 'Square.php';
    $polygon = new Rectangle(2, 5);
    echo $polygon->area();
    $square = new Square(5);
    echo $square->area();
    
    echo $square->perimeter();
    ?>

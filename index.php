<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Assignment</title>
</head>

<body>

     <h3>Computers</h3>

     <?php

     include 'ComputerClass.php';
     include 'LaptopClass.php';

     // Encapsulation using set and get method
     $comp = new ComputerClass();
     $comp->setDefinition('A computer is an electronic machine that collects information, stores it, processes it according to user instructions, and then returns the result. 
     A computer is a programmable electronic device that performs arithmetic and logical operations automatically using a set of instructions provided by the user.');

     echo "<p>" . $comp->getDefinition() . "</p>";

     
     $laptop = new LaptopClass();
     $laptop->displayBrand();
     $laptop->displaySpecs();






     ?>

</body>

</html>
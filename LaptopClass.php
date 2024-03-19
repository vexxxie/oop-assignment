<?php 
include ('ComputerInterface.php');

class LaptopClass implements ComputerInterface {

     public function displayBrand() {
          echo "HP 14 Laptop Eco Edition10";

     }

     public function displaySpecs() {
          echo "Windows 11**". "<br>".
          "Up to a 13th Gen Intel® Core™ i7 processor7
          Up to a 14inches (35.6 cm) diagonal Full HD IPS display6
          As light as 1400g
          Up to 16 GB DDR4 RAM
          Up to Intel® Iris® Xe graphics11
          Up to 1 TB PCle® NVMe™ SSD storage
          Intel® Wi-Fi 6 (2x2) and Bluetooth® 5.3 combo14
          Full HD camera with temporal noise reduction13";

     }

}

     

?>
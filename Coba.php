<?php

class Coba {
 public function __construct()
 {
     echo "ini adalah class ".__CLASS__;
     echo "<br>";
     echo "File ini terletak di ". __FILE__;
 }   
} 
new Coba();
// echo __CLASS__;
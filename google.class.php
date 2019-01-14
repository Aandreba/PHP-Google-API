<?php
class GoogleSearch {
  function __construct(string $q){
    $this->q = $q;
    $this->url = "https://www.google.com/search?q=".$this->q;
    
  }
  
?>

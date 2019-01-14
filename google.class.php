<?php
class GoogleSearch {
  
  private function getElementByAttribute(&$parentNode, $attr, $tagName, $attrVal) {
    $response = false;

    $childNodeList = $parentNode->getElementsByTagName($tagName);
    $tagCount = 0;
    for ($i = 0; $i < $childNodeList->length; $i++) {
        $temp = $childNodeList->item($i);
        if (stripos($temp->getAttribute($attr), $attrVal) !== false) {
             $response[] = $temp;

            $tagCount++;
        }

    }

    return $response;
}
  
  function __construct(string $q){
    $this->q = $q;
    $this->url = "https://www.google.com/search?q=".$this->q;
    $this->DOM = new DOMDocument();
    $this->DOM->loadHTML(file_get_contents($this->url));
  }
  
  function iWillBeLucky(){
    return $this->getElementByAttribute($DOM, "class", "div", "g")[0];
  }
  
?>

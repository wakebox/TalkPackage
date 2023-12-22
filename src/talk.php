<?php namespace One2Three4\Talk; 
  class Talk {
  public function __construct($a=””, $b=””)
  {
    $this->result = $a + $b ;
  }
  public function result()
  {
    return $this->result;
  }
}
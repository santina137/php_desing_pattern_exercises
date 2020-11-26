<?php

include_once('Filter.php');

interface Picture
{
  public function __construct(Filter $filter);
  public function getPicture();

}


class Landscape implements Picture
{
  protected $filter;

  public function __construct(Filter $filter){
  $this->filter=$filter;
  }
  public function getPicture(){
   echo 'Landscape picture with '. $this->filter->getFilter();
  }
}

  class Portrait implements Picture
  {
    protected $filter; 
  
    public function __construct(Filter $filter){
    $this->filter=$filter;
    }
    public function getPicture(){
    echo 'Portrait picture with '. $this->filter->getFilter();
    }
  }
  



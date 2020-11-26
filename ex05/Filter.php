<?php

interface Filter 
{
  public function getFilter();
}

class BAndWFilter implements Filter
{
public function getFilter(){
return 'Black and white filter'. PHP_EOL;
}
}

class SepiaFilter implements Filter
{
public function getFilter(){
return 'Sepia filter'. PHP_EOL;
}
}
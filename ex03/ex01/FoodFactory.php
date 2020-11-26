<?php
include_once('Food.php');
include_once('FoodChef.php');

interface FoodFactory
{
  public function makeFood(): Food;
  public function makeExpert(): FoodChef;
}

class AsianFoodFactory implements FoodFactory
{
  public function makeFood(): Food{
    $created= new AsianFood();
    return $created;
  }
  public function makeExpert(): FoodChef{
    $created= new AsianChef();
    return $created; }
}
  
class FrenchFoodFactory implements FoodFactory
{
  public function makeFood(): Food{
    $created= new FrenchFood();
    return $created;
  }
  public function makeExpert(): FoodChef{
    $created= new FrenchChef();
    return $created;
  }
}
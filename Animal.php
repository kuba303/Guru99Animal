<?php

// declare(strict_types=1);

class Animal
{
  private string $family;
  private string $food;

  public function __construct($family, $food)
  {
    $this->family = $family;
    $this->food = $food;
  }
  public function get_family()
  {
    return $this->family;
  }
  public function set_family(string $family)
  {
    $this->family = $family;
  }
  public function get_food()
  {
    return $this->food;
  }
  public function set_food(string $food)
  {
    $this->food = $food;
  }
}

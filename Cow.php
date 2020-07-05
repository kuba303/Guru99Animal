<?php

// declare(strict_types=1);

class Cow extends Animal
{
  private string $owner;

  public function __construct($family, $food)
  {
    parent::__construct($family, $food);
  }
  public function set_owner($owner)
  {
    $this->owner = $owner;
  }
  public function get_owner()
  {
    return $this->owner;
  }
}

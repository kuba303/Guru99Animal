<?php

declare(strict_types=1);
require 'debug.php';
require 'Animal.php';
require 'Cow.php';
require 'Lion.php';


// $obj = new Animal("mamal", "coronoviurus");

// var_dump($obj);

// $obj = new Cow("aaaa", "bbb");
// $obj->set_owner('Kuba');
// $obj->get_owner();
// var_dump($obj);

$cow = new Cow('Herbi', 'grass');
$lion = new Lion('Canirval', 'Meat');

// dump($cow);
// dump($lion);
// echo '<b>Cow Object</b>';
// echo ' The cow belongs to the ' . $cow->get_family() . ' family nad eats ' . $cow->get_food() . '<br>';

$string = ' The cow belongs to the ' . $cow->get_family() . ' family nad eats ' . $cow->get_food() . '<br>';
$string2 = ' The lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food() . '<br>';
dump($string);
dump($string2);

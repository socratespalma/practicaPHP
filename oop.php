<?php

require_once "./person.php";

$person = new Person('Socrates', 'Palma');

$person->setAge(22);

echo '<pre>';
var_dump($person);
echo '</pre>';

echo $person->getAge() . '<br>';

$person2 = new Person('John', 'Doe');

$person2->setAge(30);

echo '<pre>';
var_dump($person2);
echo '</pre>';

echo Person::getCounter();

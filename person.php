<?php

class Person
{
    public string $personName;
    public string $personSurname;
    private int $personAge;
    public static int $counter;

    public function __construct($personName, $personSurname)
    {
        // echo $personName . ' ' . $personSurname;
        $this->personName = $personName;
        $this->personSurname = $personSurname;
        self::$counter++;
    }

    public function setAge($personAge)
    {
        $this->personAge = $personAge;
    }

    public function getAge()
    {
        return $this->personAge;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}

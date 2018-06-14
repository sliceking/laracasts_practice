<?php

class Person
{
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age++;
    }
}

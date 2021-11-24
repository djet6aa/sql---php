<?php

function getMC2()
{
    return "Albert" . "Einstein";
}

function  getUserName(string $name, string $surname)
{
    return $name . $surname;
}

echo getUserName('Alain', 'Lepine');

function getFullName(string $name, string $surname)
{
    $surname = mb_convert_case($surname, MB_CASE_UPPER);
    return ("$name" . "$surname");
}

echo getFullName('Alain', 'Lepine');

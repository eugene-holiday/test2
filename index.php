<?php

function __autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

use Animals\Cat;

$cat = new Cat('garfield');

if ($cat->getName() === 'garfield')
    echo "Test 1 OK <br>";

if ($cat->meow() === 'Cat garfield is saying meow')
    echo "Test 2 OK <br>";

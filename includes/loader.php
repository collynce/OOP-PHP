<?php


function auto_load_classes($class)
{
    $className = explode('\\', $class);
    $class = end($className);
    include 'class/' . $class . '.php';

}

function auto_load_traits($trait)
{
    $className = explode('\\', $trait);
    $trait = end($className);
    include 'traits/' . $trait . '.php';

}

//Register the loaders
spl_autoload_register('auto_load_classes');
spl_autoload_register('auto_load_traits');


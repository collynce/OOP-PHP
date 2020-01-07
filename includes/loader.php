<?php

//Loader function

function auto_load_classes($class)
{
    $file = 'class'. '\\' . $class . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
        include $file;
    }

}

function auto_load_traits($trait)
{
    $file = 'traits'. '\\' . $trait . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
        include $file;
    }

}

//Register the loaders
spl_autoload_register('auto_load_classes');
spl_autoload_register('auto_load_traits');


<?php

// Set error reporting for development
ini_set('error_reporting', -1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

/**
 * PSR-0 autoloader
 * @param string $className
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require __DIR__ . '/app/' . $fileName;
}

/**
 * Register the PSR-0 autoloader
 */
spl_autoload_register('autoload');


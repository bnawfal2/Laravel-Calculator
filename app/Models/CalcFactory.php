<?php

namespace App\Models;

/**
 * Simple Factory class to build calculator operator objects
 */
class CalcFactory
{
    /**
     * Static function to build calc objects
     *
     * @param string $type
     * @return CalcI|void
     */
    public static function build ($type = '') 
    {
        if ($type != '') {
            $className = 'App\\Models\\Calc'.ucfirst($type);
            if (class_exists($className)) {
                return new $className();
            } 
        }
    }
}

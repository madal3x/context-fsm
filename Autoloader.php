<?php

class Autoloader {
    private static $basepath;

    public static function init($basepath) {
        self::$basepath = $basepath;

        spl_autoload_register('Autoloader::loader');
    }

    public static function loader($className) {
        $fileName = self::$basepath . '/' . str_replace("\\", "/", $className) . ".php";

        if (file_exists($fileName)) {
            require_once($fileName);

            if (class_exists($className)) {
                return true;
            }
        } else {
            echo $fileName;
        }

        return false;
    }
}

Autoloader::init(dirname(__FILE__));
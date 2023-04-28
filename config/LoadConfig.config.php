<?php

class LoadConfig
{
    private static $path;
    public static function getConfig()
    {
        self::$path = realpath($_SERVER["DOCUMENT_ROOT"] . '/HorasExtra/config/config.json'); //ACTUALIZAR RUTA
        if (file_exists(self::$path)) {
            $json_data = file_get_contents(self::$path);
            return json_decode($json_data);
        } else {
            return 'No hay archivo';
        }
    }
}

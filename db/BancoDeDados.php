<?php
/**
 * Created by PhpStorm.
 * User: lfelipeeb
 * Date: 22/09/17
 * Time: 16:40
 */

class BancoDeDados
{
    private static $instance;

    /**
     * BancoDeDados constructor.
     */
    private function __construct()
    {
    }

    public static function getInstance(){

        if (! isset(self::$instance)){
            $config = parse_ini_file("database.ini");
            self::$instance = new PDO("mysql:dbname={$config["dbname"]};host={$config["host"]}", $config["usuario"], $config["senha"]);
        }

        return self::$instance;

    }


}
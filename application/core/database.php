<?php


class DataBase
{
    private static $db = NULL;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    /**
     * @return null|PDO
     */
    public static function getConnectDB(){
        if(self::$db === NULL){
            self::$db = self::connect();
        }
        return self::$db;
    }

    /**
     * @return PDO
     */
    private static function connect() {
        $dsn = new PDO(
                        'mysql:host='.HOST.';dbname='.NAME_DB.';charset='.CHARSET, USER, PASSWORD,
                        array(
                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                        )
                    );
        $dsn->exec("SET NAMES ".CHARSET);
        return $dsn;
    }

}
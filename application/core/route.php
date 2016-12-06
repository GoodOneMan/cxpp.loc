<?php


class Route
{
    private static $instance = NULL;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    /**
     * @return null|Route
     */
    public static function getInstance(){
        if(self::$instance === NULL){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function init(){
        return $this->uriParse();
    }

    /**
     * @return mixed
     */
    private function uriParse(){
        $uri = explode('/',$_SERVER['REQUEST_URI']);
        $data = new DataVerification($uri,'route');
        return  $data->routeData();
    }

}
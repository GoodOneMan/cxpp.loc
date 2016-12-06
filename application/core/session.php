<?php


class Session
{

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}


    /**
     * @param null $arg
     * @return array|null
     *
     * example : Session::getSession('user', 'role', 'key')
     */
    public static function getSession($arg = NULL){
        /* if arg array */
        if(is_array($arg)){
            foreach ($arg as $value){
                if(isset($_SESSION[$value])){
                    $data[$value] = $_SESSION[$value];
                    return $data;
                }else{
                    $error[] = SESSION_ERROR_NOT_FOUND.' [ '.$value.' ] ';
                    return $error;
                }
            }
        /* if arg string */
        }elseif(!is_array($arg) && !is_null($arg)){
            if(isset($_SESSION[$arg])){
                $data[$arg] = $_SESSION[$arg];
                return $data;
            }else{
                $error[] = SESSION_ERROR_NOT_FOUND.' [ '.$arg.' ] ';
                return $error;
            }
        /* is arg NULL */
        }elseif(is_null($arg)){
            // Return All Session.
            return NULL;
        }
    }


    /**
     * @param $arg
     * @return bool|null
     *
     * example : Session::setSession('user'=>'name','role'=>'editor','key'=>'$dsf56734_223dsd$')
     */
    public static function setSession($arg){
        if(is_array($arg)){
            foreach ($arg as $key => $value){
                $_SESSION[$key] = $value;
                return TRUE;
            }
        }else{
            return NULL;
        }
    }


    /**
     * @param null $arg
     * @return bool
     *
     * example : Session::setSession('user','role','key')
     */
    public static function unsetSession($arg = NULL){
        if(is_array($arg)) {
            foreach ($arg as $key) {
                unset($_SESSION[$key]);
            }
            return TRUE;
        }elseif(!is_array($arg)){
            unset($_SESSION[$arg]);
            return TRUE;
        }else{
            unset($_SESSION);
            return TRUE;
        }
    }

}
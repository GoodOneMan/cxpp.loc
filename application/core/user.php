<?php


class User
{

    protected function __construct(){}

    protected function isUser(){

        /*
         * Session::getSession(array) | array(user_name => '', role => '', key_user => '').
         */
        switch ($this->controller){
            case 'guest':
                /**
                 * if Guest to Page::display(page).
                 */

                break;
            case 'editor':
                /**
                 * if Editor to Session::getSession().
                 * if session true (name, key, role) Page::display(page)
                 * else Page::display(login).
                 */

                break;
            case 'root':
                /**
                 *  if Root to ?????
                 */

                break;
        }
    }

    /**
     *
     */
    public function login(){

        $path = NULL;
        $page = NULL;
        $data = NULL;

        if($_POST['send_login']){

        }else{

        }

        (new Display($path = NULL, $page = NULL, $data = NULL))->output();
    }

    /**
     *
     */
    public function logout(){

    }

}
<?php


class User
{

    protected function __construct(){}


    private function isUser(){
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

    public function logout(){}

}
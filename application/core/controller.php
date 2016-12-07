<?php


class Controller extends User
{
    protected $user_controller;
    protected $model;
    protected $data;

    /**
     * Controller constructor.
     * @param $user_controller_name
     * @param $model_name
     * @param null $param
     */
    public function __construct($user_controller_name, $model_name, $param = NULL)
    {
        $this->user_controller = Loader::load('controller', $user_controller_name, $param);
        $this->model = Loader::load('model',$model_name, $param);
        $this->data = $this->model->getData($param);
        /** checked user **/

        $this->init();
    }

    private function init(){

    }

}
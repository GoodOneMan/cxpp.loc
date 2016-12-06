<?php


class DataVerification
{
    private $data = NULL;
    private $class = NULL;

    /**
     * DataVerification constructor.
     * @param $data
     * @param $class
     */
    public function __construct($data, $class){
        $this->data = $data;
        $this->class = $class;
    }

    /**
     * Class Route
     * Public method
     * @return mixed
     */
    public function routeData(){
        if($this->class === 'route'){
            $data['controller'] = $this->getController();
            $data['action'] = $this->getAction();
            $data['lang'] = $this->getLang();
            $data['page'] = $this->getPage();
            $data['id'] = $this->getId();
        }else{
            $data = NULL;
        }
        return $data;
    }

    /**
     * Class Route
     * @return string
     */
    private function getController(){
        $controller = $this->data[URI_CONTROLLER];
        if(!file_exists(CONTROLLER.strtolower($controller).'_controller.php')){
            $controller = 'guest';
        }
        return $controller;
    }

    /**
     * Class Route
     * @return string
     */
    private function getAction(){
        return $action = $this->data[URI_ACTION];
    }

    /**
     * Class Route
     * @return string
     */
    private function getLang(){
        $lang = 'ru';
        $i = array_search('lang',$this->data);
        if($i){
            $i++;
            $tmp = $this->data[$i];
            switch ($tmp){
                case 'en':
                    $lang = 'en';
                    break;
            }
        }
        return $lang;
    }

    /**
     * Class Route
     * @return string
     */
    private function getPage(){
        $page = 'default';
        $i = array_search('page',$this->data);
        if($i){
            $i++;
            $page = $this->data[$i];
        }
        return $page;
    }

    /**
     * Class Route
     * @return int
     */
    private function getId(){
        $id = NULL;
        $i = array_search('id',$this->data);
        if($i){
            $i++;
            if(is_numeric($this->data[$i])){
                    $id = $this->data[$i];
            }
        }
        return $id;
    }

}
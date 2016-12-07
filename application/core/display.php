<?php


class Display
{
    private $path;
    private $page;
    private $data;

    /**
     * Display constructor.
     * @param null $path
     * @param null $page
     * @param null $data
     */
    public function __construct($path = NULL, $page = NULL, $data = NULL){
        $this->path = $this->setPath($path);
        $this->page = $this->setPage($page);
        $this->data = $this->setData($data);
    }

    /**
     * output page
     */
    public function output(){
        $this->data;
        include_once TEMPLATE.'header.php';
        include_once $this->path.$this->page.'.php';
        include_once TEMPLATE.'footer.php';
    }

    /**
     * @param $arg
     * @return string
     */
    private function setPath($path){
        switch ($path){
            case 'guest':
                $path = TEMPLATE.'guest/';
                break;
            case 'editor':
                $path = TEMPLATE.'editor/';
                break;
            case 'admin':
                $path = TEMPLATE.'admin/';
                break;
            default :
                $path = TEMPLATE;
                break;
        }
        return $path;
    }

    /**
     * @param $arg
     * @return mixed
     */
    private function setPage($page){
        return $page;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function setData($data){
        return $data;
    }

}
<?php

class Test
{
    public function __construct(){}

    public function loader($type, $name, $param = NULL){
        return Loader::load($type, $name, $param);
    }

    public function guest($arg){
        $this->guest_output($arg);
         //print_r($arg);
    }

    private function guest_output($arg){
        $display = new Display($arg['controller'],$arg['page'],$arg);
        $display->output();
    }
}

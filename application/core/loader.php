<?php


class Loader
{

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    /**
     * @param type
     * @param name
     * @param param
     *
     * @return object|NULL
     */
    public static function load($type, $name, $param = NULL){
        switch ($type){
            case 'controller':
                switch ($name){
                    case 'about':
                        return new About_Controller($param);
                    case 'contact':
                        return new Contact_Controller($param);
                    case 'editor':
                        return new Editor_Controller($param);
                    case 'file':
                        return new File_Controller($param);
                    case 'guest':
                        return new Guest_Controller($param);
                    case 'history':
                        return new History_Controller($param);
                    case 'hump':
                        return new Hump_Controller($param);
                    case 'license':
                        return new License_Controller($param);
                    case 'management':
                        return new Management_Controller($param);
                    case 'news':
                        return new News_Controller($param);
                    case 'project_a':
                        return new Project_a_Controller($param);
                    case 'project_b':
                        return new Project_b_Controller($param);
                    case 'project_c':
                        return new Project_c_Controller($param);
                    case 'purchase':
                        return new Purchase_Controller($param);
                    case 'resources':
                        return new Resources_Controller($param);
                    case 'root':
                        return new Root_Controller($param);
                    case 'services':
                        return new Services_Controller($param);
                    case 'structure':
                        return new Structure_Controller($param);
                    case 'vacancies':
                        return new Vacancies_Controller($param);
                    default :
                        return NULL;
                }
            case 'model':
                switch ($name){
                    case 'about':
                        return new About_Model($param);
                    case 'contact':
                        return new Contact_Model($param);
                    case 'editor':
                        return new Editor_Model($param);
                    case 'file':
                        return new File_Model($param);
                    case 'guest':
                        return new Guest_Model($param);
                    case 'history':
                        return new History_Model($param);
                    case 'hump':
                        return new Hump_Model($param);
                    case 'license':
                        return new License_Model($param);
                    case 'management':
                        return new Management_Model($param);
                    case 'news':
                        return new News_Model($param);
                    case 'project_a':
                        return new Project_a_Model($param);
                    case 'project_b':
                        return new Project_b_Model($param);
                    case 'project_c':
                        return new Project_c_Model($param);
                    case 'purchase':
                        return new Purchase_Model($param);
                    case 'resources':
                        return new Resources_Model($param);
                    case 'root':
                        return new Root_Model($param);
                    case 'services':
                        return new Services_Model($param);
                    case 'structure':
                        return new Structure_Model($param);
                    case 'vacancies':
                        return new Vacancies_Model($param);
                    default :
                        return NULL;
                }
            case 'lib':
                switch ($name){
                    default :
                        return NULL;
                }
            default :
                return NULL;
        }
    }

}
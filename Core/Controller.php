<?php

/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:24
 */
class Controller
{

    public $view_folder;
    /**
     * Controller constructor.
     * @param $folder string
     */
    public function __construct($folder)
    {
        $this->view_folder = $folder;
    }

    /**
     * Render method
     * @param $view_file string
     */
    public function render($view_file,$data=[]){
        $view = new View();
        $full_path = $this->view_folder . DIRECTORY_SEPARATOR . $view_file;
        $view->output($full_path,$data);
    }
}
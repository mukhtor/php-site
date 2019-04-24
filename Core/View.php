<?php

/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:25
 */
class View
{
    public function output($view_path,$data) {
        include 'application/View/' . $view_path . '.php';
    }
}
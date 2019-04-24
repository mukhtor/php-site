<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:20
//// */
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
include "functions.php";
include "vendor/autoload.php";
include "application/config/main.php";
//Core classesBosh_sahifa
include "Core/Model.php";
include "Core/yordamchilar/Format.php";
include "Core/View.php";
include "Core/Controller.php";
//Child classes
include "application/Models/imagesModel.php";
include "application/Controllers/AdminController.php";
include "application/Models/AdminModel.php";
include 'application/Models/NewModel.php';
include "application/controllers/SiteController.php";

$route = $_GET['route'];
$site = new SiteController('site');
$admin = new AdminController('Admin');
if ($route == '-header-' || !isset($route))
{
    $site->bosh();
}
if ($route == 'rasmlar')
{
    $site->image();
}
if ($route == 'yangiliklar')
{
    $site->news();
}
if ($route == 'about')
{
    $site->ABOUT();
}
if ($route == 'contact')
{
    $site->CONTACT();
}
if ($route == 'login')
{
    $admin->login();
}
if ($route == 'logout')
{
    $admin->logout();
}
if ($route == 'Admin/index')
{
    $admin->index();
}
if ($route == 'Admin/tables_news') {
    $admin->newsList();
}

if ($route == 'Admin/create_news') {
    $admin->newsCreate();
}

if ($route == 'Admin/update_news') {
    $admin->newsEdit();
}
if ($route == 'Admin/delete_news') {
    $admin->newsDelete();
}
if($route=='Admin/tables_images'){
    $admin->ImageList();
}
if($route=='Admin/create_images'){
    $admin->ImageCreate();
}
if ($route == 'Admin/delete_images') {
    $admin->ImageDelete();
}
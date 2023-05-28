<?php
session_start();
ini_set('display_errors','On');
error_reporting(E_ALL);

function d($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var)
{
    d($var);
    die();
}

function set_session($key, $val){
    $_SESSION[$key] = $val;
}

function get_session($key){

    if(array_key_exists($key, $_SESSION) && !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key]='';
    return $value; 
}

function kill_session(){
    session_destroy();
    $_SESSION = null;
    unset($_SESSION);
}

function redirect($url){
    header("location:$url");
}

function upload($target, $destination){
    move_uploaded_file($target, $destination);
    return true;
}
$webroot = "http://POS.test" . DIRECTORY_SEPARATOR;
$adminurl = $webroot . "admin/layout_1/LTR/material/full" . DIRECTORY_SEPARATOR;
$frontendulr = $webroot . "frontend/Layouts" . DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$assets = $webroot."uploads".DIRECTORY_SEPARATOR;
$uploads= $docroot. DIRECTORY_SEPARATOR. "uploads" . DIRECTORY_SEPARATOR;
$datasource = $docroot. DIRECTORY_SEPARATOR. "datasource" . DIRECTORY_SEPARATOR;
$partials = $docroot . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR;
$frontpartials = $docroot . DIRECTORY_SEPARATOR . 'frontend/Layouts/partials' . DIRECTORY_SEPARATOR;

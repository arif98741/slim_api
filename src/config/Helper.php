<?php
/**
 * Copyright (c) 2019.
 * This project is made and maintained by Ariful Islam using Slim framework for testing api. Here anybody can use this project for learning purpose. But it is still in production. That's why using in production is not recommended. To know more about me just knock me at github.com/arif98741
 * facebook.com/arifulislammc007
 *
 */

namespace config;

use config\DB;


/**
 * Class Helper
 * @package config
 */
class Helper
{
    private  $link;

    /**
     * Helper constructor.
     */
    public function __construct()
    {
        $link = new DB();
    }

    /**
     * @return string
     */
    public static function base_url()
    {
        $base_url  = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url .= "://". @$_SERVER['HTTP_HOST'];
        $base_url .=     str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        $base_url  =  rtrim($base_url,'/').$_SERVER['REQUEST_URI'];
        return $base_url;
    }
}
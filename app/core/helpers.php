<?php

namespace MVC\core;

class helpers{

    public static function redirect($path){

        return header('LOCATION:'.DOMAIN_NAME.'/'.$path);
    }

    public static function assets($path){

        echo ROOT."/public".$path;
    }

}
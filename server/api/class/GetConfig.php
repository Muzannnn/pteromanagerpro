<?php 


class GetConfig {

    public static function GetConfigVar($var){
        return $GLOBALS['DB']->GetContent('config', ['name' => $var])[0];
    }

}
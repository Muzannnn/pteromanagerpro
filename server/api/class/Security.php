<?php 


class Security {
    public static function GenTokenAPI($longueur = 32){
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueur_caracteres = strlen($caracteres);
        $chaine = '';
        for ($i = 0; $i < $longueur; $i++) {
            $chaine .= $caracteres[rand(0, $longueur_caracteres - 1)];
        }
        return $chaine;
    }

    public static function CheckTokenAPI($token){
        $date = time();
        if (Security::GetDataFromSec($token) != NULL){
            if(strtotime(Security::GetDataFromSec($token)['validity']) > $date){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function GetDataFromSec($value){
        return $GLOBALS['DB']->GetContent('security', ['value' => $value])[0];
    }

    public static function getClientIp() {
        $ipAddress = '';
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ipAddress = trim(end($ipAddresses)); 
        } else {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        }
        
        return $ipAddress;
    }

}
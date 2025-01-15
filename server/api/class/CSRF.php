<?php
class CSRF
{
    public static function GenString($length = 100) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ:-!=/#';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function CreateToken()
    {
        $protocol = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'http';
        $url = $protocol . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $ip = Security::getClientIp();
        $expire_to = 15 * 60; // Expire dans 15 minute
        $time_expire = time() + $expire_to;
        $token = CSRF::GenString();
       
        $GLOBALS['DB']->Insert('csrf', ['token' => $token, 'ip' => $ip, 'url' => $url, 'expire_time' => $time_expire]);
        return $token;
    }
    
    public static function VerifyToken($csrf_token)
    {
        $referer_url = $_SERVER['HTTP_REFERER'];
        $ip = Security::getClientIp();
        $current_time = time();
        
        if ($GLOBALS['DB']->Count('csrf', ['token' => $csrf_token]) == 1)
        {
            $token_info = $GLOBALS['DB']->GetContent('csrf', ['token' => $csrf_token])[0];
            if ($token_info['ip'] == $ip && $current_time < $token_info['expire_time'] && $token_info['url'] == $referer_url)
            {
                $GLOBALS['DB']->Delete('csrf', ['id' => $token_info['id']]);
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    // Vérifie que l'action provient d'ajax
    public static function isAjaxRequest()
    {
        return (boolean)((isset($_SERVER['HTTP_X_REQUESTED_WITH'])) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
    }
}
?>
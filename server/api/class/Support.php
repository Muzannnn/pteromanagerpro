<?php 


class Support {

    public static function GetMyTickets($user_id = null){
        if ($user_id == null)
        {
            $user_id = $_SESSION['user_id'];    
        }
        
        return $GLOBALS['DB']->GetContent('tickets', ['user' => $user_id]);
    }

    public static function GetTicketsReasons(){
        
        return $GLOBALS['DB']->GetContent('tickets_reasons');
    }
}
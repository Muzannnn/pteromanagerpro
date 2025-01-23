<?php 


class Roles {

    public static function GetAllRoles(){
        
        return $GLOBALS['DB']->GetContent('roles');
    }

    public static function GetRoleByID($id){
        
        return $GLOBALS['DB']->GetContent('roles', ['id' => $id])['0'];
    }
}
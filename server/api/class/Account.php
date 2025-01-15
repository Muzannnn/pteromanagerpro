<?php
use Bcrypt\Bcrypt;

class Account {



    public static function CreateUser(
        $username, 
        $password, 
        $email ){

        $encrypted_password = Account::CreatePassword($password);
        
        $date = time();

        try {
		    $GLOBALS['DB']->Insert("users", [
                "username" => $username,
                "email" => $email,
                "password" => $encrypted_password,
                "role" => 0,
                "ban" => 0,
                "profile_picture" => "/assets/images/logo.png",
                "last_login_date" => $date,
                "creation_date" => $date
            ]);
            return "success";
        }catch (Exception $e){
            return "error".$e;
        }
    }

    public static function CreatePassword($password){
        

        $bcrypt = new Bcrypt();

        $password_encrypted = $bcrypt->encrypt($password, "2a");

        return $password_encrypted;
    }

    public static function CheckPassword($password, $user_id){
        
        $password_encrypted = Account::GetUser($user_id)['password'];

        $bcrypt = new Bcrypt();

        $result = $bcrypt->verify($password, $password_encrypted);

        return $result;
    }

    public static function AuthUser(
        $id,
        $username, 
        $global_name, 
        $discord_id,
        $avatar ){

        $date = time();

        try {
            $GLOBALS['DB']->Update('users', ['discord_id' => $id], [
                "global_name" => $global_name, 
                "username" => $username, 
                "discord_id" => $discord_id,
                "avatar" => $avatar, 
                "last_login_date" => $date

            ]);
        }catch (Exception $e) {
            return "error";
        }
    }

    public static function IsUserExist($id){
        if ($GLOBALS['DB']->Count("users", ["discord_id" => $id]) != 0)
        {
            return true;
        }else{
            return false;
        }
        
    }



    public static function GetUser($user_id = null){
        if ($user_id == null)
        {
            $user_id = $_SESSION['user_id'];    
        }
        
        return $GLOBALS['DB']->GetContent('users', ['discord_id' => $user_id])[0];
    }


    
    public static function GetUsername($id = null){
        if ($id == null)
        {
            $id = $_SESSION['user_id'];
        }
        return Account::GetUser($id)['username'];
    }

    public static function GetAvatar($id = null){
        if ($id == null)
        {
            $id = $_SESSION['user_id'];
        }
        return Account::GetUser($id)['avatar'];
    }

    public static function GetCreationDate($id = null){
        if ($id == null)
        {
            $id = $_SESSION['user_id'];
        }
        return Account::GetUser($id)['creation_date'];
    }
    

    public static function IsAdmin($user_id = null){
        if ($user_id == null)
        {
            $user_id = $_SESSION['user_id'];    
        }

        if(Account::GetUser($user_id)['role'] == 80){
            return true;
        }else{
            return false;
        }
    }

    public static function GetAllAccounts(){
        return $GLOBALS['DB']->GetContent("users");
    }


    public static function isAuthentified(){
         return isset($_SESSION['user_id']);
    }


}


?>
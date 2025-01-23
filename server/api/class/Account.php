<?php
use Bcrypt\Bcrypt;

class Account {



    public static function CreateUser(
        $username, 
        $firstname, 
        $lastname, 
        $password, 
        $email ){

        $encrypted_password = Account::CreatePassword($password);
        
        $date = time();

        try {
		    $GLOBALS['DB']->Insert("users", [
                "username" => $username,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "password" => $encrypted_password,
                "role" => 2,
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

    private static function CreatePassword($password){
        

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

    public static function IsUserExist($id){
        if ($GLOBALS['DB']->Count("users", ["id" => $id]) != 0)
        {
            return true;
        }else{
            return false;
        }
        
    }

    public static function IsEmailUserExist($email){
        if ($GLOBALS['DB']->Count("users", ["email" => $email]) != 0)
        {
            return true;
        }else{
            return false;
        }
        
    }

    public static function IsUsernameUserExist($username){
        if ($GLOBALS['DB']->Count("users", ["username" => $username]) != 0)
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
        
        return $GLOBALS['DB']->GetContent('users', ['id' => $user_id])[0];
    }

    public static function GetUserByEmail($email){        
        return $GLOBALS['DB']->GetContent('users', ['email' => $email])[0];
    }

    
    public static function GetUsername($id = null){
        if ($id == null)
        {
            $id = $_SESSION['user_id'];
        }
        return Account::GetUser($id)['username'];
    }


    public static function GetCreationDate($id = null){
        if ($id == null)
        {
            $id = $_SESSION['user_id'];
        }
        return Account::GetUser($id)['creation_date'];
    }
    


    public static function GetAllAccounts(){
        return $GLOBALS['DB']->GetContent("users");
    }


    public static function isAuthentified(){
         return isset($_SESSION['user_id']);
    }

    public static function generateAuthTokenWithPayload($user_id){
        $payload = [
            'user_id' => $user_id,
            'iat' => time(),
            'exp' => time() + 60
        ];
    
        $base64Payload = base64_encode(json_encode($payload));
    
        $uniqueToken = bin2hex(random_bytes(16));

        $exporttoken = $base64Payload . '.' . $uniqueToken;

        $GLOBALS['DB']->Insert("auth_tokens", [
            "user_id" => $user_id,
            "token" => $exporttoken,
            "created_at" => time(),
            "expires_at" => time() + 60,
        ]);
    
        return $exporttoken;
    }

    public static function validateAuthToken($token) {
        [$base64Payload, $uniqueToken] = explode('.', $token);
    
        $payload = json_decode(base64_decode($base64Payload), true);
    
        if ($payload['exp'] > time()) {
            return false;
        }
    
        // Exemple : vérifiez également la présence de ce token dans la base de données
        // ...
    
        return true;
    }

    public static function checkTokenDB($token) {
        if ($GLOBALS['DB']->Count("auth_tokens", ["token" => $token]) != 0)
        {
            return true;
        }else{
            return false;
        }
    }
}


?>
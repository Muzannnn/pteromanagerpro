<?php

header('Content-Type: application/json');
include('../../../vendor/autoload.php');
include('../class/include.php');


use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']) ?? null;
    $firstname = htmlspecialchars($_POST['firstname']) ?? null;
    $lastname = htmlspecialchars($_POST['lastname']) ?? null;
    $email = htmlspecialchars($_POST['email']) ?? null;
    $password = $_POST['password'] ?? null;
    $confirm_password = $_POST['confirm-password'] ?? null;

    if (empty($username) || empty($email) || empty($password)) {
        header("HTTP/1.1 400");
        echo json_encode([
            'status' => 'error',
            'message' => 'Tous les champs sont obligatoires.'
        ]);
        exit;
    }

    $success = true;

    if ($success) {
        $validator = new EmailValidator();
        if ($validator->isValid($email, new RFCValidation())) {
            if (!Account::IsEmailUserExist($email)) {
                if (!Account::IsUsernameUserExist($username)) {
                    if($password = $confirm_password){
                        Account::CreateUser(
                            $username,
                            $firstname,
                            $lastname,
                            $password,
                            $email
                        );
                        header("HTTP/1.1 200");
                        echo json_encode([
                            'status' => 'success'
                        ]);
                        exit;
                    }else{

                        header("HTTP/1.1 400");
                        echo json_encode([
                            'status' => 'error',
                            'message' => 'Les mot de passes ne sont pas identiques.'
                        ]);
                        exit;
                    }

                } else {

                    header("HTTP/1.1 400");
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Ce nom d\'utilisateur est déjà utilisé.'
                    ]);
                    exit;
                }
            } else {
                header("HTTP/1.1 400");
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Cette adresse EMail est déjà utilisée.'
                ]);
                exit;

            }
        } else {
            header("HTTP/1.1 400");
            echo json_encode([
                'status' => 'error',
                'message' => 'Adresse EMail invalide.'
            ]);
            exit;

        }
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Erreur lors de l\'enregistrement.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Requête invalide.'
    ]);
}
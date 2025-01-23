<?php

header('Content-Type: application/json');
include('../../../vendor/autoload.php');
include('../class/include.php');


use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']) ?? null;
    $password = $_POST['password'] ?? null;

    if (empty($email) || empty($password)) {
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
            if (Account::IsEmailUserExist($email)) {
                if (Account::CheckPassword($password, Account::GetUserByEmail($email)['id'])) {
                    
                    
                    
                    header("HTTP/1.1 200");
                    echo json_encode([
                        'status' => 'success'
                    ]);
                    exit;
                } else {
                    header("HTTP/1.1 400");
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Adresse EMail ou mot de passe incorect.'
                    ]);
                    exit;

                }
            } else {
                header("HTTP/1.1 400");
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Adresse EMail ou mot de passe incorect.'
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
            'message' => 'Erreur lors de de la connexion.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Requête invalide.'
    ]);
}
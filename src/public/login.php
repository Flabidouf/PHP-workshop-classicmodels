<?php
declare(strict_types=1);

// 2 - connect to DB
require_once "public/db/Database.php";

session_start();



    try{
        if(empty($_POST)){
            // Afficher le formulaire
            include "public/views/layout/header.view.php";
            include "public/views/login.view.php";
            include "public/views/layout/footer.view.php";
        
        } else {
        
            if(empty($_POST["username"]) ||empty($_POST["password"])){
                throw new Exception("Form not completed");
            }

            $username = htmlspecialchars($_POST['username']);

            $db = new Database();
            $stmt = $db->query(
                "SELECT * FROM users WHERE username = ?",
                [$_POST['username']]
            );

            $user = $stmt->fetch();

            if (empty($user)) {
                throw new Exception('Wrong username');
            }

            if (password_verify($_POST['password'], $user['password']) === false) {
                throw new Exception('Wrong password');
            }

            $_SESSION["user"] = [
                "id" => $user['id'],
                "username" => $username, // No need to specify as we used it before.
                "email" => $user['email'], 
             ];

             // Redirect to home page
             http_response_code(302);
             header('location: index.php');
            }
            
    }catch (Exception $e) {
        echo $e->getMessage();
    }


?>
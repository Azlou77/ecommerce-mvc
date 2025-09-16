<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class UserModel
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = new Database();
    }

  


    // Email sanitisation = check if email valid format (@, 255 char max etc ...)
    public function isValidEmail($email){
        $email = $_POST['email'] ?? '';
        $emailErr = $_POST[''] ?? '';

        if ($email && empty($email)){
        echo "Veuillez rentrer une adresse email";
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "L'adresse email    est invalide.";
        } else {
            return true;
        }
    } 


    // Username sanitisation = no special char, no space, no number
    public function isValidUsername($username){
        $username = $_POST['username'] ?? '';
        $usernameErr = $_POST[''] ??'';
        if ($username && empty($username)){
            echo "Veuillez rentrer un nom d'utilisateur";
        } elseif (preg_match('/[0-9]|\W|\s/', $username)){
            $usernameErr = "Le nom d'utilisateur ne doit pas contenir de chiffre, d'espace ou de caractère spécial.";
        } else{
            return true;
        }
    }


    // Password sanitisation = min 12 char, at least one upper, one lower, one number, one special char
    public function isValidPassword($password){
        $password = $_POST['password'] ?? '';
        $passwordErr = $_POST[''] ?? '';
        if ($password && empty($password)){
        echo "Veuillez rentrer une mot de passe";

        } elseif (strlen($password) < 12 && preg_match('/[a-z]|[A-Z]/ | [0-9] | \W /', '$password')){
            $passwordErr =  "Le mot de passe doit contenir au moins 12 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.";
        }  else {
            return true;
        }
    }

    public function isFormValid($email, $username, $password){
        if ($_SERVER["REQUEST_METHOD"] === "POST" && $this->isValidPassword($password) && $this->isValidUsername($username) && $this->isValidEmail($email)){
            return true;
        }
    }

    public function register($email, $username, $password){
        
        if ($this->isFormValid($email, $username, password: $password)){
            $query = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
            $params = [
                ':email' => $email,
                ':username' => $username,
                ':password' => password_hash($password, PASSWORD_BCRYPT)
            ];
            return $this->connexion->query($query, $params);


        }
    }
}



?>

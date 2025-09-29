<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class UserModel
{
    private $connexion;
    private $email = $_POST['email'] ?? '';
    private $emailErr = $_POST[''] ?? '';
    private $username = $_POST['username'] ?? '';
    private $usernameErr = $_POST[''] ??'';
    private $password = $_POST['password'] ?? '';
    private $passwordErr = $_POST[''] ?? '';
    private $hash = password_hash($this->password, PASSWORD_BCRYPT);

    public function __construct()
    {
        $this->connexion = new Database();
    }

  
    // Email sanitisation = check if email valid format (@, 255 char max etc ...)
    public function isValidEmail($email){
        if ($this->$email && empty($this->$email)){
        echo "Veuillez rentrer une adresse email";
        } elseif (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->emailErr = "L'adresse email    est invalide.";
        } else {
            return true;
        }
    } 


    // Username sanitisation = no special char, no space, no number
    public function isValidUsername(){
        if ($this->username && empty($this->username)){
            echo "Veuillez rentrer un nom d'utilisateur";
        } elseif (preg_match('/[0-9]|\W|\s/', $this->username)){
            $this->usernameErr = "Le nom d'utilisateur ne doit pas contenir de chiffre, d'espace ou de caractère spécial.";
        } else{
            return true;
        }
    }


    // Password sanitisation = min 12 char, at least one upper, one lower, one number, one special char
    public function isValidPassword(){
       
        if ($this->password && empty($this->password)){
        echo "Veuillez rentrer une mot de passe";

        } elseif (strlen($this->password) < 12 && preg_match('/[a-z]|[A-Z]/ | [0-9] | \W /', '$password')){
            $this->passwordErr =  "Le mot de passe doit contenir au moins 12 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.";
        }  else {
            return true;
        }
    }

    public function isFormValid(){
        if ($_SERVER["REQUEST_METHOD"] === "POST" && 
            $this->isValidPassword() && 
            $this->isValidUsername() && 
            $this->isValidEmail($this->email)){
            return true;
        }
    }

    public function register($email, $username, $password){
        
        if ($this->isFormValid()){
            $query = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
            $params = [
                ':email' => $email,
                ':username' => $username,
                ':password' => $password,
            ];
            $this->connexion->query($query, $params);
            header("Location: login.php");
            exit();
        }
       
}

    public function login($email, $password, $hash){
        if (password_verify($password, $hash)){
            $email = $this->email;
            $query = "SELECT * FROM users WHERE email = :email";
            $params = [':email' => $email];
            return $this->connexion->query($query, $params)->fetch(PDO::FETCH_ASSOC);

        }
     
        
    }
}

?>

<?php
$email = $_POST['email'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Email sanitisation = check if email valid format (@, 255 char max etc ...)
if ($email && empty($email)){
    echo "Veuillez rentrer une adresse email";

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est valide.";
} else {
    echo "L'adresse email '$email' n'est pas valide.";
}

// Username sanitisation = no special char, no space, no number
if ($username && empty($username)){
    echo "Veuillez rentrer un nom d'utilisateur";

} elseif (!isValidUsername($username)){
    echo "Le nom d'utilisateur ne doit pas contenir de chiffre, d'espace ou de caractère spécial.";
} else {
    echo "Nom d'utilisateur valide";
}

function isValidUsername($username){
     if (!preg_match('/[0-9]|\W|\s/', $username)){
        return false;
    } else {
        return true;

    }
}

// Password
if ($password && empty($password)){
    echo "Veuillez rentrer une mot de passe";
} elseif (!isValidPassword($password)){
    echo "Le mot de passe doit contenir au moins 12 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.";
} else {
    echo "Mot de passe valide";
}

// Password sanitisation = min 12 char, at least one upper, one lower, one number, one special char
function isValidPassword($password){
    if (strlen($password) < 12 && !preg_match('/[a-z]|[A-Z]/ | [0-9] | \W /', '$password')){
        return false;
    } else {
        return true;

    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        /* Utilisez le même CSS que login.php */
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.login-container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px 30px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    margin-top: 0;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"], input[type="password"], input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

p {
    color: red;
    font-weight: bold;
}

    </style>
</head>
<body>

<div class="login-container">
    <h2>Inscription</h2>
    <form action="register.php" method="post">
        <div>
            <label for="email">Adresse e-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <input type="submit" value="S'inscrire">
        </div>
    </form>
</div>

</body>
</html>
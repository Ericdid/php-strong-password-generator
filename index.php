<?php
$has_pass = isset($_GET["password_lenght"]);


function generate($has_pass){
    $chars ="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890è+òàù,.-<>|!£$%&/()=?^[]@#_:;§°ç*é";
    $random_chars = str_shuffle($chars);
    return  $random_chars;

    $pass_generated = generate();
}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
    <form  method="get">
        <h3>Scegli un numero da 5 a 15,questo sarà la lunghezza della password da generare</h3>
        <input type="number" min="5" max="15" name="password_lenght" id="password_lenght" required> 
        <button>invia</button>
        <h3 id="generated_password">password generata: <?php echo $pass_generated ?></h3>





    </form>
    
</body>
</html>
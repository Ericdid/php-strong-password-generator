<?php
$has_pass = isset($_GET["password_length"]);
$pass_length = (int) $_GET["password_length"] ?? " ";



if ($has_pass) {
    
    $chars ="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890^?=)(/&";
    $min = 0;
    $max = strlen($chars) - 1;
    $pass_generated = "";
    
    for  ($i = 0; $i < $pass_length; $i++ ) { ;
    $random_index = rand($min, $max);
    $random_char = $chars [$random_index];
    $pass_generated .= $random_char;
    }
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
    <form method="get">
        <h3>Scegli un numero da 5 a 15,questo sarà la lunghezza della password da generare</h3>
        <input type="number" min="5" max="15" name="password_length" value="<?=$pass_length?>">
        <button>invia</button>
        <h3 id="generated_password">password generata: <?php echo $pass_generated ?></h3>
    </form>

</body>

</html>
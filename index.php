<?php
include "./functions.php";

$alfabeto = ["A","B","C","D","E","F","G","H","I","L","M","N","O","P","Q","S","T","U","V","W","X","Y","Z","K","J",];
$numeri = "0123456789";

$tutti_caratteri = $alfabeto . $numeri;
$lunghezza_totale = strlen($tutti_caratteri);
$passoword = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>PHP-password</title>
    </head>

<body>
    <h1>prova <?php echo $cciao ?></h1>
    <form action="" method="get">
        <div class="container">
            <label for="lunghezzaPassword">lunghezza della Password</label>
            <input type="range" name="lunghezzaPassword" value="10" min="1" max="20">
            <p>10</p>
            <button class="btn btn-primary" type="submit">genera la tua passowrd</button>
        </div>
    </form>
</body>
</html>
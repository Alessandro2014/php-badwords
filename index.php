<?php
// SALVO QUERY
$word = $_GET['query'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- FORM PER INSERIRE OAROLA DA CENSURARE -->
    <form method="GET" action="index.php">
        Quale parola vuoi censurare <input type="text" name="query" placeholder="Scrivi qui..." />
    </form>

    <p>
        <?php
        // TESTO COMPLETO
        $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Eum illo inventore necessitatibus non iusto, quibusdam, nisi perferendis excepturi, 
        provident dolore alias distinctio dicta. Consequuntur, dolorem laudantium libero iste totam assumenda.';
        // STAMPA TESTO
        echo $text . '<br>';
        // STAMPA LUNGHEZZA TESTO
        echo 'Lunghezza paragrafo: ' . strlen($text) . '<br>';
        // STAMPA TESTO CON PAROLA CENSURATA
        echo $newText = str_replace($word, " *** ", $text);
        // STAMPA NUOVA LUNGHEZZA TESTO
        echo '<br> Lunghezza nuovo paragrafo: ' . strlen($newText);

        ?>
    </p>
</body>

</html>
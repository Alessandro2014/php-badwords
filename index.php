<?php

$word = $_GET['word'];

?>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Eum illo inventore necessitatibus non iusto, quibusdam, nisi perferendis excepturi, 
        provident dolore alias distinctio dicta. Consequuntur, dolorem laudantium libero iste totam assumenda.';

        echo $text . '<br>';

        echo 'Lunghezza paragrafo: ' . strlen($text) . '<br>';

        echo $newText = str_replace($word, " *** ", $text);

        echo '<br> Lunghezza nuovo paragrafo: ' . strlen($newText);

        ?>
    </p>
</body>

</html>
<?php
if($_SESSION['login'] == true) {
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login succesvol</title>
    </head>
    <body>
        <h2>Welkom op de beveiligde pagina.</h2>
    </body>
    </html>
} else {
    echo "Wat doe jij hier?"
}

?>



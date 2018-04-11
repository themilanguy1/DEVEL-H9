<?php
if(isset($_POST['naam'])) {
    echo "Bedankt, uw bericht is verzonden.";
    echo "<br><br>";
    echo "Als u nog een boodschap achter wilt laten zal u later terug moeten komen op deze pagina.";

    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];

    include 'connect.php';

    


} else { 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gastenboek</title>
    </head>
    <style>
        .titel {
            margin: auto;
            margin-bottom: 1em;
        }
        textarea {
            width: 30%;
        }
    </style>
    <body>
        
    </body>
    </html>
        <h4 class="titel">Wij hopen dat uw verblijf prettig was.</h4> 
        <p>Zou u nog een boodschap achter willen laten in ons online gastenboek?</p>
        <br>

        <form method="post" action="">
            <input type="text" name="naam" placeholder="naam">
            <input type="textarea" name="bericht" placeholder="je bericht">
            <br>
            <br>
            <input type="submit" value="bericht verzenden">
        </form>


    </html>

    <?php
}

?>





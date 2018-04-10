<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Gebruiker Toevoegen</title>
</head>
<body>
    <?php
    session_start();
        if(!isset($_POST['inloggen'])) {
            try {
                $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
                $query = $db->prepare("INSERT INTO  gebruiker(username, password) VALUES('root', '" . sha1('password') . "')");
                if($query->execute()) {
                    echo "De nieuwe gegevens zijn toegevoegd.";
                } else {
                    "Er is een fout opgetreden!";
                }
            } catch(PDOException $e) { 
                die("Error!: " . $e->getMessage());
            }
        }

    ?>
    <?php
        try {
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
            if(isset($_POST['inloggen'])) {
                $username = $_POST['username'];
                $password = sha1($_POST['password']);
                $query = $db->prepare("SELECT * FROM gebruiker 
                    WHERE username = :user 
                    AND password = :pass");
                $query->bindParam("user", $username);
                $query->bindParam("pass", $password);
                $query->execute();
                if($query->rowCount() < 1) {
                    echo "Juiste gegevens!";
                    $_SESSION['login'] = 1;
                } else {
                    echo "Onjuiste gegevens!";
                    $_SESSION['login'] = 0;
                }
            } echo "<br>";
        } catch(PDOException $e) {
            die("Error!: " . $e->getMessage());
        }
    ?>
    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="username"><br>

        <label>Password</label>
        <input type="password" name="password"><br>

        <input type="submit" name="inloggen" value="Inloggen">
    </form>


<?php
if($_SESSION['login'] == 1) {
    header('location: beveiligdepagina.php');
}
?>

</body>
</html>
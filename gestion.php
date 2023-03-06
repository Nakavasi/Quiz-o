<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>

</head>
<body>
<div class="pseudo">
    <form method="post">
        <input type="text" name="pseudo" submit/>
        <input type="submit" name="envoie" value="Envoyer">
    </form>
    <?php
    $connexion=mysqli_connect("localhost","root","", "quiz");
    $result = mysqli_query($connexion,"SELECT * FROM user");
    function Supprimer($result,$connexion,$pseudo){
        $result = mysqli_query($connexion, "DELETE FROM user WHERE pseudo='$pseudo'");
        
    }
    if (array_key_exists("envoie",$_POST)){
        $pseudo = $_POST["pseudo"];
        Supprimer($result, $connexion,$pseudo);
    }

    
    
    while ($user = mysqli_fetch_assoc($result)) {
        echo  "<p>" ;
        echo  $user['pseudo'];
        echo "</p>";
    }


    ?>
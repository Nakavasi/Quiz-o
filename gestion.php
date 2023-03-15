<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="gestion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>

</head>
<body>
    <form method="post">
    <?php
    $connexion=mysqli_connect("localhost","root","", "quizz");
    $result = mysqli_query($connexion,"SELECT * FROM user");
    function Supprimer($result,$connexion,$pseudo){
        $result = mysqli_query($connexion, "DELETE FROM user WHERE pseudo='$pseudo'");
        
    }
    if (array_key_exists("envoie",$_POST)){
        $pseudo = $_POST["pseudo"];
        Supprimer($result, $connexion,$pseudo);
    }
    echo "<h1>Choisir un pseudo à supprimer :</h1><br>";
    echo "<br>";
    echo "<div class='pseudo'>";
    echo '<select name="pseudo" id="Pseudo-select" required>';
    echo '<option value="">--Choisie un pseudo--</option>';
    while ($user = mysqli_fetch_assoc($result)) {
        echo '<option value='.$user['pseudo'].'>'.$user['pseudo'].'</option>';
    }
    echo '</select>';
    echo "</div>";
    ?>
    <br>
    <br>
    <div class= "bouton">
    <input type="submit" name="envoie" value="Supprimer">
    </div>
    </form>
</body>
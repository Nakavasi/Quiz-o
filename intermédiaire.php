<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>
</head>
<body>
    <?php
        $connexion=mysqli_connect("localhost","root","", "quiz");
        $result = mysqli_query($connexion,"SELECT * FROM user");
        $pseudo= $_POST["prenom"];
        $mdp= $_POST["password"];
        $nonValide= TRUE;
        if (!$result) {
            echo 'Impossible d\'exécuter la requête ';
            exit;
        }
        while ($user=mysqli_fetch_assoc($result)){
            if ($pseudo == $user["pseudo"]or $pseudo == $user["email"]){
                if ($mdp == $user["password"]){
                    header('Location: accueil.html');
                    exit;
                }
            }
        }
        header('Location: connexion.html');
    ?>
</body>
</html>
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
        $connexion=mysqli_connect("localhost","root","", "quizz");
        $result = mysqli_query($connexion,"SELECT * FROM user");
        $pseudo= $_POST["prenom"];
        $mail= $_POST["mail"];
        $mdp= $_POST["password"];
        $type= intval($_POST["Type"]);
        if (!$result) {
            echo 'Impossible d\'exécuter la requête ';
            exit;
        }
        while ($user=mysqli_fetch_assoc($result)){
            if ($pseudo == $user["pseudo"]){
                header('Location: inscription.html');
                exit;
            }
            if ($mdp == $user["password"]){
                header('Location: inscription.html');
                exit;
            }
            if ($mail == $user["email"]){
                header('Location: inscription.html');
                exit;
            }
        }
        mysqli_query($connexion,"INSERT INTO `user`( `pseudo`, `email`, `password`, `role`) VALUES ('$pseudo','$mail','$mdp','$type')");
        header("Location: accueil".$type.".php");
    ?>
</body>
</html>
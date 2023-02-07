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
        $Utilisateur =[["email" => "maxancemangeret@gmail.com", "nom"=>"Nakavasi","mdp"=>"1234"]];
        $pseudo= $_POST["prenom"];
        $mdp= $_POST["password"];
        $nonValide= TRUE;
        for ($i=0;$i<sizeof($Utilisateur);$i++){
            if ($pseudo == $Utilisateur[$i]["nom"] or $pseudo == $Utilisateur[$i]["email"]){
                    if ($mdp == $Utilisateur[$i]["mdp"]){
                        header('Location: accueil.html');
                        $nonValide = False;
                    }
            }
        }
        if ($nonValide){
            header('Location: connexion.html');
        }
    ?>
</body>
</html>
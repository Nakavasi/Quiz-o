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
        $pseudo =$_POST["prenom"];
        $mail= $_POST["mail"];
        $mdp= $_POST["password"];
        $nonValide= TRUE;
        for ($i=0;$i<sizeof($Utilisateur);$i++){
            if ($mail != $Utilisateur[$i]["email"]){
                if ($pseudo != $Utilisateur[$i]["nom"]){
                    if ($mdp != $Utilisateur[$i]["mdp"]){
                        header('Location: accueil.html');
                        $nonValide= FALSE;
                    }
                }
            }
        }
        if ($nonValide){
            header('Location: inscription.html');
        }
    ?>
</body>
</html>
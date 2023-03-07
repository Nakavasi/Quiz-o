<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creation_quizz.css">
    <title>Création</title>
</head>
<body>
   <h1>Création du Quizz</h1>
    <form action="creation de quizz.php" method="post">
    <label for="question">Question :</label>
    <form method="post">
        <input type="text" id="question" name="question"><br><br>
        <p>Veuillez inscrire vos réponse et cocher la solution :</p>
        <div classe="reponse1">
            <input type="checkbox" name="Reponse1check">
            <input type="text" name="Reponse1" required>
            <label for="reponse"></label>
        </div>
        <div classe="reponse2">
            <input type="checkbox" name="Reponse2check">
            <input type="text" name="Reponse2" required>
            <label for="contactChoice2"></label>
        </div>
        <div classe="reponse3">
            <input type="checkbox" name="Reponse3check">
            <input type="text" name="Reponse3" required>
            <label for="contactChoice3"></label>
        </div>
        <div classe="reponse4">
            <input type="checkbox" name="Reponse4check">
            <input type="text" name="Reponse4" required>
            <label for="contactChoice4"></label>
        </div><br>  
        <div classe="Suivant">
            <input type="submit" name="Validation"></input>
        </div>
    </form>
        <?php
            if (array_key_exists("Validation",$_POST)){
                if (array_key_exists("Reponse1check",$_POST)){
                    $check1= $_POST["Reponse1check"];
                }
                else if (array_key_exists("Reponse2check",$_POST)){
                    $check2= $_POST["Reponse2check"];
                } 
                else if (array_key_exists("Reponse3check",$_POST)){
                    $check3= $_POST["Reponse3check"];
                } 
                else if (array_key_exists("Reponse4check",$_POST)){
                    $check4= $_POST["Reponse4check"];
                }
                $question= $_POST["question"];
                $reponse1=$_POST["Reponse1"];
                $reponse2=$_POST["Reponse2"];
                $reponse3=$_POST["Reponse3"];
                $reponse4=$_POST["Reponse4"];
                echo "La question est : ".$question."<br>";
            }
            if (isset($check1)){
                echo "Réponse1 :".$reponse1." Bonne réponse <br>";
                echo "Réponse2 :".$reponse2." Mauvaise réponse<br>";
                echo "Réponse3 :".$reponse3." Mauvaise réponse<br>";
                echo "Réponse4 :".$reponse4." Mauvaise réponse<br>";
            }
            else if(isset($check2)){
                echo "Réponse1 :".$reponse1." Mauvaise réponse<br>";
                echo "Réponse2 :".$reponse2." Bonne réponse<br>";
                echo "Réponse3 :".$reponse3." Mauvaise réponse<br>";
                echo "Réponse4 :".$reponse4." Mauvaise réponse<br>";
            }
            else if(isset($check3)){
                echo "Réponse1 :".$reponse1." Mauvaise réponse<br>";
                echo "Réponse2 :".$reponse2." Mauvaise réponse<br>";
                echo "Réponse3 :".$reponse3." Bonne réponse<br>";
                echo "Réponse4 :".$reponse4." Mauvaise réponse<br>";
            }
            else if(isset($check4)){
                echo "Réponse1 :".$reponse1." Mauvaise réponse<br>";
                echo "Réponse2 :".$reponse2." Mauvaise réponse<br>";
                echo "Réponse3 :".$reponse3." Mauvaise réponse<br>";
                echo "Réponse4 :".$reponse4." Bonne réponse<br>";
            }
            ?>
</body>
</html>
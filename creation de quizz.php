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
    <form method="post">
        <div classe="Question" id="Question">
            Question 1/10
        </div>
        <label for="question">Question :</label>
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
            $connexion=mysqli_connect("localhost","root","", "quiz");
            $quizzs = mysqli_query($connexion,"SELECT * FROM quizz1");
            if (array_key_exists("nom",$_POST)){
                $nom= $_POST["nom"];
                $difficulte= intval($_POST["difficulte"]);
                $date= date('20y-m-d');
                if (mysqli_query($connexion,"INSERT INTO `quizz1` (`Titre`, `difficulté`, `date_de_creation`) VALUES ('$nom','$difficulte','$date')")){
                    echo "Quiz cré!";
                }
                else{
                    echo "Mission failed! We wil get them next time.";
                }
            }
            $idLastQuestion =null;
            while ($quizz = mysqli_fetch_assoc($quizzs)) {
                $idLastQuizz = $quizz["Id"];
            }
            $questions = mysqli_query($connexion,"SELECT * FROM question WHERE idQuiz='$idLastQuizz'");
            $nombrequestion=0;
            while ($question = mysqli_fetch_assoc($questions)) {
                $nombrequestion++;
                $idLastQuestion=$question["id"];
            }
            echo "<div id='variable a passer'>".$nombrequestion."</div>";
            
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
                $choix = mysqli_query($connexion,"SELECT * FROM choix");
                if (isset($check1)){
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse1',1,'$idLastQuestion'");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse2',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse3',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse4',0,'$idLastQuestion')");
                }
                else if(isset($check2)){
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse1',0,'$idLastQuestion'");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse2',1,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse3',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse4',0,'$idLastQuestion')");
                }
                else if(isset($check3)){
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse1',0,'$idLastQuestion'");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse2',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse3',1,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse4',0,'$idLastQuestion')");
                }
                else if(isset($check4)){
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse1',0,'$idLastQuestion'");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse2',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse3',0,'$idLastQuestion')");
                    mysqli_query($connexion,"INSERT INTO `choix`(`Reponse`, `Bonne_Réponse`, `idQuestion`) VALUES ('$reponse4',1,'$idLastQuestion')");
                }
            }
            ?>
            <script>
                nombre= parseInt(document.getElementById('variable a passer').innerText)+1;
                document.getElementById('variable a passer').innerText= "";
                document.getElementById("Question").innerText = "Question "+nombre+"/10";
            </script>
    </body>
</html>
<?php
$connection= mysqli_connect ("localhost","root","", "quizz");
// Contrôle sur la connexion
if (!$connection){ //Si la connexion n'a pas été effectué
    die ("Connection impossible");
}
else {
    echo "Connexion réussie";
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Informations saisies</h1>
<?php
if (!empty($_POST)){
    $titre =$_GET["titre"];
    echo "Titre: ".$titre."<br>";
}
else{
    echo "aucune donnée";
}
?> 
</body>
</html>
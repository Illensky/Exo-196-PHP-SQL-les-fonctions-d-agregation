<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * 1. Importez le contenu du fichier user.sql dans une nouvelle base de données.
 * 2. Utilisez un des objets de connexion que nous avons fait ensemble pour vous connecter à votre base de données.
 *
 * Pour chaque résultat de requête, affichez les informations, ex:  Age minimum: 36 ans <br>   ( pour obtenir une information par ligne ).
 *
 * 3. Récupérez l'age minimum des utilisateurs.
 * 4. Récupérez l'âge maximum des utilisateurs.
 * 5. Récupérez le nombre total d'utilisateurs dans la table à l'aide de la fonction d'agrégation COUNT().
 * 6. Récupérer le nombre d'utilisateurs ayant un numéro de rue plus grand ou égal à 5.
 * 7. Récupérez la moyenne d'âge des utilisateurs.
 * 8. Récupérer la somme des numéros de maison des utilisateurs ( bien que ca n'ait pas de sens ).
 */

// TODO Votre code ici, commencez par require un des objet de connexion que nous avons fait ensemble.

/*========================================= 1 ==========================================================*/
require __DIR__ . '/Classes/Config.php';
require __DIR__ . '/Classes/DBSingleton.php';

/*========================================= 2 ==========================================================*/
$pdo = DBSingleton::PDO();

/*========================================= 3 ==========================================================*/
$stm = $pdo->prepare("
    SELECT MIN(age) FROM user
");

if($stm->execute()){
    $userMinAge = $stm->fetch();
    echo "<pre>";
    print_r($userMinAge);
    echo "</pre>";
}

/*========================================= 4 ==========================================================*/
$stm = $pdo->prepare("
    SELECT MAX(age) FROM user
");

if($stm->execute()){
    $userMaxAge = $stm->fetch();
    echo "<pre>";
    print_r($userMaxAge);
    echo "</pre>";
}

/*========================================= 5 ==========================================================*/
$stm = $pdo->prepare("
    SELECT COUNT(*) FROM user
");

if($stm->execute()){
    $totalUser = $stm->fetch();
    echo "<pre>";
    print_r($totalUser);
    echo "</pre>";
}

/*========================================= 6 ==========================================================*/
$stm = $pdo->prepare("
    SELECT AVG(age) FROM user
");

if($stm->execute()){
    $totalUserWithStreetNumberBiggerThan5 = $stm->fetch();
    echo "<pre>";
    print_r($totalUserWithStreetNumberBiggerThan5);
    echo "</pre>";
}

/*========================================= 7 ==========================================================*/
$stm = $pdo->prepare("
    SELECT AVG(age) FROM user
");

if($stm->execute()){
    $ageAverage = $stm->fetch();
    echo "<pre>";
    print_r($ageAverage);
    echo "</pre>";
}

/*========================================= 8 ==========================================================*/
$stm = $pdo->prepare("
    SELECT SUM(numero) FROM user
");

if($stm->execute()){
    $houseNumberSum = $stm->fetch();
    echo "<pre>";
    print_r($houseNumberSum);
    echo "</pre>";
}
?>
</body>
</html>


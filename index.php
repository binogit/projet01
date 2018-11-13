<html>
<header>
</header>
<body>
<fieldset>
<legend align="center">
list des users RDS
</legend>
<?php
$VALEUR_hote='binodb.cwudsllfo6pa.eu-west-3.rds.amazonaws.com';
$VALEUR_port='3306';
$VALEUR_nom_bd='bd01';
$VALEUR_user='binodb';
$VALEUR_mot_de_passe='binodb01!';
$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

$resultats=$connexion->query("SELECT * FROM utilisateur");
$resultats->setFetchMode(PDO::FETCH_OBJ);
while( $resultat = $resultats->fetch() )
{
        echo 'user : '.$resultat->nom.'<br>';
}
$resultats->closeCursor();
?>
</fieldset>
</body>
</html>

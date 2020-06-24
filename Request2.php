<?php
/**
 * Created by PhpStorm.
 * User: MOKHEBI
 * Date: 24/06/2020
 * Time: 01:14
 */


$user='root';
$pass='';

try {
$db = new PDO('mysql:host=localhost;dbname=ouiza', $user, $pass);
$requete=$db->query("SELECT * FROM `table 1` WHERE Heure NOT BETWEEN '08:00:00' AND '18:00:00' ORDER BY `table 1`.`Duree_volume_reel` DESC LIMIT 10");
$resultat=$requete->fetch();
echo $resultat;
}

catch (PDOException $e)
{
    print "Erreur :" .$e->getMessage()."<br/>";
    die;
}





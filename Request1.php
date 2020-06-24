<?php
/**
 * Created by PhpStorm.
 * User: MOKHEBI
 * Date: 23/06/2020
 * Time: 23:22
 */

$user='root';
$pass='';

try {
    $db = new PDO('mysql:host=localhost;dbname=ouiza', $user, $pass);
    $requete=$db->query("SELECT sum(Duree_volume_reel) FROM `table 1` where Date>= 15/02/2012");
    $resultat=$requete->fetch();
    echo $resultat;
}

catch (PDOException $e)
{
    print "Erreur :" .$e->getMessage()."<br/>";
    die;
}






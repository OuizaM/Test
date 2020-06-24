<?php
/**
 * Created by PhpStorm.
 * User: MOKHEBI
 * Date: 24/06/2020
 * Time: 01:17
 */


$user='root';
$pass='';

try {
    $db = new PDO('mysql:host=localhost;dbname=ouiza', $user, $pass);
    $requete=$db->query("SELECT count(*) FROM `table 1` WHERE Type='envoi de sms depuis le mobile'");
    $resultat=$requete->fetch();
    echo $resultat;
}

catch (PDOException $e)
{
    print "Erreur :" .$e->getMessage()."<br/>";
    die;
}


<?php
$bddip = 'localhost';
$bddname = 'scruffemu_game'; 
$bddname2 = 'scruffemu_login';
$bdduser = 'root'; 
$bddpass = ''; 
$bddport= '3306';
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $dB1 = new PDO('mysql:host='.$bddip.';dbname='.$bddname2, $bdduser, $bddpass, $pdo_options);  
    $dB1->exec('SET NAMES utf8');    
}
 catch(Exception $e)
       {
         die('Erreur : ' . $e->getMessage("cac"));
       }
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $dB2 = new PDO('mysql:host='.$bddip.';dbname='.$bddname, $bdduser, $bddpass, $pdo_options);  
    $dB2->exec('SET NAMES utf8');    
}
 catch(Exception $e)
       {
         die('Erreur : ' . $e->getMessage("cac"));
       }
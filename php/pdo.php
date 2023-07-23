<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=system-hyp;charset=utf8", 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Erreur : " . $e->getMessage());
}

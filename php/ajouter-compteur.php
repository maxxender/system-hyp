<?php
$ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
//htmlspecialchars($_POST[''])

if($ajax){
    include_once "pdo.php";
   $requete = $pdo->prepare("INSERT INTO compteurs(marque, index_compteur, police,numero, diametre, date_depot) VALUES(?,?, ?, ?, ?, NOW())");
    $requete->execute(array(
    htmlspecialchars($_POST['marque']),
    htmlspecialchars($_POST['index_compteur']),
    htmlspecialchars($_POST['police']),
    htmlspecialchars($_POST['numero']),
    htmlspecialchars($_POST['diametre'])
));
    echo json_encode(['compteur ajouté au stock']);
    header('Content-Type: application/json');
    http_response_code(200);
    die();
    echo json_encode(['response_done'=>"compteur ajouté"]);
}else{
    echo "NOT AJAX";
}

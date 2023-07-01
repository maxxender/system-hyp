<?php
if(empty($_POST['id_utilisateur']) OR empty($_POST['pass']) ){
    header('location:index.html');
}else{
    if($_POST['id_utilisateur'] === 'hyp123' && $_POST['pass'] === 'S1vvvE1222'){
        $_SESSION['user_connecte'] = true;
        header('home.php');
    }
}
<?php 
session_start();
    $_SESSION['page'] = "element";

if (isset($_GET)) {
    $response = "";
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $query = $connexion->prepare("SELECT * FROM countries WHERE id = '$_GET[id]'");
    $query->execute(); 
    var_dump($query); 
    var_dump($_GET); 
    
    $getCountry = $query->fetch(PDO::FETCH_ASSOC);

    $response .="".$getCountry['name'];

    echo $response;    
}
?>
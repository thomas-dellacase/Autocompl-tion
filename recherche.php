<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min (1).css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <title>Element</title>
<header>
</header>
<h2>Nom de pays:</h2>
    <form action="recherche.php" method="GET">
    <input type="text" name="search" class="CountriesName" placeholder="Entrez le nom d'un paus" id="Searchbox">
    <input type="submit" id="search" value="go">   
    </form>

<main>
   <?php
   if(isset($_GET['search'])){
       $response = "";
       $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', '');
       $sql = $connexion->prepare("SELECT * FROM countries WHERE name LIKE '$_GET[search]%'"); 
       $sql->execute();
       $getAll = $sql->fetchAll();
       for ($i=0; isset($getAll[$i]) ; $i++) { 
        $response .="<li><a href='element.php?id=".$getAll[$i]['id']."'>".$getAll[$i]['name'];
    }
   echo $response;
    }
   ?> 
</main>
<script src='script.js' type="text/javascript">
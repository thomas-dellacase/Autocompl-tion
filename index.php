<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    $_SESSION['page'] = "accueil"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <title>Autocompletion</title>
</head>
<body>
    <h2>Nom du pays:</h2>
    <form action="recherche.php" method="GET">
    
    <input type="text" name="search" class="contryName" placeholder="Entrez le nom d'un pays" id="Searchbox">

    <input type="submit" id="search" value="go">   
    </form>

    <div id="response"></div>
    <script src='script.js' type="text/javascript">
    </script>

</body>
</html>
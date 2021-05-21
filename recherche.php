<header>
<h2>Nom de pays:</h2>
    <form action="recherche.php" method="GET">
    <input type="text" name="search" class="playerName" placeholder="Entrez le nom d'un joueur" id="Searchbox1">
    <input type="submit" id="search" value="go">   
    </form>
</header>
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
<?php
    if (isset($_POST['q'])) {
        $q = $_POST['q'];
        $response = "<ul><li>Aucune correspondance</li></ul>"; 
        
        $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
        $sql = $connexion->query("SELECT * FROM countries WHERE name LIKE '$q%'"); 
        var_dump($q);    

        if ($sql->rowCount() >0) {
            $response = "<ul>"; 
            session_start();
            while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                if ($_SESSION['page'] == "accueil") {
                $response .="<li><a href='recherche.php?id=".$data['id']."'>".$data['name']."</li>";    
                }else {
                $response .="<li><a href='element.php?id=".$data['id']."'>".$data['name']."</li>";      
                }   
            }
            $response .= "</ul>"; 
        }
        echo $response;
    } 
?>

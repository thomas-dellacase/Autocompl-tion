<?php
    session_start();
    $_SESSION['page'] = "element";

    if(isset($_GET)){
        $responce = "";
        $co = new PDO ('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', '');
        $query = $co->prepare("SELECT * FROM list_name_french WHERE id = '$_GET[id]'"); 
        $query -> execute();
        var_dump($query); 
        var_dump($_GET); 

        $getdata = $query->fetch(PDO::FETCH_ASSOC);

        $reponce = $getdata['list_name_french'];
        echo $reponce;
    }
?>
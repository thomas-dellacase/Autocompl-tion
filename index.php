<!DOCTYPE html>
<html lang="fr">
<head> 
    <?php
    session_start();
    $_SESSION['page'] = "accueil";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Auto complétion</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3 class="text_center mb-3">
                    Liste des Pokemon
                </h3>
                <div class="form-group">
                    <input type="text" name="search" 
                    class="form-control form-control-lg"
                    placeholder='Select a pokemon'>
                    <input type="submit" id="search" value="go"> 
                </div>
                <div id="match-list"></div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
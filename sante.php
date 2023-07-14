
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Actualité</title>
    <link rel="stylesheet" href="actu.css">
    <script type="text/javascript">
        function deconnexion(){
            if(window.confirm("voulez-vous vous deconnecter ?")){
                window.location.href = "http://localhost/phpmyadmin/projet_arch/";
            }
            
        }
    </script>
</head>
<body>
<header>
    <p class="p">Actualités polytechniciennes</p>
</header>
<nav>
    <ul>
        <li><a href= "accueil.php">accueil</a></li>
        <li><a href="sport.php">sport</a></li>
        <li><a href = "sante.php">sante</a></li>
        <li><a href = "education.php">education</a></li>
        <li><a href = "politique.php">politique</a></li>
        <li style="float:right; margin-right: 8px">
            <button onclick="deconnexion()">
                <img src="turn-off.png" style="height:20px;">
            </button>
        </li>

    </ul>
</nav>
<h2 >les dernieres actualités</h2>
<?php
    require "service.php";
    $categorie = 2;
    $result = getArticles($categorie);
    foreach($result as $data){
        if($categorie == 0){
            echo '<div style="border: 1px double black; margin-top: 1%; border-radius : 10px;
            background-color:#FBFBFB; width: 90%; margin-left: 5%">' ;
            echo '<h3 style="text-align: left;text-transform : capitalize">'.$data['titre'].'</h3>';
            echo '<p>'.$data['contenu'].'</p>';
            echo '</div>';
        }else if($data['categorie'] == $categorie){
            echo '<div style="border: 1px double black; margin-top: 1%; border-radius : 10px;
                background-color:#FBFBFB; width: 90%; margin-left: 5%">' ;
            echo '<h3 style="text-align: left; text-transform : capitalize">'.$data['titre'].'</h3>';
            echo '<p style="margin-left: 10px">'.$data['contenu'].'</p>';
            echo '</div>';
        }
    }
?>


</body>
</html>
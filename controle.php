<?php

//connexion a la BD

function connexion(){
    try{
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES =>false,
        ];

        $db_dsn = "mysql:host=localhost;dbname=mglsi_news";
        $db_user = "root";
        $db_pass = "";

        $PDO = new pdo($db_dsn, $db_user, $db_pass, $options);
    }
    catch(Exception $e){
        die("erreur :".$e->getmessage());
    }
    return $PDO;
}

//recuperation des informations

function selectArticles($PDO){
    $sql = 'select * from article order by dateCreation DESC';
    $requete = $PDO->prepare($sql);
    $requete->execute();
    return $requete->fetchALl(PDO::FETCH_ASSOC);
}
function addUser($pdo, $nom, $prenom, $email, $password, $role){
    
    try{
        $sql = 'insert into utlisateurs values("'.$nom.'","'.$prenom.'","'.$email.'","'.$password.'","'.$role.'")';
        $requete = $pdo->prepare($sql);
        $requete->execute();
        header("location:accueilAdmin.php");
    }catch(Exception $e){
        die("erreur echec d'ajout");
    }
}
function getIdentifiant($pdo, $email){
    $sql = 'select * from identifiant where email= :email';
    $requete = $pdo->prepare($sql);
    $requete->bindParam(":email", $email);
    $requete->execute();
    return $requete->fetchALl(PDO::FETCH_ASSOC);
}
function addArticle($pdo, $contenu, $titre, $categorie){

    $date = date('Y-m-d H:i');

    $sql = 'insert into article values("'.''.'","'.$titre.'","'.$contenu.'","'.$date.'","'.$date.'","'.$categorie.'")';
    $requete = $pdo->prepare($sql);
    $requete->execute();
}
function deleteArticle($pdo, $id){
    $sql = 'delete from article where id = :id';
    $requete = $pdo->prepare($sql);
    $requete->bindParam(":id", $id);
    $requete->execute();

}
function getUilisateurs($pdo){
    $sql = 'select * from utlisateurs';
    $requete = $pdo->prepare($sql);
    $requete->execute();
    return $requete->fetchALl(PDO::FETCH_ASSOC);
}
function deleteUser($pdo, $id){

    $sql = 'delete from utlisateurs where email = :login';
    $requete = $pdo->prepare($sql);
    $requete->bindParam(":login", $id);
    $requete->execute();
}
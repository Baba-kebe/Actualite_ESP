<?php
require "controle.php";

$pdo = connexion();


if((isset($_POST['email']) && (isset($_POST['role']) ) && (isset($_POST['password']) ) )){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    addUser($pdo, $nom, $prenom, $email, $password, $role);
    
    }


else if((isset($_POST['login']) && (isset($_POST['password']) ) )){
    $email = $_POST['login'];
    $password = $_POST['password'];    
    $result = getIdentifiant($pdo, $email);
    foreach($result as $data){
        if($data['password'] == $password){
        if($data['role'] == 'administrateur'){
            header("location:accueilAdmin.php");
       }else if($data['role'] == 'editeur'){
            header("location:accueilEdit.php");
        }else if($data['role'] == 'visiteur'){
            echo 'visiteur';
            header("location:accueil.php");
            }
    }    }
}


else if( isset($_POST['contenu']) && isset($_POST['titre'])){
    $contenu = $_POST['contenu'];
    $titre   = $_POST['titre'];
    $categorie = $_POST['categorie'];

    addArticle($pdo, $contenu, $titre, $categorie);
    header("location:editer.php");
}

else if(isset($_POST['id'])){
    $id = $_POST['id'];

    deleteArticle($pdo, $id);
    header("location:listeArticle.php");
}
Function getArticles($categorie){
    $pdo = connexion();
    $result = selectArticles($pdo);
    return $result;
}
Function getUsers(){
    $pdo = connexion();
    $result = getUilisateurs($pdo);
    return $result;
}
if(isset($_POST['email'])){
    $id = $_POST['email'];
    deleteUser($pdo, $id);
    
}
$pdo = null;
<?php
session_start();
$nom=$_POST['nom'];
$description=$_POST['description'];
$createur=$_SESSION['id'];
$date_creation=date("Y-m-d");
include"../../inc/fonction.php";
$res=ajoutcat($nom,$description,$createur,$date_creation);
if($res){
    header('location:liste.php?ajout=ok');
}
?>
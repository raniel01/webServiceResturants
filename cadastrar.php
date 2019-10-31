<?php
include('conn.php');
$menu = $_GET['menu'];
$restaurants = $_GET['restaurants'];
$localization = $_GET['localization'];
$categories = $_GET['categories'];

if($restaurants!= ""){
    $query = "insert into tb_restaurants values (null, '$menu', '$restaurants', '$localization',' $categories')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
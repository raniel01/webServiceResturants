<?php
include('conn.php');

$restaurants = $_POST['restaurants'];
$localization = $_POST['localization'];
$categories = $_POST['categories'];

if($restaurants!= ""){
    $query = "insert into tb_restaurants values (null, '$restaurants', '$localization',' $categories')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
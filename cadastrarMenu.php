<?php
include('conn.php');
$restaurants = $_POST['restaurants']
$items = $_POST['items'];
$prices = $_POST['prices'];

if($items!= ""){
    $query = "insert into tb_menu values (null, '$restaurants','$items', '$prices')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
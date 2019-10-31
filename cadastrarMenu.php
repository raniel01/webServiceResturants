<?php
include('conn.php');
$items = $_GET['items'];
$prices = $_GET['prices'];

if($items!= ""){
    $query = "insert into tb_menu values (null, '$items', '$prices')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
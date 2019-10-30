  
<?php
include('conn.php');
$menu = $_POST['menu'];
$restaurants = $_POST['restaurants'];
$localization = $_POST['localization'];
$categories = $_POST['categories'];

if($email != ""){
    $query = "insert into tb_usuario values (null, '$menu', '$restaurants', '$localization',' $categories')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
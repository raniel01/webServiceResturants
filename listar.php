<?php
include('conn.php');
$codigo = $_GET['codigo'];
$query = "SELECT * FROM tb_restaurants where code = $codigo";
$result = mysqli_query($conecta,$query);
while($linha = mysqli_fetch_assoc($result)){
    $registros = array(
        'cadastros' => array(
        'codigo'=>$linha['code'],
        'menu'=>$linha['menu'],
        'restaurants'=>$linha['restaurants'],
        'localization'=>$linha['localization'],
        'categories'=>$linha['categories']
        )
    );
}
echo json_encode($registros);
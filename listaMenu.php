<?php
include('conn.php');
$codigo = $_GET['codigo'];
$query = "SELECT * FROM tb_menu where code = $codigo";
$result = mysqli_query($conecta,$query);
while($linha = mysqli_fetch_assoc($result)){
    $registros = array(
        'cadastros' => array(
        'items'=>$linha['items'],
        'prices'=>$linha['prices']
        )
    );
}
echo json_encode($registros);
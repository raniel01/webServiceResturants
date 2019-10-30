<?php
$conecta = mysqli_connect("localhost","id11358966_crudrestaurante", "crudrestaurante", "id11358966_crudrestaurante");
                            //local           usuario                     senha          banco
//Codificação de caracteres em UTF-8
$conecta->query("SET NAMES 'utf8'");
$conecta->query('SET character_set_connection=utf8');
$conecta->query('SET character_set_client=utf8');
$conecta->query('SET character_set_results=utf8');
// -- Codificação de caracteres em UTF-8
<?php 
//fazendo update dos dados 

include 'conexao.php'; // conexao do banco dados 


$idupadate = $_GET["id"];

$nome = $_POST["nome"];
$validade = $_POST["validade"];
$data_rec = $_POST["data_rec"];
$qtd_estoque = $_POST["qtd_estoque"];
$qtd_min_estoque = $_POST["qtd_min_estoque"];
$preco_uni = $_POST["preco_uni"];


mysqli_query($link, "update TB_Produto set nome='$nome', validade='$validade', data_rec='$data_rec', qtd_estoque='$qtd_estoque', qtd_min_estoque='$qtd_min_estoque', preco_uni='$preco_uni' where id_Produto=$idupadate");
echo "Alterado com sucesso";


?>
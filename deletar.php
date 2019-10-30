<?php 

include 'conexao.php';


$idDeletar = $_GET['id'];


mysqli_query($link,"delete from TB_Produto where id_Produto = $idDeletar");
echo "excluido com sucesso";


?>
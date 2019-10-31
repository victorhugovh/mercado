<?php 
// criando o comando para deletar o produto

// cenexao do banco 

include 'conexao.php';

// pegando o ID do produto que sera deletado 

$idDeletar = $_GET['id'];


mysqli_query($link,"delete from TB_Produto where id_Produto = $idDeletar");
echo "excluido com sucesso";
echo"<br/>";
echo "<button><a href='mostraProdutos.php' style='text-decoration:none'>Voltar</a></button>";

?>
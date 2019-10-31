<?php 

// conexao do banco 

include 'conexao.php';

//criando variaveis 

$nome = $_POST['nome'];
$validade = $_POST['validade'];
$data_rec = $_POST['data_rec'];
$qtd_estoque = $_POST['qtd_estoque'];
$qtd_min_estoque = $_POST['qtd_min_estoque'];
$preco_uni = $_POST['preco_uni'];

//comando de inserçao ao banco de dados 

mysqli_query($link,"insert into TB_Produto (nome, validade, data_rec, qtd_estoque, qtd_min_estoque, preco_uni) values ('$nome','$validade','$data_rec','$qtd_estoque','$qtd_min_estoque','$preco_uni')");  
// echo "inserido com sucesso";


//Indo para a pagina que mostra os produtos 

header("Location: ./mostraProdutos.php");

?>



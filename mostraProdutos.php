<?php 
// criando tela para mostrar os produtos 

// conexao do banco 

include 'conexao.php';

//selecionado a tabela que ira msotarr 

$sql = mysqli_query($link,"select * from TB_Produto");


echo "<table>";

while ($linha = mysqli_fetch_assoc($sql)) {
$pegaid = $linha['id_Produto'];

echo "<tr>";
echo "<td>" . $linha['id_Produto'] . " &nbsp;"." -</td>";                                   //ID  
echo "<td>" . $linha['nome'] . " &nbsp;"." -</td>";                                         // nome 
echo "<td>" . $linha['validade'] . " &nbsp;"." - </td>";                                    // validade
echo "<td>" . $linha['data_rec'] ." &nbsp;". " - </td>";                                    //data de recebimento
echo "<td>" . $linha['qtd_estoque'] ." &nbsp;". " - </td>";                                 //quantidade no estoque 
echo "<td>" . $linha['qtd_min_estoque'] ." &nbsp;"." - </td>";                              //quantidade minina em estoque
echo "<td>" . $linha['preco_uni'] ." &nbsp;"." </td>";                                      //preco por unidade
echo "<td><a href='deletar.php?id=$pegaid' style='text-decoration:none'>Excluir</a><td>";   // botao de excluir 
echo "<td><a href='alterar.php?id=$pegaid' style='text-decoration:none'>Alterar</a><td>";   // botao de alterar
echo "</tr>";
};

echo "</table>";

//botao de venda
echo "<button><a href='indexVendas.php' style='text-decoration:none'>Vender</a></button>";

// botao para cadastrar produto
echo "<button><a href='index.html' style='text-decoration:none'>Cadastrar</a></button>";

?>


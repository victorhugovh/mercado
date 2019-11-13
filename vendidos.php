<?php 

include 'conexao.php';

// $fk_produto = $_GET['id_produto'];

$sql = mysqli_query($link,"select * from TB_Vendidos");

echo "<table>";

while ($linha = mysqli_fetch_assoc($sql)) {
$pegaid = $linha['id_Produto'];

echo "<tr>";
echo "<td>" . $linha['id_vendidos'] . " &nbsp;"." -</td>";
echo "<td>" . $linha['nome'] . " &nbsp;"." -</td>";
echo "<td>" . $linha['valor'] . " &nbsp;"." - </td>";
echo "<td>" . $linha['quantidade'] ." &nbsp;". " - </td>";
echo "<td>" . $linha['data_time'] ." &nbsp;". " - </td>";
// echo "<td><a href='deletar.php?id=$pegaid'>Excluir</a><td>"; // botao de excluir 
// echo "<td><a href='alterar.php?id=$pegaid'>Alterar</a><td>"; // botao de alterar
echo "</tr>";
};

echo "</table>";
echo $linha['nome'];
// botao para inserir produto
echo "<button><a href='index.html' style='text-decoration:none'>Inserir</a></button>";









?>
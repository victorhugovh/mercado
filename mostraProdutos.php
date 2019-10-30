<?php 

include 'conexao.php';


$sql = mysqli_query($link,"select * from TB_Produto");


echo "<table>";

while ($linha = mysqli_fetch_assoc($sql)) {
$pegaid = $linha['id_Produto'];

echo "<tr>";
echo "<td>" . $linha['id_Produto'] . " &nbsp;"." -</td>";
echo "<td>" . $linha['nome'] . " &nbsp;"." -</td>";
echo "<td>" . $linha['validade'] . " &nbsp;"." - </td>";
echo "<td>" . $linha['data_rec'] ." &nbsp;". " - </td>";
echo "<td>" . $linha['qtd_estoque'] ." &nbsp;". " - </td>";
echo "<td>" . $linha['qtd_min_estoque'] ." &nbsp;"." - </td>";
echo "<td>" . $linha['preco_uni'] ." &nbsp;"." </td>";
echo "<td><a href='deletar.php?id=$pegaid'>Excluir<a/><td>";
echo "<td><a href='alterar.php?id=$pegaid'>Alterar<a/><td>";
echo "</tr>";
}

echo "</table>";



?>
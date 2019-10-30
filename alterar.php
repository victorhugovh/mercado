<?php 

include 'conexao.php';

$idAlterar = $_GET['id'];

$sql = mysqli_query($link,"select * from TB_Produto where id_Produto = $idAlterar"); 

$linha = mysqli_fetch_array($sql);

echo "<div>";
echo "<form action='update.php?id=$linha[0]' method='post'>"; 
echo "<label>nome:</label>";
echo "<input type='text' name='nome' required value='$linha[1]' />";
echo "<label>validade:</label>";
echo "<input type='text' name='validade' required value='$linha[2]'/>";
echo "<label>data_rec:</label>";
echo "<input type='text' name='data_rec' required value='$linha[3]'/>";
echo "<label>qdt_estoque:</label>";
echo "<input type='text' name='qtd_estoque' required value ='$linha[4]'/>";
echo "<label>qdt_min_estoque:</label>";
echo "<input type='text' name='qtd_min_estoque' required value ='$linha[5]'/>";
echo "<label>preco_uni:</label>";
echo "<input type='text' name='preco_uni' required value ='$linha[6]'/>";
echo "<label type='submit' value='alterar'>";
echo"<input type=submit name=btnEnviar value=Corrigir>";
echo "</form>";
echo "</div>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- formulario de prencimento -->

     <form action="indexVendas.php" method="POST">
        
    <label class="col md-4 control-label" for="selectbasic">Produto</label>
    
        <select name="selectProdutos" id="listaProdutos"class="form-control">
        <?php 
           
           include 'conexao.php';

                echo "<link rels='stylesheet' href='./estilocss'>";
                $sql = "select * from TB_Produto";

                $linha = mysqli_query($link,$sql);
            
                while ($produto = mysqli_fetch_array($linha)){
                    echo "<option value= '$produto[0]'>" .$produto[1]."<?option>";

                }
            ?>
        </select>

    <!-- criando o select  -->

        <br>
            <label class="col md-4 control-label" for="selectbasic">Quantidade</label>
            <br>
        <input type="number"  name="Quantidade">
        <input type="submit">
    </form>

<?php 

include 'conexao.php';

    $idProduto ="";
    $Quantidade = "";            
    $valTotal = 0;

    if(isset($_POST['selectProdutos']) && isset($_POST['Quantidade'])){
        $idProduto = $_POST['selectProdutos'];
        $Quantidade = $_POST['Quantidade'];

        //busca o produto e a suas informaçoes
        $sqlProduto = "select * from TB_Produto where id_Produto=$idProduto";
        $tabProduto = mysqli_query($link, $sqlProduto);
        $linhaProduto = mysqli_fetch_array($tabProduto);

        //busca a ultima linha da tabela "TB_vendas"
        $lastline = "select * from TB_Vendas order by id_vendas desc";
        $tabVenda = mysqli_query($link,$lastline);
        $linhaVenda = mysqli_fetch_array($tabVenda);

        //insercao de produto na tabela "TB_Vendidos"
        $inserirItem = "insert into TB_Vendidos (nome,valor,quantidade,data_time,fk_vendas,fk_produto) values ($linhaProduto[1],$linhaProduto[6],$Quantidade,Now(),$idProduto, $linhaVenda[0])";
        $tabVendidos = mysqli_query($link,$inserirItem);

        //select na "TB_Vendidos" 
        $sql = "select * from TB_Vendidos where fk_vendas = $linhaVenda[0]";
        $tabela = mysqli_query($link,$sql);

        echo "<table class='table table-dark'>";
        
        echo "<thead>";
            echo "<td scope='col'>Produto:</td>";
            echo "<td scope='col'>Quantidade:</td>";
            echo "<td scope='col'>Preço:</td>";
            echo "<td scope='col'>Total:</td>";
        echo "</thead>";
            
            //Lopping para montar tabela
            while ($linha = mysqli_fetch_array($tabela)) {
            
                //BUSCA O PRODUTO E SUAS INFO
                $sqlProduto = "select * from TB_Produto where id_Produto = $linha[0]";
                $tabProduto = mysqli_query($link, $sqlProduto);
                $linhaProduto = mysqli_fetch_array($tabProduto);
                echo "<tr>";
                    echo "<td>".$linhaProduto[1]."</td>"; //Produto
                    echo "<td>".$linha[2]."</td>"; //QUANTIDADE
                    echo "<td>".$linha[6]."</td>"; //PREÇO
                    echo "<td>".$linha[1] * $linha[2]."</td>"; //PREÇO TOTAL
                echo "</tr>";
                
                // $valTotal = $valTotal + $linha[1] * $linha[2];
            }
            $attVenda = "update TB_Vendas set valor_total='$valTotal' where id_vendas= $linhaVenda[0]";
            $queryAtt = mysqli_query($link, $attVenda);

    }
?>

<button><a href='mostraProdutos.php' style='text-decoration:none'>Voltar</a></button>

</body>
</html>
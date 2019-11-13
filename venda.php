<?php 
    include 'conexao.php';

    //cria uma venda na tebela venda
    $sql = "inset into TB_Vendas (valor_total, data_Venda) values (0,Now())";
    mysqli_query($link,$sql);

    //busca a ultima linha da tabela "TB_Vendas"
    $lastine = "select * from TB_Vendas order by id_vendas desc";
    $linha = mysqli_query($link,$lastine);

    //criaçao de uma array com a linha 
    $venda = mysqli_fetch_array($linha);

    //traz o id da venda 
    $venda['id_vendas'];

    header("location: indexVendas.php");
?>

<?php 
    include 'conexao.php';

    //cria uma venda na tebela TB_Vendas
    $sql = "inset into TB_Vendas (data_Venda,valor_total) values (Now(),0)";
    mysqli_query($link,$sql);

    //busca a ultima linha da tabela "TB_Vendas"
    $lastine = "select * from TB_Vendas order by id_vendas desc";
    $linha = mysqli_query($link,$lastine);

    //criaçao de uma array com a linha 
    $venda = mysqli_fetch_array($linha);

    //traz o id da venda 
    $venda['id_vendas'];

    header("location: Vendas.php?tab=3");
?>

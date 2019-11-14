<?php 
        include 'conexao.php';

        //CRIA UMA VENDA NA TABELA VENDA
        $sql = "insert into tb_vendas (valor_total, data_vend) values (0, NOW())";
        mysqli_query($link, $sql);

        // BUSCA A ULTIMA LINHA DA TABELA "TB_VENDAS"
        $lastLine = "select * from tb_vendas order by id_venda desc";
        $linha = mysqli_query($link, $lastLine);

        //CRIAÇÃO DE UMA ARRAY COM A LINHA
        $venda = mysqli_fetch_array($linha);

        //TRAZ O ID DA VENDA 
        $venda['id_venda'];
        
        header("Location: vendas.php");
?>
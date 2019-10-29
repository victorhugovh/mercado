<?php 
//criando conexao com o banco mercadinhoze

$servidor = '127.0.0.1:3306';
$usuario = 'root';
$senha = '';
$banco = 'mercadinhoze';

$link = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$link){
    echo "erro ao conectar"; exit();
}


?>
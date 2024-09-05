<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $venda = $_POST['disponivel'];
        
        $sqlInsert = "UPDATE tb_cadastro 
        SET id='$id', produto='$produto', valor='$valor', descricao='$descricao', disponivel='$venda'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: index.php');

?>
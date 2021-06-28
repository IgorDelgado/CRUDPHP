<?php
    include_once("conexao.php");

    if (isset($_POST['pf'])){
        $tipo = "pf";
    }else if (isset($_POST['pj'])){
        $tipo = "pj";
    }

    $nome_razao = $_POST['nome_razao'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];
    $telefone = $_POST['fone'];
    $celular = $_POST['celular'];
    $rg_ie = $_POST['rg_ie'];
    $sexo = $_POST['sexo'];

    $sql = "insert into wcclientes (nome_razao, cpf_cnpj, email, nasc, telefone, celular, sexo, rg_ie, tipo, ativo) values ('$nome_razao', '$cpf_cnpj', '$email', '$nasc', '$telefone', '$celular', '$sexo', '$rg_ie', '$tipo', '1')";
    $salvar = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header('Location: index.php');
?>
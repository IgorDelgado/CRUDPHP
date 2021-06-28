<?php
    include_once("conexao.php"); 

    $nome_razao = $_POST['nome_razao'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];
    $telefone = $_POST['fone'];
    $celular = $_POST['celular'];
    $rg_ie = $_POST['rg_ie'];
    $sexo = $_POST['sexo'];
    $cod = $_POST['cod'];

    $sql = "update wcclientes set nome_razao = '$nome_razao', cpf_cnpj = '$cpf_cnpj', email = '$email', nasc = '$nasc', telefone = '$telefone', celular = '$celular', sexo = '$sexo', rg_ie = '$rg_ie' where cod = '$cod'";   
    // echo $sql;
    $salvar = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header('Location: listar_clientes.php');

?>
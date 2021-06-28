<?php
    include_once("conexao.php");

    $cod = $_GET['cod'];

    $sql = "delete from wcclientes where cod = '$cod'";
    // echo $sql;
    $salvar = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header('Location: index.php');
?>
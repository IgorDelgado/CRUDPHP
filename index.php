<?php 
    include_once("conexao.php");
    $resultado = "select * from wcclientes";
    $resultado_busca = mysqli_query($conexao, $resultado);
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-08">
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    </head>
    <body id="main"> 
        <div class="docker"></div>
        <!-- <img class="bgmain" src="img/fundo.jpeg"> -->
        <img class="bgmain" src="img/fundo2.jpg">

         <!-- OPÇÃO CLIENTE -->
         <div class="ico-cliente">
            <img class="cliente" src="img/cadastro.png" onclick="open_modal('cliente-modal')">
            <span class="clientesp"><b>Clientes</b></span>
        </div>

        <!-- OPÇÃO PRODUTO -->
        <div class="ico-produto">
            <img class="produto" src="img/cadastro.png" onclick="open_modal('produto-modal')">
            <span class="produtosp"><b>Cliente</b></span>
        </div>
        
        <div id="cliente-modal">
            <div class="window-cliente">                   
                <span class="xcliente" onclick="close_modal('cliente-modal')"><img src="https://img.icons8.com/carbon-copy/48/000000/close-window.png"/></span> 
                <label style="font-size: 1.5rem;padding: 12px;position: absolute;font-weight: 700;">Cadastro de Clientes (PF ou PJ)</label>
                <div class="body-cliente">
                    <form method="post" action="clientes.php">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Nome/Razão*</label>
                            <input name="nome_razao" id="cliNome" type="text" required>
                        </div>
                        <div class="col-lg-5">
                            <label>CPF/CNPJ*</label>
                            <input name="cpf_cnpj" id="cliCPF" type="text" required>
                        </div>  
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-4">
                            <label>RG/Inscrição Estadual*</label>
                            <input name="rg_ie" id="cliRG" type="text" required>
                        </div> 
                        <div class="col-md-3">
                            <label>Telefone</label>
                            <input name="fone" id="cliFone" type="text">
                        </div>
                        <div class="col-md-4">
                            <label>Celular*</label>
                            <input name="celular" id="cliCelular" type="text" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-3">
                            <label>Sexo</label>
                            <input name="sexo" id="cliSexo" type="text">
                        </div>              
                        <div class="col-lg-5">
                            <label>Email</label>
                            <input name="email" id="cliEmail" type="text">
                        </div>
                        <div class="col-lg-3">
                            <label>Dt Nascimento/Dt Fundação</label>
                            <input name="nasc" id="cliNasc" type="date">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-3">
                            <label>Tipo Cliente (PF ou PJ)*</label><br>
                            <input type="checkbox" name="pf" value="on">Pessoa Física<br>
                            <input type="checkbox" name="pj" value="on">Pessoa Jurídica
                        </div>
                    </div>
                    <input class="salvarCli" type="submit" value="Cadastrar">
                    <input class="limparCli" type="reset" value="Cancelar" onclick="close_modal('cliente-modal')">
                    <label style="position: absolute;bottom: 70px;left: 460px;">* Campos obrigatórios</label>
                    </form> 
                </div>
            </div>
        </div>
        <!-- FIM DA OPÇÃO CLIENTE -->
        <div id="produto-modal">
            <div class="window-produto">                   
                <span class="xproduto" onclick="close_modal('produto-modal')"><img src="https://img.icons8.com/carbon-copy/48/000000/close-window.png"/></span> 
                <label style="font-size: 1.5rem;padding: 12px;position: absolute;font-weight: 700;">Cadastro de Clientes (PF ou PJ)</label>
                <div class="body-produto">
                    <form method="post" action="cliente.php">
                    <div class="row">

                    <div class="col-md-2">
                            <label>ID*</label>
                            <input name="fone" id="cliFone" type="text" require>
                        </div>


                        <div class="col-md-12">
                            <label>Descrição*</label>
                            <input name="nome_razao" id="cliNome" type="text" required>
                        </div>
                        <div class="col-md-3">
                            <label>Marca</label>
                            <input name="cpf_cnpj" id="cliCPF" type="text" >
                        </div>  
                    
                   
                        <div class="col-md-5">
                            <label>Fornecedor</label>
                            <input name="fone" id="cliFone" type="text">
                        </div>
                          </div>
                    
                       <div class="col-md-3">
                            <label>Estoque</label>
                            <input name="sexo" id="cliSexo" type="text">
                                     
                       
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-3">
                            <label>ATIVO</label><br>
                            <input type="checkbox" name="pf" value="on">ATIVO<br>
                            
                        </div>
                    </div>
                    <input class="salvarCli" type="submit" value="Cadastrar">
                    <input class="limparCli" type="reset" value="Cancelar" onclick="close_modal('cliente-modal')">
                    <label style="position: absolute;bottom: 70px;left: 460px;">* Campos obrigatórios</label>
                    </form> 
                </div>
            </div>
        </div>
        <!-- FIM DA OPÇÃO PRODUTO -->

        <!-- OPÇÃO LISTAR CLIENTE -->
        <div class="ico-listarcliente">
            <img class="listarcliente" src="img/cliente.png" onclick="JavaScript:location.href='listar_clientes.php'">
            <span class="listarclientesp"><b>Listar Clientes</b></span>
        </div>
        <!-- FIM DA OPÇÃO CLIENTE -->

        <!-- OPÇÃO LIXEIRA -->
        <div class="ico-lixeira">
            <img class="lixeira" src="img/lixeira.png" onclick="open_modal('lixeira-modal')">
            <span class="lixeirasp"><b>Lixeira</b></span>
        </div>
        <div id="lixeira-modal">
            <div class="window-lixeira">                   
                <span class="xlixeira" onclick="close_modal('lixeira-modal')"><img src="https://img.icons8.com/carbon-copy/48/000000/close-window.png"/></span> 
                <label style="font-size: 1.5rem;padding: 12px;position: absolute;font-weight: 700;">Lixeira</label>
                <div class="body-lixeira">
                    <div class="listar-reciclados">
                        <div class="container-reciclados"><hr>
                        <?php while($row_busca = mysqli_fetch_assoc($resultado_busca)){?>
                            <?php if($row_busca['ativo'] == 0){ ?>    
                                <b><p>Código: <?php echo $row_busca['cod']?>&ensp;||&ensp;Nome/Razão: <?php echo $row_busca['nome_razao']?>&ensp;||&ensp;Email: <?php echo $row_busca['email']?></b><input type="image" class="btnRestaurar" src="img/restaurar.png" onclick="JavaScript:location.href='restaurar_cliente.php?cod='+<?php echo $row_busca['cod'];?>"><input type="image" class="btnDeletar" src="img/excluir.png" onclick="JavaScript:location.href='deletar_cliente.php?cod='+<?php echo $row_busca['cod'];?>"></p><hr>
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS JAVASCRIPT -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="js/jquery.maskedinput-1.3.min"></script>
        <script src="js/script.js"></script>
    </body>
</html>
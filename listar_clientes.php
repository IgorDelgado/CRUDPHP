<?php 
    include_once("conexao.php");
    $resultado = "select * from wcclientes";
    $resultado_busca = mysqli_query($conexao, $resultado);
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-08">
        <title>Listar Clientes</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    </head>
    <body id="main"> 
        <div class="docker">
            <img class="btnVoltar" src="img/voltar.png" onclick="JavaScript:location.href='index.php'">
        </div>
        <!-- <img class="bgmain" src="img/fundo.jpeg"> -->
        <img class="bgmain" src="img/fundo2.jpg">

            <div class="filtros">
                <img class="wclogo" src="img/wclogo.png">
                <!-- <div class="row linha">
                    <div class="col-lg-6">
                        <label style="color: #fff;">Nome/Razão*</label>
                        <input name="nome_razao" id="pesquisa" type="text">
                    </div>
                    <input type="button" value="Pesquisar" id="pesq">
                </div> -->
            </div>

        <div class="listar-clientes">
            <div class="container-clientes">
            <hr>
                <?php while($row_busca = mysqli_fetch_assoc($resultado_busca)){?>
                    <?php if($row_busca['ativo'] == 1){ ?>    
                        <b><p>Código: <?php echo $row_busca['cod']?>&ensp;||&ensp;Nome/Razão: <?php echo $row_busca['nome_razao']?>&ensp;||&ensp;Email: <?php echo $row_busca['email']?></b><span class="btnAtualizarClientes" onclick="open_modal('editar-cliente<?php echo $row_busca['cod']?>');"><img src="img/atualizar.png"></span></p><hr>
                    <?php } ?>
                    <div id="editar-cliente<?php echo $row_busca['cod']?>" style="background: rgba(0, 0, 0, 0.5); height: 100%; width: 100%; position: fixed; z-index: 2; top: -100%; display: block; transition: 350ms;">
                        <div style="width: 70%; height: 80%; background: #fff; border: 1px solid #000; border-radius: 5px; margin: 80px auto 0 auto; text-align: left;">
                            <span class="xmodal-cliente" onclick="close_modal('editar-cliente<?php echo $row_busca['cod']?>')"><img src="https://img.icons8.com/carbon-copy/48/000000/close-window.png"/></span>  
                            <label style="font-size: 1.5rem;padding: 12px;position: absolute;font-weight: 700;left: 18%;">Atualizar Clientes</label>
                                <div class="body-modalcliente">
                                    <form method="post" action="editar_clientes.php">
                                    <div class="row codCli">
                                        <div class="col-lg-2">
                                            <label>Código</label>
                                            <input name="cod" id="cliCod" type="text" value=<?php echo $row_busca['cod']?>>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Nome/Razão*</label>
                                            <input name="nome_razao" id="cliNome" type="text" required value=<?php echo trim($row_busca['nome_razao'])?>>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>CPF/CNPJ*</label>
                                            <input name="cpf_cnpj" id="cliCPF" type="text" value=<?php echo trim($row_busca['cpf_cnpj'])?>>
                                        </div>  
                                    </div>
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-lg-4">
                                            <label>RG/Inscrição Estadual*</label>
                                            <input name="rg_ie" id="cliRG" type="text" required value=<?php echo trim($row_busca['rg_ie'])?>>
                                        </div> 
                                        <div class="col-md-3">
                                            <label>Telefone</label>
                                            <input name="fone" id="cliFone" type="text" value=<?php echo trim($row_busca['telefone'])?>>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Celular*</label>
                                            <input name="celular" id="cliCelular" type="text" required value=<?php echo trim($row_busca['celular'])?>>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-md-3">
                                            <label>Sexo</label>
                                            <input name="sexo" id="cliSexo" type="text" value=<?php echo trim($row_busca['sexo'])?>>
                                        </div>              
                                        <div class="col-lg-5">
                                            <label>Email</label>
                                            <input name="email" id="cliEmail" type="text" value=<?php echo trim($row_busca['email'])?>>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Dt Nascimento/Dt Fundação</label>
                                            <input name="nasc" id="cliNasc" type="date" value=<?php echo trim($row_busca['nasc'])?>>
                                        </div>
                                    </div>
                                    <span class="reciclar" id="reciclar" onclick="JavaScript:location.href='reciclar_clientes.php?cod='+<?php echo $row_busca['cod'];?>"><img src="img/excluir.png"></span>
                                    <input class="salvarCli" type="submit" value="Atualizar">
                                    <input class="limparCli" type="reset" value="Cancelar" onclick="close_modal('editar-cliente<?php echo $row_busca['cod']?>')">
                                    <label style="position: absolute;bottom: 70px;left: 460px;">* Campos obrigatórios</label>   
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php } ?> 

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


            </div>
        </div>

        <div id="deletar-cliente<?php echo $row_busca['cod']?>" style="background: rgba(0, 0, 0, 0.5); height: 100%; width: 100%; position: fixed; z-index: 2; top: -100%; display: block; transition: 350ms;">
            <div style="width: 70%; height: 80%; background: #fff; border: 1px solid #000; border-radius: 5px; margin: 80px auto 0 auto; text-align: left;">
            
            </div>
        </div>
        <!-- SCRIPTS JAVASCRIPT -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="js/jquery.maskedinput-1.3.min"></script>
        <script src="js/script.js"></script>
    </body>
</html>
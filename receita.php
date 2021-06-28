                                <form method="post" action="receita.php">
                                    <div class="row codCli">
                                        <div class="col-lg-2">
                                            <label>Código</label>
                                            <input name="cod" id="cliCod" type="text" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Nome/Razão*</label>
                                            <input name="nome_razao" id="cliNome" type="text" required >
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Valor Pago*</label>
                                            <input name="cpf_cnpj" id="cliCPF" type="text" >
                                        </div>  
                                    
                                    <input class="salvarCli" type="submit" value="Atualizar">
                                    <input class="limparCli" type="reset" value="Cancelar">
                                    <label style="position: absolute;bottom: 70px;left: 460px;">* Campos obrigatórios</label>   
                                    </form>


                                    
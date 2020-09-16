<?php include("header.php"); ?>


<div class="modal" id="loading" style="display:block" id="modal-default">
<br><br><br>
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background: #e6f1f7;">
        <h4 class="modal-title"><img src="assets/img/favicon.png" width="40">&nbsp;<strong>Carregando</strong> <img width="100" src="assets/img/carregando.gif" alt="Carregando..." /></h4>
        </div>
        <div class="modal-body">
        <P class="loading-text">Aguarde enquanto carregamos os dados.</P> 
        </div>
    </div>
    </div>
  </div>


  <!-- modal preenchimento dados iniciais -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background: #e6f1f7;">
        <h4 class="modal-title"><img src="assets/img/favicon.png" width="40">&nbsp;<strong>Por que preencher esses dados?</strong></h4>
        </div>
        <div class="modal-body">
        <P><strong>Dados de contato:</strong> Com os seus dados, podemos entrar em contato, entender melhor a sua necessidade e lhe oferecer o plano mais adequado.</P> 
        <p><strong>CEP:</strong> A disponibilidade e as condições do plano variam conforme o local em que você reside.</p>
        <p><strong>Profissão:</strong> Oferecemos planos para categorias profissionais por meio das entidades de classe que os representam.</p>
        </div>
        <div class="modal-footer" style="background: #e6f1f7;">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        </div>
    </div>
    </div>
  </div>
  <!-- modal preenchimento dados iniciais fim --> 

  <!-- ======= Hero Section ======= -->
  <div style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
  
    <div class="container-fluid">

      <div class="container" >
        <div class="row" >
          <div class="corpo_resumo" style="background: unset; width: auto;" >
            <form id="frmFichaTit" >
            <div class="container-fluid" >
              <br><br><br><br><br><br>

              <div class="col-md-12 hideonmobile" style="padding: 20px;"></div>
        <div class="col-md-6 pull-left hideonmobile">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>

        <div class="col-md-6 pull-right">
                <p class="texto11"><strong>Dados da Proposta</strong></p>  <br>
                <p class="texto11"><strong>Dados do Titular</strong></p>
                <p class="texto1"><strong><span class="nomeTit"></span></strong>, agora é necessário incluir todos os dados nesta etapa.</p>
                          
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nomeTit" placeholder="Entre com seu nome" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="emailTit" placeholder="Informe um e-mail válido" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="data">Data de Nascimento</label>
                    <input required type="date" readonly class="form-control" id="dataNascTit" placeholder="Data Nascimento">
                    </div>
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label for="cep">CEP</label>
                    <input type="text" maxlength="8" readonly class="form-control" id="cepTit" readonly placeholder="CEP (Apenas números)">
                    </div>
                    <div class="form-group col-md-7">
                    <label for="ufTit">UF</label>
                    <select id="ufTit" class="form-control" readonly>
                        <option selected>Escolha</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="end">Endereço</label>
                    <input type="text" class="form-control" id="endTit" placeholder="Endereço completo" required>
                    </div>
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="num">Número</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="numTit" placeholder="Número">
                    </div>
                    <div class="form-group col-md-9">
                    <label for="comp">Complemento/Ponto de Referência</label>
                    <input type="text" class="form-control" id="compTit" placeholder="Sala, Bloco, Andar, Casas, etc..." required>
                    </div>
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" maxlength="11" class="form-control" id="cpfTit" placeholder="Insira seu CPF" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="rgTit" placeholder="Insira seu RG" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sexoTit">Sexo</label>
                      <select id="sexoTit" class="form-control" required>
                          <option selected="selected">não selecionada</option>
                          <option value="261">Masculino</option>
                          <option value="263">Feminino</option>
                      </select>
                    </div>
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="estCivilTit">Estado Civil</label>
                      <select id="estCivilTit" class="form-control" required>
                        <option selected="selected">não selecionada</option>
                        <option value="249">Solteiro(a)</option>
                        <option value="251">Casado(a)</option>
                        <option value="253">Separado(a)</option>
                        <option value="255">Viúvo(a)</option>
                        <option value="257">Divorciado(a)</option>
                        <option value="259">Outros</option>
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="mun">Município de Nascimento</label>
                    <input type="text" class="form-control" id="munNascTit" placeholder="Informe o município que você nasceu" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="mae">Nome da Mãe</label>
                    <input type="text" class="form-control" id="nomeMaeTit" placeholder="Informe o nome completo de sua mãe" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="sus">Cartão do SUS</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="cardSusTit" placeholder="Número do seu cartão do SUS" required>
                    <small id="sus" class="form-text text-muted"><a href="https://meudigisus.saude.gov.br/menu/home" target="_blank">Consulte aqui</a></small>
                    </div>
                </div>  
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <label for="formaPgto">Forma de Cobrança</label>
                  <select id="formaPgto" class="form-control" required>
                      <option value="">Escolha</option>
                      <option value="1">Boleto</option>
                      <option value="2">Débito em Conta</option>
                  </select>
                  </div>
                </div>
                <div class="form-row divPgto" style="display:none">
                  <div class="form-group boletoDigital col-md-12">
                  
                  </div>
                  <div class="form-group boletoDigitalDados col-md-12" style="display:none">
                  
                  </div>
                  <div class="form-group dadosBanco col-md-12">
                  
                  </div>
                </div>
                <hr />
                <p class="texto1"><strong>Dados de acesso a área do cliente</strong></p>
                <p class="texto1 infoAreaCliente">Para a consulta posterior do status da sua proposta, vamos criar uma conta para você. Por isso, informe uma senha e confirme-a. O acesso posterior poderá ser feito mediante CPF e a senha cadastrada.</p>
                <div class="form-row areaClientePwd">
                    <div class="form-group col-md-6">
                      <label for="nome">Senha</label>
                      <input type="password" class="form-control" id="senhaTit" placeholder="Informe a senha..." required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nome">Confirme a senha</label>
                      <input type="password" class="form-control" id="confirmaSenhaTit" placeholder="Confirme a senha..." required>
                    </div>
                </div>
                      <form id="msform">
                                                            
                          <p class="texto1"><strong>Resumo do Plano Escolhido:</strong></p>
                          <fieldset style="width: auto;">	

                          <div class="form-card" id="planos2">
                            <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                            <p class="texto0"><span class="nomePlan"></span></p>
                            <p class="texto0"><strong>Subtotal: R$ <span class="subTotal"></span></strong></p>
                            <p class="texto1"></p>
                            <p class="texto1"><strong><span class="qtDep"></span> </strong>dependente(s).</p>
                            <p class="texto1"></p>                                    
                            
                          </p>
                          </div> 
                          <!--<input type="button" id="btnE5" name="next" class="next action-button" value="Continuar" disabled>-->
                          <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                              
                          </fieldset>

                      </form>
                <br>
                <input type="submit" name="next" class="btn action-button" value="Continuar">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            </div>
            <input type="hidden" id="hasAccount" value="0" />
            </form>
          </div>
          
        </div>
      </div>



  
  </div>

<?php include("footer.php"); ?>
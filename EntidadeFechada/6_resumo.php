<?php include("header.php"); ?>
  <!-- LOADING -->
  <!-- <div id="loading" align="center">
    <span style="font-size:18px !IMPORTANT;margin-top:30% !IMPORTANT">Carregando</span>
    <span id="loading-image"> <img width="100" src="assets/img/carregando.gif" alt="Carregando..." /></span>
  </div> -->

  <!-- modal preenchimento dados iniciais -->
  <div class="modal" id="loading" style="display:block" id="modal-default">
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
  <div style="background-color: #e6f1f7;">
  
    <div class="container-fluid">

      <div class="container">
            <br><br><br><br><br><br>
        <div class="row">
          <div class="corpo_resumo">

            <div class="container-fluid" id="temVinculo" style="">  <br>              
            <br><br><p class="texto1">Para prossegir, precisamos que você envia um <strong>comprovante de vínculo com a entidade CRA/PE.</strong></p>
                <div class="form-group uploadProofEntity">
                    <label for="fileVinculo">Comprovante de vínculo.</label>
                    <input type="file" class="form-control-file" id="fileVinculo">
                </div>
                <div class="form-group uploadProofEntity">
                  <input type="button" id="btnDoUploadFilevinculo" value="Enviar" />  
                  <!--<input type="button" class="btnDesfazEscolhas" value="Recomeçar" />-->
                </div>
                <div class="form-group uploadProofEntityOK" style="display:none">
                  <h5 style="color:green">Arquivo gravado, clique em continuar.</h5>
                </div>
            </div>

          </div>
          <div class="corpo2">
            
            <div class="row justify-content-center">

              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
                  <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                      <p class="texto"><strong>Informações Pessoais</strong></p>
                      <form id="msform">
                                                          
                          <p class="texto1"><strong><span class="nomeTit"></span></strong>, o plano que você escolheu é do tipo Coletivo por Adesão. Para esse tipo de Plano é necessário comprovar seu vínculo com uma entidade de classe profissional. Caso não possua este vínculo, para continuar com este benefício, podemos imediatamente vincular a uma classe.</p>
                          <p class="texto1"><strong>Resumo do Plano Escolhido:</strong></p>
                                <fieldset>	

                                  <div class="form-card" id="planos2">
                                    <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0"><span class="nomePlan"></span></p>
                                    <p class="texto0"><strong>Subtotal: R$ <span class="subTotal"></span></strong></p>
                                    <p class="texto1"></p>
                                    <p class="texto1"><strong><span class="qtDep"></span> </strong>dependente(s).</p>
                                    <p class="texto1"></p>                                    
                                    
                                  </p>
                                  </div> 
                                  <input type="button" id="btnE6" name="next" class="next action-button" value="Continuar" disabled>
                                  <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                                      
                                  </fieldset>
                      </form>
                  </div>
              </div>
          </div>

          </div>
        </div>
      </div>



  
  </div>

  
<?php include("footer.php"); ?>
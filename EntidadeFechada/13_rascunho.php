<?php include("header.php"); ?>
  <!-- LOADING -->
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

  <!-- ======= Top Bar ======= -->
  <!--<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:atendimento@way.digital">atendimento@way.digital</a>
        <i class="icofont-phone"></i> 0800 878 0042
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>-->

  

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
            <div class="row">
  <div class="col-md-12 pull-right hideonmobile" style="padding: 65px;"></div>
                <div class="corpo_resumo">
                    <div class="container height-container" style=" min-height: 580px; overflow: scroll; max-height: 250px; width: 100%; overflow-x:hidden;">
                    <span style="display:none" class="btnAbrePdfErro"></span>
                    <iframe style="display:none" id="rascunhoFrame" src="" height="780" width="100%" title="DS"></iframe>
                    <!-- <iframe style="display:none" id="rascunhoFrame" scrolling="auto" src="https://drive.google.com/viewerng/viewer?embedded=true&url=URL HERE" width="100%" height="90%" type='application/pdf' title="Title">
                        <p style="font-size: 110%;"><em>There is content being displayed here that your browser doesn't support.</em> <a href="URL HERE" target="_blank"> Please click here to attempt to view the information in a separate browser window. </a> Thanks for your patience!</p>
                    </iframe> -->
                    <div id="accordion">
                        <div class="card"><br><Br><br>
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Gerar Proposta Rascunho
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <center>
                                <button type="button" class="btn btn-lg btn-success" id="btnGerarRascunho">Gerar Proposta Rascunho</button>
                                <span style="display:none" class="btnAbrePdf"></span>
                              </center>
                              <br>
                              <br>
                              <span class="carrega-doc" style="display:none">Aguarde, estamos processando as informações <img src="assets/img/carregando.gif" alt="Carregando..." /></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
          <div class="corpo2">
            
            <div class="row justify-content-center">

              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
                  <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                      <p class="texto"><strong>Aprovação da Proposta</strong></p>
                      <form id="msform">
                                                     
                          <p class="texto1">Clique ao lado para gerar o rascunho da sua proposta. Leia com calma e atenção e ao final confirme se aprova ou não nossa negociação. Caso aprovado, vamos gerar a versão final da proposta.</p>
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
                            <input type="button" id="btnE13" name="next" class="next action-button" value="Ok, finalizar proposta." disabled>
                            <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                            <br><Br><br><br><Br><br> 
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
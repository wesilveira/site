<?php include("header.php"); ?>
  <!-- LOADING -->
  <div class="modal" id="loading" style="display:block" id="modal-default">
      <br>
      <br>
      <br>
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


  <div style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">


      <div id="planos" class="container " >
      <br><br><br><br><br><br>
    <div class="col-md-12 hideonmobile" style="padding: 20px;"></div>
        <div class="col-md-6 pull-left hideonmobile">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>
      <p class="texto"><strong>Manual de Orientação</strong></p>
      <br>
          <p class="texto1" style="text-align:justify !IMPORTANT"><strong class="nomeTit"></strong>, A ANS (Agência Nacional de Saúde) fez um material que auxilia o seu processo de compras, o MPS (Manual de Orientação para Contratação de Plano de Saúde).
          
      <br><p class="texto1">Clique no botão abaixo para visualizar o documento.</p>
          <center>
            <p><a href="https://way.digital/Documents/mpspadrao/MPS_PADRAO.pdf" target="_blank"><button type="button" class="botao1">Visualizar MPS</button></a></p>
          </center>
          <form id="msform">
          <p class="texto1">Declaro que tive acesso ao MPS (Manual de Orientação para Contratação de Plano de Saúde) estando ciente das condições deste instrumento.</p>
              <p class="texto1"><input type="checkbox" id="declaraMPS" /> <label for="declaraMPS">Sim, eu li e desejo continuar.</label>
                 
      <br>
                                  <fieldset style="width: auto;">
                                  <div>                

                                  <div class="form-card" id="planos2">
                                    <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0"><span class="nomePlan"></span></p>
                                    <p class="texto0"><strong>R$ <span class="precoPlan"></span></strong></p>
                                    <p class="texto1"></p>
                                    <input type="hidden" name="idOperadora" id="idOperadora" />
                                  </div>
                                  <span style="color:red" class="erroCheck"></span>
                                  <input type="button" id="btnE3" name="next" class="next action-button" value="Continuar">
                                  <!-- <input type="button" id="btnE2" class="previous action-button-previous" value="Anterior (Escolha plano)"> -->                                      
                                  </fieldset>

                          <br><br><br>        
                      </form>
                  </div>
              </div>
          </div>


    </center>   
</div> 
  <!-- ======= Hero Section ======= -->
<?php include("footer.php"); ?>
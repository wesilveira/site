<?php include("header.php"); ?>

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
  
    <div class="container">



      <div class="container">
        <div class="row">
          <div class="corpo1">
          <div id="planos" style="display:none;"> 
              
              
              <div class="container" style="background-color: rgba(146, 118, 199, 0.7); min-height: 780px; overflow: scroll; max-height: 250px; width: 100%; overflow-x:hidden;">
                <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="texto5"><strong>Planos Disponíveis</strong></h1>
                </div>
        
        
                </div>
            </div>

            </section>

            </div>
          </div>
        
      <div class="col-md-12">
      <div id="planos" class="container " style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">

        <div class="col-md-12 pull-right hideonmobile" style="padding: 65px;"></div>
        <div class="col-md-6 pull-left hideonmobile" style="padding: 0px 100px 300px 100px;">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>
        <div class="col-md-5 pull-left">
                      <br><br><br><p class="texto"><strong>Comece aqui</strong></p>
                      <form id="msform">
                                                
                          <p class="texto1">É muito fácil escolher seu Plano de Saúde <strong>Way.Digital</strong><br><br></p>
                              
                          <fieldset>
                                  <div>                                                        
                                      <div class="inner">

                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user" style="width:20px;" title="Nome Completo"></i></div>
                                              </div>
                                              <input type="text" class="form-control" id="nome" placeholder="Seu primeiro nome" title="Primeiro nome">
                                            </div>         

                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-map-marker" style="width:20px;" title="CEP"></i></div>
                                              </div>
                                              <input type="text" class="form-control cepindex" id="cep" placeholder="CEP (Apenas números)" onkeypress="mascara(this, '11111111'); return event.charCode >= 48 && event.charCode <= 57" maxlength="8" value="" title="CEP">
                                            </div>  
                                            <span style="color:red" class="erro-cep"></span>
                                                                                                          
                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-phone" style="width:20px;" title="Celular com DDD"></i></div>
                                              </div>
                                              <input type="text" class="form-control" id="cel" placeholder="Celular com DDD" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" title="Celular com DDD">
                                            </div>  
                                                                                                          
                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-calendar" style="width:20px;" title="Data de Nascimento"></i></div>
                                              </div>
                                              <input type="date" data-toggle="tooltip" data-placement="bottom" class="form-control" id="data_nascimento" placeholder="Data de Nascimento" max="<?php echo date("Y-m-d"); ?>" title="Data de Nascimento">
                                            </div>                                    

                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope" style="width:20px;" title="Informe seu e-mail"></i></div>
                                              </div>
                                              <input type="email" class="form-control" id="email" placeholder="E-Mail" title="Informe seu e-mail">
                                              <div id="msgemail"></div>
                                            </div>
                                      </div>	

                                      <div class="form-row">
                                          <div class="form-holder form-holder-2">
                                          &nbsp; <a href="#" data-toggle="modal" data-target="#modal-default">Por que preencher esses dados?</a>
                                          </div>
                                      </div>
                                      <p style="color:red" class="erro-msg"></p>       
                                      <p style="color:green" class="success-msg"></p>       
                                      <input type="hidden" id="utm_source" name="utm_source" value="<?php echo $utm_source; ?>">
                                      <input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo $utm_source; ?>">
                                      <input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo $utm_campaign; ?>">
                                      <input type="hidden" id="utm_content" name="utm_content" value="<?php echo $utm_content; ?>">
                                      <input type="hidden" id="utm_term" name="utm_term" value="<?php echo $utm_term; ?>">

                                  </div> 
                                  <input type="button" name="next" id="btnE1" class="next action-button" value="Ver Planos" >
                                  <input type="button" style="display:none" id="enviaForaAbragencia" class="action-button" value="Sim, desejo." >
                                  <input type="button" class="btn btn-link" value="Acessar sua conta? Clique aqui" onClick="window.location.href='cliente/login.php'" >
                                  </fieldset>
                      </form>
                  </div>
                  </div>
              </div>
          </div>

          </div>
        </div>
      </div>



  
  </div>
  <script src="js/privacy.js"></script>
  <?php include("footer.php"); ?>
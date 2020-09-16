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
  <div style="background-color:#e5f4fd; background-image: linear-gradient(#e5f4fd, #00639b);">
  
              
  <div id="planos" class="container " >
  <br><div class="row">

          <div class="col-md-12 pull-right hideonmobile" style="padding: 20px;"></div>

                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br><br>
                    <h1 class="texto"><strong>Planos Disponíveis</strong></h1>
                <br>
                </div>
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <center>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="all"><i class="fa fa-list btn-lg"></i><br>Todos</button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-default filter-button" data-tipo="top-price" data-filter="price" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-dollar btn-lg"></i><br>Preço
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" id="orderPriceLow">Menor preço</a>
                        <a class="dropdown-item" id="orderPriceHigh">Maior preço</a>
                      </div>
                    </div>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop2" type="button" class="btn btn-default filter-button" data-tipo="top-operadora" data-filter="operadora" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-headphones btn-lg"></i><br>Operadora
                      </button>
                      <div class="dropdown-menu dropOpe" aria-labelledby="btnGroupDrop2">
                      </div>
                    </div>
                  </center>
                </div>
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <center>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda199"><i class="fa fa-home btn-lg"></i><br>Apartamento</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda197"><i class="fa fa-wheelchair btn-lg"></i><br>Enfermaria</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart298"><i class="fa fa-check-square btn-lg"></i><br>Com Coparticipação</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart300"><i class="fa fa-check-square-o btn-lg"></i><br>Sem Coparticipação</button>
                  </center>
                </div>
                <br/>
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <center>
                    <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["copart298","copart300"]' data-filter="acomoda199">+ Apartamento</button>
                    <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["copart298","copart300"]' data-filter="acomoda197">+ Enfermaria</button>
                    <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["acomoda199","acomoda197"]' data-filter="copart298">+ Com Coparticipação</button>
                    <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["acomoda199","acomoda197"]' data-filter="copart300">+ Sem Coparticipação</button>
                  </center>
                </div>
            
                <div class="row col-md-12" id="planosToShow"></div>
              </div>
            </div>
            
            </div>
<br><br><br>


<div style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #00639b);">
  <div id="planos" class="container " >
      <div class="corpo2" style="display:none; width: auto;">

        <div class="col-md-12 hideonmobile" style="padding: 20px;"></div>
        <div class="col-md-6 pull-left hideonmobile">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>

              <div class="card col-md-6" style="background: unset;">
                      <p class="texto"><strong>Escolha seu Plano</strong></p>
                      <form id="msform">
                                 
                                  <fieldset>
                                  <div class="form-card">
                                  </div> 
                                  <div class="form-card" id="planos2" style="display:none;">
                                    <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0"><span class="nomePlan"></span></p>
                                    <p class="texto0"><strong>R$ <span class="precoPlan"></span></strong></p>
                                    <p class="texto1"></p><br>
                                    <p class="texto1"><strong>Olá, <span class="nomeTit"></span>.<br> </strong>você escolheu o plano acima!</p>
                                    <p class="texto1"></p><br>
                                    <p class="texto1"><input type="button" name="previous" class="previous action-button-previous" id="alteraPlano" value="Alterar Plano" />
                                    </p>
                                  </div> 
                                  <input type="button" id="btnE2" name="next" class="next action-button" value="Continuar"  />
                                  </fieldset>
                      </form>
                      </div>
                      <div style="clear: both;"></div>
      </div>
      </div>
      </div>

<?php include("footer.php"); ?>
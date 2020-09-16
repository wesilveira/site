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

      <div id="accordion">
        <div class="card">
        <br><br><Br>
          <div class="card-header" id="headingOne">
            <center><p class="texto"><strong>Proposta Enviada</strong></p><center></center></center>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
              <center>
              <p class="texto1"><strong class="nomeTit"></strong> Acabamos de finalizar o preenchimento de sua proposta de contratação de plano de saúde.</p>
              <p class="texto1">Sua proposta e documentos estão sendo encaminhados para o setor de auditoria.</p>
              <p class="texto1">Após aceita a sua contratação, você receberá um e-mail de confirmação com as informações do plano escolhido.</p>
              <p class="texto1">Apenas após a sua aceitação é que o plano estará contratado, para a vigência indicada na proposta.</p>
              <p class="texto1">Um dos nossos especialistas poderá entrar em contato para confirmação dos dados e/ou passar orientações.</p>
              <p class="texto1"></p>
              <p class="texto1">
                Você pode acompanhar o status da sua proposta acessando a área do cliente 
                informando seu cpf e a senha cadastrada neste processo, <a style="text-decoration: underline;text-transform: uppercase;" href="cliente/">clique aqui</a> se você deseja acessar agora.
              </p>
              </center>
              
              
              
            </div><br><br>
          </div>
        </div>
      </div>
        

    </div>
    <div class="corpo2">
      
      <div class="row justify-content-center">

        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
            <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                
                <form id="msform">
                    <div>
                      <ul id="progressbar">
                        <li class="active" id="account"></li>
                        <li class="active" id="personal"></li>
                        <li class="active" id="payment"></li>
                        <li class="active" id="confirm"></li>
                        <li class="active" id="phone"></li>
                        <li class="active" id="user"></li>
                    </ul>   
                    </div>                                                  
                          <fieldset style="
                        padding-top: 15px;
                        " class="justify-content-center">	

                                                  <div class="form-card" id="planos2">
                                                      <p class="texto6"><img class="picture-plan" src=""></p>
                                                      <p class="texto0"></p>                                              
                                                    </div>
                                                    <input type="button" onclick="window.location.href='../index_mob.php'" class="next action-button" value="Concluído">
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

  
<?php include("footer.php"); ?>
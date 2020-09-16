<?php include("header.php"); ?>

<!-- ESCONDER DIV E HABILITAR -->
<script>

//divs, mostrar ou nao

function mostrar_entidade() {
      if(document.getElementById('entidade').style.display=='none') {
        document.getElementById('entidade').style.display='block';
      }
  }

  
  function esconder_apbl() {      
        if(document.getElementById('apbl').style.display=='block') {
          document.getElementById('apbl').style.display='none';
        }
    }  


    function mostrar_apbl() {
      if(document.getElementById('apbl').style.display=='none') {
        document.getElementById('apbl').style.display='block';
      }
  }

  function mostrar_vinculo() {
    if(document.getElementById('vinculo').style.display=='none') {
      document.getElementById('vinculo').style.display='block';
    }
}

function mostrar_email() {
    if(document.getElementById('email').style.display=='none') {
      document.getElementById('email').style.display='block';
    }
}

function dsenviada() {
    document.getElementById('corpo1').style.display='none';
    document.getElementById('corpo_resumo').style.display='block';

    $(function() {
        $.alert(
          "Declaração de saúde enviada com sucesso, clique em Ok para continuar."
        )
    })

    document.getElementById('btnE11').focus;
    document.getElementById('btnE11').disabled = false;
}


  </script>

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
          <div class="corpo1" id="corpo1">
<br><br><br><br>
          <iframe id="dsFrame" src="" height="100%" width="100%" title="DS"></iframe>
          <br><br><br>
          </div>
          <div class="corpo_resumo" id="corpo_resumo" style="display:none">

            <div class="container-fluid"> 
                <p class="texto1"><strong class="nomeTit"></strong>, pronto, sua Declaração foi enviada com sucesso.</p>
                <p class="texto1">Agora clique em continuar.</p>
            </div>

          </div>
          <div class="corpo2">
            
            <div class="row justify-content-center">

              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
                  <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                      <p class="texto"><br><br><br></p>
                      <p class="texto"><strong>Declaração de Saúde</strong></p>
                      <form id="msform">
                                                     
                          <p class="texto1"><strong><span class="nomeTit"></span></strong>, agora por exigência da ANS e para sua segurança, é necessário o preenchimento da Declaração de Saúde.</p>
                          <p class="texto1">Responda as perguntas com N (Não) e S (Sim) para você e seus dependentes caso faça a opção de incluí-los no plano. E, em todas as respostas com S (Sim) você deve especificar o item no campo observação.</p>
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
                          <input type="button" id="btnE11" name="next" class="next action-button" value="Continuar" disabled>
                          <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                          <br><br><br><br><br><br>
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
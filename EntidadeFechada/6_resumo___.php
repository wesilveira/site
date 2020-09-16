<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSVXJDT');</script>
<!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Way.Digital - Store</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="css/font-google.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/wizard.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-confirm.min.css">

  <link href='css/font-awesome.css' rel='stylesheet'>       
  <script type='text/javascript' src='js/jquery.min.js'></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  

<!-- CSS E JS CUSTOMIZADOS -->
<script type='text/javascript' src='js/way.js?v=1.21'></script>
  <script src="js/privacy.js"></script>
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->


<!-- ESCONDER DIV NA VERSÃO MOBILE -->
<style>
 @media only screen and (max-width: 980px){
      .divTableCell3 { display: none; }
  }

  .hide {
    left: -9999px !important;
    position: absolute !important;
    visibility: hidden;
    z-index: -500;
    top: -9999px;
    -webkit-transition: all 1.5s ease;
    -moz-transition: all 1.5s ease;
    -o-transition: all 1.5s ease;
    transition: all 1.5s ease;
}
 
</style>
<!-- ESCONDER DIV NA VERSÃO MOBILE -->

<!-- MASCARA DO CEP -->
<script language="JavaScript"> 
  function mascara(t, mask){
  var i = t.value.length;
  var saida = mask.substring(1,0);
  var texto = mask.substring(i)
  if (texto.substring(0,1) != saida){
  t.value += texto.substring(0,1);
  }
  }
</script>  
<!-- MASCARA DO CEP -->

<!-- MASCARA DO CELULAR -->
<script language="JavaScript"> 
function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}
</script>  
<!-- MASCARA DO CELULAR -->
<!-- AUTOCOMPLETE -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- VALIDAR E-MAIL -->
<script language="Javascript">
  function validacaoEmail(field) {
  usuario = field.value.substring(0, field.value.indexOf("@"));
  dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
   
  if ((usuario.length >=1) &&
      (dominio.length >=3) && 
      (usuario.search("@")==-1) && 
      (dominio.search("@")==-1) &&
      (usuario.search(" ")==-1) && 
      (dominio.search(" ")==-1) &&
      (dominio.search(".")!=-1) &&      
      (dominio.indexOf(".") >=1)&& 
      (dominio.lastIndexOf(".") < dominio.length - 1)) {
  document.getElementById("msgemail").innerHTML="E-mail válido";
  alert("E-mail valido");
  }
  else{
  document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
  alert("E-mail invalido");
  }
  }
  </script>
<!-- VALIDAR E-MAIL -->

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



  </script>


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
  <!-- modal preenchimento dados iniciais fim --> 

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

  <?php include("menu.php"); ?>

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
          <div class="corpo_resumo">

            <!-- LOADING -->
            <div id="loading-corpo" align="center" style="display:none">
              <span id="loading-image"><h4 class="loading-text">Aguarde enquanto geramos sua ficha para assinatura eletrônica.</h4> <img width="100" src="assets/img/carregando.gif" alt="Carregando..." /></span>
            </div>

            <div class="container-fluid"> 
                <p class="texto11"><strong>COMPROVAÇÃO DE VÍNCULO COM ENTIDADE/ASSOCIAÇÃO</strong></p>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;">ENTIDADE é uma associação de categoria ou grupo profissional do qual você faz parte. 
Para ter direito a estas condições exclusivas você precisa comprovar o seu vínculo com alguma entidade ligada a sua profissão.</p>
                <p class="texto1">Sua profissão informada foi: <strong><span class="profissaoTit"></span>.</strong></p>
                <p class="texto1 entidadeFechada"><strong>Você possui vínculo com a entidade <span class="nomeEntidadeFechada"></span> relativa a sua profissão?</strong></p>    
                <p class="texto1 entidadeAberta hide"><strong>Você possui vínculo com alguma das entidades a seguir <span class="entidadesAbertas"></span> relativa a sua profissão?</strong></p>    
                <table>
                    <tr>
                        <td><input type="button" class="btnTemVinculo vSim" name="next" value="Sim"></td>
                        <td><input type="button" class="btnTemVinculo VNao" name="next" value="Não"></td>
                    </tr>
                </table> 
            </div>

            <div class="container-fluid" id="temVinculo" style="display:none;">  <br>              
                <p class="texto1 entidadeFechada"><strong>Sim, eu tenho um vínculo com a entidade <span class="nomeEntidadeFechada"></span></strong></p>
                <p class="texto1 entidadeAberta hide"><strong>Sim, eu tenho vínculo com a entidade <span class="nomeEntidadeEscolhida"></span>.</strong></p>
                <p class="texto1">Para prossegir, basta enviar um <strong>comprovante de vínculo com a entidade/associação em questão (<span class="nomeEntidadeEscolhida"></span>).</strong></p>
                <div class="form-group uploadProofEntity">
                    <label for="fileVinculo">Comprovante de vínculo com Entidade/Associação.</label>
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

            <div class="container-fluid" id="associarEntidade" style="display:none;">  <br>         
                <p class="texto1 entidadeFechada"><strong>Não, eu não tenho vínculo com a entidade/associação acima</strong></p>  
                <p class="texto1 entidadeAberta hide"><strong>Não, eu não tenho vínculo com nenhuma entidade/associação acima</strong></p>  
                <p class="texto1 entidadeFechada">Como você não tem vínculo com a entidade/associação informada, vamos te vincular a <strong><span class="nomeEntidade"></span></strong>. Será cobrado uma pequena taxa de associação, que estará descrita no documento que será encaminhado em seguida para o seu e-mail.</p>
                <p class="texto1 entidadeAberta hide">Como você não tem vínculo com nenhuma entidade/associação acima, ao clicar para prosseguir, você deverá escolher uma entidade disponível. Será cobrado uma pequena taxa de associação, que estará descrita no documento que será encaminhado em seguida para o seu e-mail.</p>
                <p class="texto1">Podemos prosseguir com a associação?</p>  
                <table>
                    <tr>
                        <td><input type="button" class="btnContinuaAssocEntidade aSim" name="next" value="Sim"></td>
                        <td><input type="button" class="btnContinuaAssocEntidade aNao" value="Não"></td>
                    </tr>
                    <!--<tr>
                      <td colspan="2"><input type="button" class="btnDesfazEscolhas" value="Recomeçar" /></td>
                    </tr>-->
                </table> 
            </div>

            <div class="container-fluid" id="vinculaEntidade" style="display:none;">  <br>              
                <p class="texto1 entidadeFechada"><strong>Sim, quero me vincular à entidade/associação informada.</strong></p>
                <p class="texto1 entidadeAberta hide"><strong>Sim, quero me vincular à entidade/associação informada (<span class="nomeEntidadeEscolhida"></span>).</strong></p>
                <p class="texto1">Ótimo vamos prosseguir com sua associação.</p>
                <p class="texto1">Agora vou precisar do comprovante de exercício profissional, além dos dados de local de trabalho.</p>
                
                <form id="frmAssocia">
                <hr />
                <div class="form-row">
                  <div class="form-group uploadProofProfession">
                      <label for="fileProfissao">Comprovante de profissão.</label>
                      <input type="file" class="form-control-file" id="fileProfissao" required>
                  </div>
                </div>
                <hr />
                <p class="texto1"><strong>Dados do seu local de trabalho:</strong>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cepEnt" maxLength="8" aria-describedby="cep" placeholder="CEP (Somente numeros)" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">informacoes aqui</small> -->
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="end">Endereço</label>
                    <input type="text" class="form-control" id="endEnt" aria-describedby="end" placeholder="Rua, Av. etc..." required>
                    <!-- <small id="emailHelp" class="form-text text-muted">informacoes aqui</small> -->
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="num">Número</label>
                    <input type="numeric" class="form-control" id="numEnt" placeholder="Número" required>
                    </div>
                    <div class="form-group col-md-8">
                    <label for="comp">Complemento</label>
                    <input type="text" class="form-control" id="compEnt" placeholder="Casa, Bloco, Sala, etc...">
                    </div>
                </div>
                <table>
                    <tr>
                      <input type="hidden" id="localidadeEnt">  
                      <input type="hidden" id="bairroEnt">
                      <input type="hidden" id="ufEnt">
                      <td><input disabled type="submit" name="next" class="btnEnviaDadosVinculo" value="Enviar"></td>
                    </tr>
                </table> 
                </form>
                <br>
                <div id="email" style="display:none;">  <br>              
                    <p class="texto1">Para que você possa vincular-se a esta entidade de classe, enviamos um e-mail com sua Ficha Associativa em formato digital.</p>  
                    <p class="texto1">Você precisa assinar rapidamente pelo computador ou celular.</p>
                    <p class="texto1">A Assinatura digital tem o mesmo valor jurídico da assinatura tradicional.</p>
                    <p class="texto1">Após a assinatura digital clique no botão <strong>próximo</strong></p>
                    
                <table>
                    <tr>
                        <td><input type="button" name="next" value="Próximo" class="btnChecaAssinaturaAssoc"></td>
                    </tr>
                </table> 

                <br>
                </div>
            </div>

          </div>
          <div class="corpo2">
            
            <div class="row justify-content-center">

              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
                  <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                      <p class="texto"><strong>Informações Pessoais</strong></p>
                      <form id="msform">
                          <div>
                            <ul id="progressbar">
                              <li class="active" id="account"></li>
                              <li class="active" id="personal"></li>
                              <li class="active" id="payment"></li>
                              <li class="active" id="confirm"></li>
                              <li id="phone"></li>
                              <li id="user"></li>
                          </ul> 
                          <br>  
                          </div>                                                  
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

  <?php include("rodape.php"); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->  
  <!--<script src="assets/js/main.js"></script>-->
  <script src="js/jquery-confirm.min.js"></script>
  

</body>

</html>
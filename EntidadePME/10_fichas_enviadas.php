<!DOCTYPE html>
<html lang="en">

<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSVXJDT');</script>
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
<script>
$( function() {
  var availableTags = [
    "Advogado",
    "Engenheiro",
    "Contador",
    "Médico",
    "Militar",
    "Funcionário Público",
    "Professor",
    "Pensionista",
    "Acadêmico",
    "Empresário",
    "Autônomo",
    "Político",
    "Programador",
    "Analista de Sistemas",
    "Aposentado",
    "Do Lar"
  ];
  $( "#tags" ).autocomplete({
    source: availableTags
  });
} );
</script>
<!-- AUTOCOMPLETE -->


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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
          <div class="corpo_resumo">

            <div class="container-fluid"> 
                <p class="texto11"><strong>Documentação Enviada com Sucesso!</strong></p>  <br>
                <p class="texto1">Já recebemos seus arquivos e sua documentação será analisada pelos nossos auditores</p>
                <p class="texto1">Clique em <strong>Continuar</strong></p>

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
                              <li id="personal"></li>
                              <li id="payment"></li>
                              <li id="confirm"></li>
                              <li id="phone"></li>
                              <li id="user"></li>
                          </ul>   
                          </div>                                                  
                          <p class="texto1">Agora precisamos de seus dados cadastrais. É necessário incluir todos os dados e enviar os documentos solicitados para a continuidade do processo.</p>
                          <p class="texto1"><strong>Resumo do Plano Escolhido:</strong></p>
                                <fieldset>	

                                  <div class="form-card" id="planos2">
                                    <p class="texto6"><img src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0">Titulo do Plano Aqui</p>
                                    <p class="texto0"><strong>R$ 250,00</strong></p>
                                    <p class="texto1"></p>
                                    <p class="texto1"><strong>5 </strong>dependente(s).</p>
                                    <p class="texto1"></p>                                    
                                    
                                  </p>
                                  </div> 
                                  <input type="button" name="next" class="next action-button" value="Continuar"  onClick="parent.location='12_ds.php'">
                                  <input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='10_ficha_dependente_anexos.php'">
                                      
                                  </fieldset>

                                  <fieldset>
                                 
                                  </fieldset>

                                  <fieldset>
                                  <div class="form-card">
                                      <br><br>
                                      <br><br>
                                      <center><h6><strong>SESSÃO 3 - [ INCLUSÃO DE DEPENDENTES ]</strong></h6></center>
                                      <br><br>
                                      <br><br>
                                      <p></p>
                                  </div> 
                                  <input type="button" name="next" class="next action-button" value="Próximo" /> 
                                  <input type="button" name="previous" class="previous action-button-previous" value="Anterior"  onclick="mostrar();"/>
                                  </fieldset>

                                  <fieldset>
                                  <div class="form-card">
                                      <br><br>
                                      <br><br>
                                      <center><h6><strong>SESSÃO 4 - [ PREENCHIMENTO DAS FICHAS ]</strong></h6></center>
                                      <br><br>
                                      <br><br>
                                      <p></p>
                                  </div> 
                                  <input type="button" name="next" class="next action-button" value="Próximo" /> 
                                  <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                  </fieldset>

                                  <fieldset>
                                  <div class="form-card">
                                      <br><br>
                                      <br><br>
                                      <center><h6><strong>SESSÃO 5 - [ VALIDAÇÃO DO RASCUNHO ]</strong></h6></center>
                                      <br><br>
                                      <br><br>
                                      <p></p>
                                  </div> 
                                  <input type="button" name="next" class="next action-button" value="Enviar" /> 
                                  <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                  </fieldset>

                                  <fieldset>
                                      <div class="form-card">
                                          <h2 class="purple-text text-center"><strong>SUCESSO !</strong></h2> <br>
                                          <div class="row justify-content-center">
                                              <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                          </div> 
                                          <br><br>
                                          <div class="row justify-content-center">
                                              <div class="col-7 text-center">
                                                  <h5 class="purple-text text-center">Pedido Enviado com sucesso</h5>
                                              </div>
                                          </div>
                                      </div>
                                  </fieldset>
                      </form>
                  </div>
              </div>
          </div>

          </div>
        </div>
      </div>



  
  </div>

  

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
  <script src="assets/js/main.js"></script>
  <script src="js/jquery-confirm.min.js"></script>
  

</body>

</html>
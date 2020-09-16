<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
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
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->
 <script src="js/jquery-confirm.min.js"></script>
  <script type='text/javascript' src='js/way.js'></script>
 <!-- <!--<script src="assets/js/main.js"></script>--> -->


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

  .dropdown-item {
    cursor:pointer;
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

//planos 1
  function esconder() {      
        if(document.getElementById('planos').style.display=='block') {
          document.getElementById('planos').style.display='none';
        }
    }  

  function mostrar() {
      if(document.getElementById('planos').style.display=='none') {
        document.getElementById('planos').style.display='block';
      }
  }

//planos 2

  function mostrar2() {
      if(document.getElementById('planos2').style.display=='none') {
        document.getElementById('planos2').style.display='block';
      }
  }


  </script>

<!-- ESCONDER DIV E HABILITAR -->


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
<div data-role="page" id="page_secundaria" style="background-color:#e5f4fd; background-image: linear-gradient(#e5f4fd, #00639b);">
    <div class="container col-12" style="background-color:#00639b;">   
        <table width="100%">
            <tr>
                <td width="5%"><a href="javascript: history.go(-1)"><img src="assets/images/seta.png"></a></td>
                <td width="95%" height="50" align="center"><img src="assets/images/logo-1-1-azul_claro.png" alt="Logo" width="100"></td>
            </tr>
        </table>             
    </div>
    <center>
     <div style="background-color: #e6f1f7;">
  
    <div class="container-fluid">



      <div class="container">
        <div class="row">
          <div class="corpo1">
          <div id="planos"> 
              
              
              <div class="container" style="background-color: rgba(146, 118, 199, 0.7); min-height: 700px; overflow: scroll; max-height: 250px; width: 100%; overflow-x:hidden;">
                <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="texto5"><strong>Planos Disponíveis</strong></h1>
                </div>
        
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <center>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="all">Todos</button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-default filter-button" data-tipo="top-price" data-filter="price" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-filter"></i> Preço
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" id="orderPriceLow">Menor preço</a>
                        <a class="dropdown-item" id="orderPriceHigh">Maior preço</a>
                      </div>
                    </div>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop2" type="button" class="btn btn-default filter-button" data-tipo="top-operadora" data-filter="operadora" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-filter"></i> Operadora
                      </button>
                      <div class="dropdown-menu dropOpe" aria-labelledby="btnGroupDrop2">
                      </div>
                    </div>
                  </center>
                </div>
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <center>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda199">Apartamento</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda197">Enfermaria</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart298">Com Coparticipação</button>
                    <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart300">Sem Coparticipação</button>
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
            
                <div class="row col-md-12" id="planosToShow">
                </div>
                    
                </div>
            </div>


        </section>



            </div>
          </div>
          <div class="corpo2">
            
            <div class="row justify-content-center">

              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-11 text-center p-0 mt-3 mb-2">
                  <div class="card mt-3 mb-3" style="background-color: #e6f1f7;">
                      <p class="texto"><strong>Escolha seu Plano</strong></p>
                      <form id="msform">
                          <div>
                            <ul id="progressbar">
                              <li class="active" id="account"></li>
                              <li class="active" id="personal"></li>
                              <li id="payment"></li>
                              <li id="confirm"></li>
                              <li id="phone"></li>
                              <li id="user"></li>
                          </ul>   
                          </div>         
                                  <fieldset>
                                  <div class="form-card">
                                    <p class="texto1">Olá <strong><span class="nomeTit"></span>, </strong>seja bem vindo!</p>
                                    <p class="texto1">Estes são os planos que encontramos de acordo com seu perfil.</p>
                                    <p class="texto1">Agora basta escolher seu plano para continuar.</p>
                                  </div> 
                                  <div class="form-card" id="planos2" style="display:none;">
                                    <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0"><span class="nomePlan"></span></p>
                                    <p class="texto0"><strong>R$ <span class="precoPlan"></span></strong></p>
                                    <p class="texto1"></p>
                                    <p class="texto1"><strong><span class="nomeTit"></span>, </strong>você escolheu o plano acima!</p>
                                    <p class="texto1"></p>
                                    <p class="texto1"><input type="button" name="previous" class="previous action-button-previous" id="alteraPlano" value="Alterar Plano" />
                                    </p>
                                  </div> 
                                  <input type="button" id="btnE2" name="next" class="next action-button" value="Continuar"  />
                                  </fieldset>
                      </form>
                  </div>
              </div>
          </div>

          </div>
        </div>
      </div>



  
  </div>
    </center>   
</div> 

  <!-- ======= Hero Section ======= -->


  <?php include("rodape-mb.php"); ?>


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

  <script type="text/javascript">
  </script>

</body>

</html>
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

<body style="background-color: #00639b;">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<?php include("../menu_top_mob.php"); ?>


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
            <div style="background-color: #00639b;">
  
              
              <div id="planos" class="container " style="background-color:#e5f4fd; background-image: linear-gradient(#e5f4fd, #00639b);">
              <br>
                <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="texto5"><strong>Escolha seu Plano</strong></p>
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

            <?php include("../rodape_mob.php"); ?>

 <div style="background-color: #00639b;">
  <div id="planos" class="container " style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #00639b);">
      <div class="corpo2 col-12" style="display:none" id="planosToShow">
      
              <div class="card col-12 mt-3 mb-3" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #00639b);">
                  <p class="texto"><strong>Escolha seu Plano</strong></p>
                  <form id="msform">       
                              <fieldset>
                              <div class="form-card" id="planos2" style="display:none;">
                                <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                <p class="texto0"><span class="nomePlan"></span></p>
                                <p class="texto0"><strong>R$ <span class="precoPlan"></span></strong></p>
                                <p class="texto1"><hr></p>
                                <p class="texto1"><strong><span class="nomeTit"></span>, </strong>você escolheu o plano acima!</p>
                                <p class="texto1"></p>
                                <p class="texto1"><input type="button" name="previous" class="previous action-button-previous" id="alteraPlano" value="Alterar Plano" />
                                </p>
                              </div> 
                              <input type="button" id="btnE2" name="next" class="next action-button" value="Continuar" disabled />
                              <input type="button" id="btnCancelaCart" class="previous action-button-previous" value="Cancelar">
                              </fieldset>
                      </div>
                  </form> 
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
  <script type='text/javascript' src='js/way.js?v=1.21'></script>
  <!--
  <script src="js/privacy.js"></script>
-->
</body>

</html>
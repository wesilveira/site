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

  .delDep {
    cursor: pointer;
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


</head>

<body style="background-color: #00639b;">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<table width="100%" class="fixed-top" style="background: #00639b;">
    <tr>
        <td width="5%"><a href="2_escolha_seu_plano.php"><img src="../assets/images/seta.png"></a></td>
        <td width="95%" height="50" align="center"><img src="../assets/images/logo-1-1-azul_claro.png" alt="Logo" width="100"></td>
    </tr>
  </table> 


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
  
    <div class="container-00639b">



      <div class="container">
        <div class="row">
          <div class="corpo1">
            <div id="planos"> 

            
            </div>
          </div>
 
          <div style="background-color: #00639b;">
      <div id="planos" class="container " style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
      <br><br><br>
                      <p class="texto"><strong>Incluir Dependentes</strong></p>
                      <form id="msform">
                                                                        
                          <p class="texto1 msgIncDep"><strong class="nomeTit"></strong>, se desejar incluir dependentes, insira a <strong>data de nascimento</strong> e clique em incluir. Você pode incluir até 5 dependentes.</p>
                          
                                  <fieldset>
                                  <div>                                                        
                                      <div class="inner">

                                      <div class="input_fields_wrap">
                                          <div class="AddDepTR input-group mb-3 mr-sm-3">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fa fa-calendar" title="Data de Nascimento"></i></div>
                                              </div>
                                              <input type="date" class="form-control" id="data_nasc" placeholder="Data de Nasc." title="Data de Nascimento">
                                              <div class="input-group-prepend">
                                                <button class="btn btn-primary" id="btnAddDep" style="background:#006da8 !IMPORTANT" type="button">Incluir</button>
                                                <!-- <button id="btnAddDep" type="button" class="btn add_field_button action-button1">Incluir</button> -->
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                      <table align="left" class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Data Nascimento</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">#</th>
                                          </tr>
                                        </thead>
                                        <tbody class="datas_deps">
                                        </tbody>  
                                      </table>
                                      </div>

                                      <br><br>
                                    </div>	

                                  <div class="form-card" id="planos2">
                                    <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                    <p class="texto0"><span class="nomePlan"></span></p>
                                    <p class="texto0 resumoPlanos"></p>
                                    <p class="texto0"><strong>Subtotal: <span class="somaPlanos"></span></strong></p>
                                    <p class="texto1"></p>
                                    <p class="texto1"><strong><span class="qtDep">0</span> </strong>dependente(s).</p>
                                    <p class="texto1"></p>                                    
                                    
                                  </p>
                                  </div> 
                                      <input type="button" name="next" id="btnSemDependente" class="next action-button" value="Prosseguir sem dependentes.">
                                      <input style="display:none; !IMPORTANT" type="button" name="next" id="btnEncerraAddDep"  class="next action-button" value="Pronto.">
                                      <input style="display:none" type="button" name="next" id="btnE4" class="next action-button" value="Continuar" disabled>
                                  <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='3_mps.php'">-->
                                      
                                  </fieldset>
                                  <br><br><br>
                      </form>
                  </div>
              </div>
          </div>


          <div class="fixed-bottom col-12">
                  <table id="Tabela_01" width="338" height="64" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td rowspan="2">
                        <img src="imagens/r_01.png" width="10" height="64" alt=""></td>
                      <td>
                        <a href="#"><img src="imagens/s_02.png" width="53" height="51" alt=""></td></a>
                      <td>
                        <a href="#"><img src="imagens/s_03.png" width="52" height="51" alt=""></td></a>
                      <td>
                        <a href="#"><img src="imagens/r_04.png" width="54" height="51" alt=""></td></a>
                      <td>
                        <a href="#"><img src="imagens/s_05.png" width="53" height="51" alt=""></td></a>
                      <td>
                        <a href="#"><img src="imagens/s_06.png" width="53" height="51" alt=""></td></a>
                      <td>
                        <a href="#"><img src="imagens/s_07.png" width="53" height="51" alt=""></td></a>
                      <td rowspan="2">
                        <img src="imagens/e_08.png" width="10" height="64" alt=""></td>
                    </tr>
                    <tr>
                      <td colspan="6">
                        <img src="imagens/r_09.png" width="318" height="13" alt=""></td>
                    </tr>
                  </table>
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
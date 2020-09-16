<?php
  $utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : "";
  $utm_source = (isset($_GET['utm_source'])) ? $_GET['utm_source'] : "";
  $utm_medium = (isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : "";
  $utm_content = (isset($_GET['utm_content'])) ? $_GET['utm_content'] : "";
  $utm_term = (isset($_GET['utm_term'])) ? $_GET['utm_term'] : "";
?>
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
  <link href="css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/wizard.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-confirm.min.css">

  <link href='css/font-awesome.css' rel='stylesheet'>       
  <script type='text/javascript' src='js/jquery.min.js'></script>


<!-- CSS E JS CUSTOMIZADOS -->
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->


<!-- ESCONDER DIV NA VERSÃO MOBILE -->
<style>
 @media only screen and (max-width: 980px){
      .divTableCell3 { display: none; }
  }

  .jconfirm{
    z-index: 100000 !important;
}

.select2-container--open {
    z-index: 9999999 !important;
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
  // var availableTags = [
  //   "Administrador","Advogado","Aeronauta","Aeroviário","Agronomo","Arquiteto","Arquivista","Artista","Assistente Social","Atleta Profissional","Atuário","Autônomo","Auxiliar de Enfermagem","Bacharel em Letras","Bibliotecário","Biólogo","Biomédico","Contabilista","Corretor de Imóveis","Corretor de Seguros","Desenhista Industrial","Designer","Despachante aduaneiro","Economista","Educador Fisico","Enfermeiro","Engenheiro","Estatístico","Estudante","Farmacêutico","Filósofo","Físico","Fisioterapeuta","Fonoaudiólogo","Fotógrafo","Funcionário do comércio","Gastrônomo","Geólogo","Historiador","Hotelaria","Jornalista","Marketeiro","Matemático","Médico","Médico Veterinário","Músico","Nutricionista","Odontólogo","Pedagogo","Professor","Profissional de Finanças","Profissional de Informática","Profissional de Logística","Profissional de Recursos Humanos","Profissional de Segurança do Trabalho","Profissional de segurança privada","Profissional de Tecnologia da Informação","Psicólogo","Publicitário","Químico","Radialista","Radiologista","Relações Públicas e Internacionais","Representante Comercial","Secretário","Servidor Público Estadual","Servidor público Federal","Servidor Público Municipal","Sociólogo","técnico de enfermangem","Técnico em contabilidade","Técnico Industrial","Teólogo","Tradutor","Turismólogo","Vendedor"
  // ];
  // $( "#profissao" ).autocomplete({
  //   source: availableTags
  // });
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
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include("../menu_top_mob.php"); ?>

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

    <center>
        <div style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">  
          <div class="container-fluid">
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
            
      <div style="background-color: #00639b;">
      <div id="planos" class="container col-12" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
                      <br><p class="texto"><strong>Comece aqui</strong></p><br>
                      <img src="../assets/images/unimed-logo-1.png"><br>
                      <form id="msform">
                          <p class="texto1">É muito rápido e fácil escolher seu Plano de Saúde <strong>Unimed</strong> na <strong>Way.Digital</strong></p>
                          <br>
                          <fieldset>
                                  <div>                                                        
                                      <div class="inner">

                                            <div class="input-group mb-2 mr-sm-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user" style="width:20px;" title="Nome Completo"></i></div>
                                              </div>
                                              <input type="text" class="form-control" id="nome" placeholder="Nome" title="Primeiro nome">
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

                                      <div>
                                          <div class="texto_ponto" >
                                          <a href="#" data-toggle="modal" data-target="#modal-default"><font color="#ffffff">Por que preencher esses dados?</font></a>
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
                                  <br>
                                  <input type="button" name="next" id="btnE1" class="botao1" value="Ver Planos" >
                      </form>
                  </div>
              </div>

          </div>
        </div>



  
  </div>

    </center>   
</div> 



<?php include("../rodape_mob.php"); ?>


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
  <!-- <!--<script src="assets/js/main.js"></script>--> -->
  <script src="js/jquery-confirm.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script type='text/javascript' src='js/way.js'></script>

</body>

</html>
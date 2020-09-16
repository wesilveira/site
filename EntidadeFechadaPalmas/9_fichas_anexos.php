<?php
  // session_start();
  // if(isset($_GET["qtDep"]))
  // {
  //   if(($_GET["qtDep"] > 5) or ($_GET["qtDep"] < 0)){
      
  //     session_destroy();
  //     echo "<script>window.location.href='9_fichas_anexos.php'</script>";
  //     exit;
  //   }else if($_GET["qtDep"] == 0){
  //     session_destroy();
  //     echo "<script>window.location.href='9_fichas_anexos.php'</script>";
  //     exit;
  //   }else{
  //     $_SESSION["qtDep"] = $_GET["qtDep"];
  //     echo "<script>window.location.href='9_fichas_anexos.php'</script>";
  //     exit;
  //   }
  // }
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

<body style="background-color: #00639b;">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
                  

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
  <div style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
  
    <div class="container-fluid">

          
            <div class="container-fluid"> 
            <br><br><br><p align="center" class="texto11"><strong>Esta é uma etapa importante, leia as instruções abaixo.</strong></p>
            <p class="texto1"><strong><span class="nomeTit"></span></strong>, agora precisamos que faça o upload de todos os documentos solicitados para titular e dependentes (se houver).</p>
                          

                <p class="texto1" style="text-align: justify; text-justify: inter-word;">Aqui você vai anexar os documentos do titular e dependentes, quando houver, clique sobre o beneficiário para expandir as opções de documento e realizar a inclusão.</p>

                <p class="texto1" style="text-align: justify; text-justify: inter-word;">Ao capturar as imagens de seus documentos utilizando a câmera, coloque o documento sob uma superfície plana para uma melhor qualidade. Evite tirar a foto segurando-a, para evitar foto tremida.</p>
                
                <form id="frmAnexos" enctype="multipart/form-data">
                <div id="accordion" style="margin-bottom:20px;margin-top:20px">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button type="button" class="btn btn-link collapsed acdTit" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Documentação Titular
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body docsTit">
                        <div class="row col-md-12">
                          <p class="texto1">
                            Escolha quais documentos você prefere enviar:<br>
                          </p>
                        </div>
                        <div class="row col-md-12">
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input radioDocTit" type="radio" name="radioDocTit" id="radioDocTit1" value="cnh">
                              <label class="form-check-label radioDocTit" for="radioDocTit1">
                              CNH + Comprovante de residência;
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input radioDocTit" type="radio" name="radioDocTit" id="radioDocTit2" value="rgcom">
                              <label class="form-check-label radioDocTit" for="radioDocTit2">
                              RG com CPF (frente e verso) + Comprovante de residência;
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <input class="form-check-input radioDocTit" type="radio" name="radioDocTit" id="radioDocTit3" value="rgsem">
                              <label class="form-check-label radioDocTit" for="radioDocTit3">
                              RG (frente e verso) + CPF separado (frente e verso) + Comprovante de residência;
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cnhTit">CNH</label>
                              <input type="file" class="form-control-file" name="UF_CRM_5E13A44580D79" id="cnhTit" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="comprovanteTit">Comprovante Residência</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1589295822" id="comprovanteTit" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="rgfTit">RG Frente</label>
                              <input type="file" class="form-control-file" name="UF_CRM_5E13A4455D9B6" id="rgfTit" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="rgvTit">RG Verso</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1589295667" id="rgvTit" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cpffTit">CPF Frente</label>
                              <input type="file" class="form-control-file" name="UF_CRM_5E13A4456A10C" id="cpffTit" disabled>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cpfvTit">CPF Verso</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1589295698" id="cpfvTit" disabled>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<div class="card">
                    <div class="card-header" id="headingOneEmp">
                      <h5 class="mb-0">
                        <button type="button" class="btn btn-link collapsed acdTit" data-toggle="collapse" data-target="#collapseOneEmp" aria-expanded="true" aria-controls="collapseOneEmp">
                          Comprovação Vínculo Empregatício (TITULAR)
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOneEmp" class="collapse" aria-labelledby="headingOneEmp" data-parent="#accordion">
                      <div class="card-body docsEmp">
                        <div class="row col-md-12">
                          <p class="texto1">
                            Envie a documentação de acordo com o vínculo:<br>
                          </p>
                        </div>
                        <div class="row col-md-12">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="holeriteGfipEmpTit">Se CLT, Último contracheque ou CTPS (páginas foto, qualificação civil e registro) para empresa de até 14 funcionários, ou
                              Última GFIP completa paga para empresas com mais de 14 funcionários.</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1598282678732" id="holeriteGfipEmpTit">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="ctoBenefInstTit">Se estagiário, contrato de estágio vigente entre o beneficiário e a instituição.</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1598282730916" id="ctoBenefInstTit">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="ctoBenefEmpTit">Se estagiário, contrato entre a empresa contratante e a instituição de ensino.</label>
                              <input type="file" class="form-control-file" name="UF_CRM_1598282747459" id="ctoBenefEmpTit">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->
                  </div>
				  
				  <input type="submit" class="btn action-button" value="Continuar" disabled>
                <input type="hidden" name="frmType" value="uploadAnexos" />
                <br><br><br><br><br><br>
                </form>

                  <form id="msform">
                  <br><br>                            
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
                        <!--<input type="button" id="btnE5" name="next" class="next action-button" value="Continuar" disabled>
                        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                            
                        </fieldset>
                    </form>
            </div>

          </div>
         
          </div>



  
  </div>

  


  <?php include("../rodape_mob.php"); ?>

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
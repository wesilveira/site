
<?php
	$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : "";
	$utm_source = (isset($_GET['utm_source'])) ? $_GET['utm_source'] : "";
	$utm_medium = (isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : "";
	$utm_content = (isset($_GET['utm_content'])) ? $_GET['utm_content'] : "";
	$utm_term = (isset($_GET['utm_term'])) ? $_GET['utm_term'] : "";
?>


<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Way.Digital</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets_new/images/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="assets_new/css/slick.css">
    <link rel="stylesheet" href="assets_new/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_new/css/default.css">
    <link rel="stylesheet" href="assets_new/css/style.css">
    <link rel="stylesheet" href="assets_new/css/LineIcons.css">
    
    <script src="assets_new/js/vendor/jquery-1.12.4.min.js"></script>  
    <script src="assets_new/js/slick.min.js"></script>    
    <script src="assets_new/js/jquery.counterup.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets_new/js/jquery.magnific-popup.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
    <script src="https://vincentgarreau.com/particles.js/assets/_build/js/lib/particles.js"></script>
    <script src="assets_new/js/main.js"></script>
    <script src="assets_new/js/bootstrap.min.js"></script>

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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSVXJDT');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <header class="header-area">
        
    <?php include("menu_topo.php"); ?>



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


        
        <div id="planos" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
            <div class="container">
                <div class="row justify-content-center">
                    
                    <table border="0">
                        <tr>
                            <td valign="top" style="padding:100px;"><img src="assets_new/images/medico-1.png" height="600" width="400"></td>
                            <td height="1000" valign="top" style="padding:100px;">
                            
                            
                            <div>

      <div class="container">
        <div class="row">
          <div>
            <form id="frmFichaTit">
            <div class="container-fluid"> 
                <br><Br><br><p class="texto11"><strong>Dados da Proposta</strong></p>  <br>
                <p class="texto1"><strong><span class="nomeTit"></span></strong>, agora é necessário incluir todos os dados nesta etapa.</p>
                          
                <p class="texto1"><strong>Dados do Titular</strong></p>
               
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nomeTit" placeholder="Entre com seu nome" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="emailTit" placeholder="Informe um e-mail válido" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="profi">Profissão</label>
                    <input type="text" readonly class="form-control" id="profissaoTit" placeholder="Informe sua profissão">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="data">Data de Nascimento</label>
                    <input required type="date" readonly class="form-control" id="dataNascTit" placeholder="Data Nascimento">
                    </div>
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label for="cep">CEP</label>
                    <input type="text" maxlength="8" readonly class="form-control" id="cepTit" readonly placeholder="CEP (Apenas números)">
                    </div>
                    <div class="form-group col-md-7">
                    <label for="ufTit">UF</label>
                    <select id="ufTit" class="form-control" readonly>
                        <option selected>Escolha</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="end">Endereço</label>
                    <input type="text" class="form-control" id="endTit" placeholder="Endereço completo" required>
                    </div>
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="num">Número</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="numTit" placeholder="Número">
                    </div>
                    <div class="form-group col-md-9">
                    <label for="comp">Complemento/Ponto de Referência</label>
                    <input type="text" class="form-control" id="compTit" placeholder="Sala, Bloco, Andar, Casas, etc..." required>
                    </div>
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" maxlength="11" class="form-control" id="cpfTit" placeholder="Insira seu CPF" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="rgTit" placeholder="Insira seu RG" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sexoTit">Sexo</label>
                      <select id="sexoTit" class="form-control" required>
                          <option selected="selected">não selecionada</option>
                          <option value="261">Masculino</option>
                          <option value="263">Feminino</option>
                      </select>
                    </div>
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="estCivilTit">Estado Civil</label>
                      <select id="estCivilTit" class="form-control" required>
                        <option selected="selected">não selecionada</option>
                        <option value="249">Solteiro(a)</option>
                        <option value="251">Casado(a)</option>
                        <option value="253">Separado(a)</option>
                        <option value="255">Viúvo(a)</option>
                        <option value="257">Divorciado(a)</option>
                        <option value="259">Outros</option>
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="mun">Município de Nascimento</label>
                    <input type="text" class="form-control" id="munNascTit" placeholder="Informe o município que você nasceu" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="mae">Nome da Mãe</label>
                    <input type="text" class="form-control" id="nomeMaeTit" placeholder="Informe o nome completo de sua mãe" required>
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="sus">Cartão do SUS</label>
                    <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="cardSusTit" placeholder="Número do seu cartão do SUS" required>
                    <small id="sus" class="form-text text-muted"><a href="https://meudigisus.saude.gov.br/menu/home" target="_blank">Consulte aqui</a></small>
                    </div>
                </div>  
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <label for="formaPgto">Forma de Cobrança</label>
                  <select id="formaPgto" class="form-control" required>
                      <option value="">Escolha</option>
                      <option value="1">Boleto</option>
                      <option value="2">Débito em Conta</option>
                  </select>
                  </div>
                </div>
                <div class="form-row divPgto" style="display:none">
                  <div class="form-group boletoDigital col-md-12">
                  
                  </div>
                  <div class="form-group boletoDigitalDados col-md-12" style="display:none">
                  
                  </div>
                  <div class="form-group dadosBanco col-md-12">
                  
                  </div>
                </div>
                <hr />
                <p class="texto1"><strong>Dados de acesso a área do cliente</strong></p>
                <p class="texto1 infoAreaCliente">Para a consulta posterior do status da sua proposta, vamos criar uma conta para você. Por isso, informe uma senha e confirme-a. O acesso posterior poderá ser feito mediante CPF e a senha cadastrada.</p>
                <div class="form-row areaClientePwd">
                  <div class="form-group">
                      <div class="form-group col-md-12">
                      <label for="nome">Senha</label>
                      <input type="password" class="form-control" id="senhaTit" placeholder="Informe a senha..." required>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-group col-md-12">
                      <label for="nome">Confirme a senha</label>
                      <input type="password" class="form-control" id="confirmaSenhaTit" placeholder="Confirme a senha..." required>
                      </div>
                  </div>
                </div>

                <form id="msform">
                                                               
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
                          <!--<input type="button" id="btnE5" name="next" class="next action-button" value="Continuar" disabled>-->
                          <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='4_incluir_dependentes.php'">-->
                              
                          </fieldset>

                      </form>
                <br>
                <input type="submit" name="next" class="btn action-button" value="Continuar">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <input type="hidden" id="hasAccount" value="0" />
            </form>
          </div>
        </div>
      </div>
                            
                            
                            
                            
                            </td>
                        </tr>
                    </table>

                </div>                 
            </div> 
            <div id="particles-1" class="particles"></div>
            
        </div> 
        
    </header>
    
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
<script src="assets/js/main.js"></script>
<script src="js/jquery-confirm.min.js"></script>
<script src="js/select2.min.js"></script>
<script type='text/javascript' src='js/way.js?v=1.21'></script>
</body>

</html>

<?php
  session_start();
  $user_id = false;
  if(isset($_SESSION["user_id"]) and $_SESSION["user_id"] != "")
  {
    header('Location: index.php');
  }

  if(isset($_GET["doLogin"]))
  {
    //chama conexão banco
    include "../config/db_connect.php";
    $cpf_login = $_POST["txtLogin"];
    $senha_login = $_POST["txtPassword"];

    if($cpf_login == "" or $senha_login == "")
    {
      echo "<script>alert('CPF e Senha são requeridos.');window.history.back()</script>";
      exit;
    }
    $encoded_password = md5(base64_encode($senha_login));
    $buscaLogin = mysqli_query($conexao,"select * from clientes where cpf = '$cpf_login' and password = '$encoded_password'");
    if(mysqli_num_rows($buscaLogin) > 0)
    {
      while($rs=mysqli_fetch_assoc($buscaLogin))
      {
        $_SESSION["user_id"] = $rs["id"];
        header('Location: index.php');
        exit;
      }
    }else{
      echo "<script>alert('CPF e/ou senha inválido.');window.history.back()</script>";
      exit;
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Way.Digital - Store (Login Área do Cliente)</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="../css/font-google.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/wizard.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">

  <link href='../css/font-awesome.css' rel='stylesheet'>       
  <script type='text/javascript' src='../js/jquery.min.js'></script>
  <script src="../js/jquery-1.11.1.min.js"></script>


<!-- CSS E JS CUSTOMIZADOS -->
<link href='../css/way.css' rel='stylesheet'>  
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
                  
            <table width="100%" class="fixed-top" style="background: #00639b;">
              <tr>
                  <td width="5%"><a onClick="localStorage.clear();window.location.href='../../index_mob.php'"><img src="../../assets/images/seta.png"></a></td>
                  <td width="95%" height="50" align="center"><img src="../../assets/images/logo-1-1-azul_claro.png" alt="Logo" width="100"></td>
              </tr>
            </table>  

  

  <!-- modal preenchimento dados iniciais -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background: #e6f1f7;">
        <h4 class="modal-title"><img src="../assets/img/favicon.png" width="40">&nbsp;<strong>Por que preencher esses dados?</strong></h4>
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

      <div class="container">
        <div class="row">
          <div class="corpo1">

          </div>

          <div class="card mt-3 mb-3 col-12" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #cdedff, #a2cee8, #00639b);">
                      <p class="texto"><strong>Login - Área do Cliente</strong></p>
                      <p class="texto1">Se você já tem uma proposta em andamento e deseja saber o status da mesma, logue informando seu cpf e a senha cadastrada no processo.</p>
                      <form id="msform" method="post" action="?doLogin">
                          <fieldset>
                            <div class="inner" align="left">
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label class="texto1" for="txtLogin">Login (CPF Apenas números)</label>
                                  <input type="text" class="form-control" pattern="[0-9]*" inputmode="numeric" maxlength="11" id="txtLogin" name="txtLogin" placeholder="Informe seu cpf" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label class="texto1" for="txtPassword">Senha</label>
                                  <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Informe sua senha" required>
                                </div>
                              </div>
                            </div>
                            <p class="texto1" style="text-align:center;"><a href="esqueceu_senha.php">Esqueceu sua senha? Clique aqui.</a></p>
                            <input type="submit" name="next" id="btnLogin" class="next action-button" value="Login" >
                          </fieldset>
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
                        <a href="#"><img src="imagens/r_02.png" width="53" height="51" alt=""></td></a>
                      <td>
                      <a href="#"><img src="imagens/s_03.png" width="52" height="51" alt=""></td></a>
                      <td>
                      <a href="#"><img src="imagens/s_04.png" width="54" height="51" alt=""></td></a>
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


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->  
  <script src="../assets/js/main.js"></script>
  <script src="../js/jquery-confirm.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <!-- <script type='text/javascript' src='js/way.js?v=1.21'></script>
  <script src="js/privacy.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function () {
      (function ($) {
        $.fn.inputFilter = function (inputFilter) {
          return this.on(
            "input keydown keyup mousedown mouseup select contextmenu drop",
            function () {
              if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(
                  this.oldSelectionStart,
                  this.oldSelectionEnd
                );
              } else {
                this.value = "";
              }
            }
          );
        };
      })(jQuery);

      $("#txtLogin").inputFilter(function (value) {
        return /^\d*$/.test(value); // Allow digits only, using a RegExp
      });
    });
  </script>

</body>

</html>
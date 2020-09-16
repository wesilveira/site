<?php
include 'mobile/detect/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: index_mob.php');
    exit(0);
}
?>

<!doctype html>
<html class="no-js" lang="pt-br">
<head>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSVXJDT');</script>

    <meta charset="utf-8">
    <title>Way.Digital</title>    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/LineIcons.css">    
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>  
    <script src="assets/js/slick.min.js"></script>    
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/client.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
    </script>
    <script type="text/javascript">
            const go = (elem) => {
        window.scroll({       // 1
            top: document
            .querySelector( elem )
            .offsetTop,       // 2
            left: 0,
            behavior: 'smooth'// 3
        });
        }
      </script>
</head>
<body>
    
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


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
        <div id="planos" class="corpo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <table border="0">
                                <tr>
                                    <td rowspan="4">
                                        <img src="assets/images/medico-3.png">
                                    </td>
                                    <td width="5%" rowspan="4"></td>
                                    <td height="20%"></td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="text3">Falta pouco para contratar o seu plano de saúde 100% online.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    <p class="text2">É muito fácil simular e contratar um plano ideal para você e sua família, nas melhores operadoras do país.
                                    </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="text2" data-wow-duration="1.3s" data-wow-delay="0.8s">CONTRATE AGORA</p>
                                    <br>
                                    </td>
                                </tr>
                            </table> 
                        </div> 
                    </div>                    
                    <div class="container">
                    <div class="row">
                        <div class="col-2"></div> 
                        <div class="col-8">
                            <section class="customer-logos slider">
                                <div class="slide single-testimonial" onclick="go('#plano1')">                                           
                                        <img src="assets/images/icon-voce_e_familia-4.png" alt="">
                                        <p class="texto_carousel">PLANO PARA <br><b>VOCÊ E SUA FAMÍLIA</b></p>
                                </div>
                                <div class="slide single-testimonial" onclick="go('#plano2')">                                           
                                        <img src="assets/images/icon-empresa-4.png" alt="">
                                        <p class="texto_carousel">PLANO PARA <br><b>EMPRESA PME E MEI</b></p>
                                </div>
                                <div class="slide single-testimonial" onclick="go('#plano3')">                                           
                                        <img src="assets/images/icon-empregado-4.png" alt="">
                                        <p class="texto_carousel">PLANO PARA <br><b>VOCÊ FUNCIONÁRIO</b></p>
                                </div>
                                <div class="slide single-testimonial" onclick="go('#plano4')">                                           
                                        <img src="assets/images/icon-entidades-4.png" alt="">
                                        <p class="texto_carousel">PLANO PARA<br><b>FILIADOS A ENTIDADE</b></p>
                                </div>

                                <div class="slide single-testimonial">    
                                        <img src="assets/images/a-cliente.png" alt="">                                      
                                        <p class="texto_carousel">ÁREA DO CLIENTE</p>
                                </div>
                                <div class="slide single-testimonial">         
                                        <img src="assets/images/a-quem.png" alt="">                               
                                        <p class="texto_carousel">QUEM SOMOS</p>
                                </div>
                                <div class="slide single-testimonial">      
                                        <img src="assets/images/a-loja.png" alt="">                                 
                                        <p class="texto_carousel">LOJA VIRTUAL WAY</p>
                                </div>
                                <div class="slide single-testimonial">     
                                        <img src="assets/images/a-contato.png" alt="">                                   
                                        <p class="texto_carousel">ENTRE EM CONTATO</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-2"></div> 
                    </div>
                    </div>
                </div>                 
            </div> 
            <div id="particles-1" class="particles"></div>
            <br>
        </div> 
    </header>
    <div class="brand-area pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/images/unimed-logo-1.png" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/images/amil-logo-1.png" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="assets/images/GNDI-logo-1.png" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="assets/images/logo-hapvida.png" alt="brand">
                        </div> 
                    </div>
                </div>
            </div>   
        </div>
        <br>
    </div>    
    <section id="plano1" class="familia pt-120">
        <div class="container">                
            <div class="row">
                <div class="col-8">
                    <table border="0" height="100%" width="100%">
                        <tr>
                            <td align="right"=><img src="assets/images/icon-voce_e_familia.png" height="70"></td>
                        </tr>
                        <tr>
                            <td align="right"><p class="sessao2-text1">Para você e sua família</p></td>
                        </tr>
                        <tr>
                            <td align="right">
                            <p class="sessao2-text2">As melhores opções de Planos Coletivos por Adesão, com as melhores operadoras do mercado.<br>
                            Simule agora o seu plano e tenha benefícios exclusivos</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><a onClick="localStorage.setItem('currentStep', '1');window.location.href='EntidadeAberta_DESK/index.php'"class="botao1">ESCOLHER PLANO</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-4" valign="top"><img src="assets/images/medico-4.png" height="500"></div>
            </div>
        </div> 
    </section>
    
    <section id="plano2" class="empreendedor_pme pt-120">
        <div class="container">                
            <div class="row">
                <div class="col-2" style="text-align: right;"><img src="assets/images/empresario-1.png" height="500"></div>
                <div class="col-8">
                    <table border="0" height="100%" width="100%">
                        <tr>
                            <td align="left"=><img src="assets/images/icon-empresa-3.png" height="70"></td>
                        </tr>
                        <tr>
                            <td align="left"><p class="sessao3-text1">Para Empreendedores PME e MEI</p></td>
                        </tr>
                        <tr>
                            <td align="left">
                            <p class="sessao3-text2">Você, empresário, pode dar este benefício a seus funcionários, sem custo para sua empresa e sem ter trabalho na gestão dos planos.<br><br>
                            Veja agora os planos!</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"><a href="#" class="botao1">ESCOLHER PLANO</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> 
    </section>     
    <section id="plano3" class="funcionario_mei pt-120">
        <div class="container">                
            <div class="row">
                <div class="col-8">
                    <table border="0" height="100%" width="100%">
                        <tr>
                            <td align="right"=><img src="assets/images/icon-empregado.png" height="70"></td>
                        </tr>
                        <tr>
                            <td align="right"><p class="sessao2-text1">Para funcionários PME e MEI</p></td>
                        </tr>
                        <tr>
                            <td align="right">
                            <p class="sessao2-text2">Você que é MEI ou funcionário pode ter um plano de saúde com até 40% de desconto. 
                                Veja se sua empresa já tem cadastro na Way e simule você mesmo o melhor plano para você ou solicite o cadastro da sua empresa na Way para garantir o seu desconto.
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><a href="#" class="botao1">ESCOLHER PLANO</a><br><br></td>
                        </tr>
                    </table>
                </div>
            <div class="col-4"><img src="assets/images/funcionario-1.png" height="500"></div>
            </div>
        </div> 
    </section>    
    <section id="plano4" class="entidade_aberta pt-120">
        <div class="container">                
            <div class="row">
                <div class="col-2" style="text-align: right;"><img src="assets/images/medico-1.png" height="500"></div>
                <div class="col-8">
                    <table border="0" height="100%" width="100%">
                        <tr>
                            <td align="left"=><img src="assets/images/icon-entidades-3.png" height="70" style="align: left;"></td>
                        </tr>
                        <tr>
                            <td align="left"><p class="sessao3-text1">Para Associados de Entidades</p></td>
                        </tr>
                        <tr>
                            <td align="left">
                            <p class="sessao3-text2">Veja aqui os planos que sua entidade de classe, associação ou conselho de sua profissão pode lhe oferecer, com as vantagens dos planos coletivos.<br><br>
                            Encontre seu plano e faça uma simulação agora!</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"><a onClick="localStorage.setItem('currentStep', '1');window.location.href='EntidadeFechada/index.php'" class="botao1">ESCOLHER PLANO</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> 
    </section>       
    <?php include("rodape.php"); ?>
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>    
</body>
</html>

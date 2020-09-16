<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSVXJDT');</script>

    <meta charset="utf-8">
    <title>Way.Digital</title>    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/wizard.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/LineIcons.css">    
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>  
    <script src="assets/js/slick.min.js"></script>    
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>    
    <!--<script src="assets/js/main.js"></script>-->
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/client2.css">
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
</head>
<body>	

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSVXJDT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div data-role="page" id="page_secundaria" style="background-color:#00639b;">
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
                                  <input type="button" id="btnE2" name="next" class="next action-button" value="Continuar" disabled />
                                  <input type="button" id="btnCancelaCart" class="previous action-button-previous" value="Cancelar">
                                  </fieldset>
                      </form>
                  </div>
              </div>
          </div>

          </div>
        </div>
      </div>



  
  </div>
</div> 



	<div class="fixed-bottom" style="background-color: #ffffff;">
        <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="cols-1">&nbsp;&nbsp;&nbsp;</div>
            <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="assets/images/unimed-logo-1.png" alt="brand">
            </div> 
            <div class="cols-2">&nbsp;&nbsp;&nbsp;</div>
            <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <img src="assets/images/amil-logo-1.png" alt="brand">
            </div> 
            <div class="cols-2">&nbsp;&nbsp;&nbsp;</div>
            <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="assets/images/GNDI-logo-1.png" alt="brand">
            </div> 
            <div class="cols-2">&nbsp;&nbsp;&nbsp;</div>
            <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <img src="assets/images/logo-hapvida.png" alt="brand">
            </div> 
            <div class="cols-1">&nbsp;&nbsp;&nbsp;</div>
        </div>
        <br>
    </div>
    

<!--       <script type='text/javascript' src='js/way.js?v=1.21'></script>
 -->      <script src="js/privacy.js"></script>

</body>
</html>
<?php include("header.php"); ?>

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
            <br><br><br>
            <br><br><br>
            <div class="col-md-12 hideonmobile" style="padding: 20px;"></div>
        <div class="col-md-6 pull-left hideonmobile">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>

        <div class="col-md-6 pull-right">
            <p align="center" class="texto11"><strong>Esta é uma etapa importante, leia as instruções abaixo.</strong></p>
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
<div style="clear: both;"></div>
          </div>
         
          </div>



  
  </div>

  


<?php include("footer.php"); ?>
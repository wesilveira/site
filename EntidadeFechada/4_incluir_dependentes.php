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
  
    <div class="">



      <div class="container">
        <div class="row">
          <div class="corpo1">
            <div id="planos"> 

            
            </div>
          </div>
 
          <div style="width: 100%" >
      <div id="planos"  >
      <br><br><br><br><br><br>
      <div class="col-md-12 hideonmobile" style="padding: 20px;"></div>
        <div class="col-md-6 pull-left hideonmobile">
          <img src="assets_new/images/medico-1.png" width="225" height="600">
        </div>
                      <p class="texto"><strong>Incluir Dependentes</strong></p>
                      <form id="msform">
                                                                        
                          <p class="texto1 msgIncDep"><strong class="nomeTit"></strong>, se desejar incluir dependentes, insira a <strong>data de nascimento</strong> e clique em incluir. Você pode incluir até 5 dependentes.</p>
                          
                                  <fieldset style="width: auto;">
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
  
  </div>

<?php include("footer.php"); ?>
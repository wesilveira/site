<?php
  ini_set('display_errors', 0);
  session_start();
  date_default_timezone_set('America/Fortaleza');

  set_time_limit(100000000000);
  
  //chama conexão banco
  include "config/db_connect.php";

  $params = array();
  
  if(isset($_POST["formData"]))
    parse_str($_POST["formData"], $params);
  
  if(isset($_POST["frmType"]))
    $params["frmType"] = $_POST["frmType"];
    
  if(isset($params["frmType"]))
  {
    $tipo = $params["frmType"];
    switch($tipo){
      case "buscaCep":
        $cep = $_POST["frmCep"];
        $cep = str_replace("-", "", $cep);
        $cep = str_replace(".", "", $cep);
        $sql = mysqli_query($conexao,"select * from ceps where cep = '$cep'");
        if(mysqli_num_rows($sql) > 0)
        {
          while($dados=mysqli_fetch_array($sql))
          {
            $retorno = array();
            $retorno["error"] = "false";
            $retorno["uf"] = $dados["uf"];
            $retorno["localidade"] = $dados["localidade"];
            $retorno["logradouro"] = $dados["logradouro"];
            $retorno["bairro"] = $dados["bairro"];
            $retorno["cep"] = $dados["cep"];

            header('Content-Type: application/json');
            echo json_encode($retorno);
            exit;
          }
        }else{
          $doBusca = json_decode(curl_rest("https://viacep.com.br/ws/$cep/json/"));
          //var_dump($doBusca);

          // if($cep == "59064900")
          // {
          //   $doBusca = json_decode('{
          //     "cep": "59064-900",
          //     "logradouro": "Avenida Senador Salgado Filho",
          //     "complemento": "",
          //     "bairro": "Candelária",
          //     "localidade": "Natal",
          //     "uf": "RN",
          //     "unidade": "",
          //     "ibge": "2408102",
          //     "gia": ""
          //   }');
          // }else{
          //   $doBusca = json_decode(curl_rest("https://viacep.com.br/ws/$cep/json/"));
          // }
          
          if(isset($doBusca->erro) || $doBusca === null)
          {
            header('Access-Control-Allow-Origin: *');
            header("Content-type: application/json; charset=utf-8");
            echo json_encode(array("error" => "true", "erro_msg" => "Erro busca ws."), true);
            exit;
          }else{
            $retorno = array();
            //$retorno["debug"] = $doBusca;
            $retorno["error"] = "false";
            $retorno["cep"] = str_replace("-", "", $doBusca->cep);
            $retorno["logradouro"] = $doBusca->logradouro;
            $retorno["complemento"] = $doBusca->complemento;
            $retorno["bairro"] = $doBusca->bairro;
            $retorno["localidade"] = $doBusca->localidade;
            $retorno["uf"] = $doBusca->uf;
            $retorno["unidade"] = $doBusca->unidade;
            $retorno["ibge"] = $doBusca->ibge;
            $retorno["gia"] = $doBusca->gia;

            //salva banco
            $salvaBanco = mysqli_query($conexao, "insert into ceps values (null, '".$retorno["cep"]."','".$retorno["logradouro"]."','".$retorno["complemento"]."','".$retorno["bairro"]."','".$retorno["localidade"]."','".$retorno["uf"]."','".$retorno["unidade"]."','".$retorno["ibge"]."','".$retorno["gia"]."')");
            // $localidade = strtolower($doBusca->localidade);
            // //busca profissões
            // if($localidade == "natal" or $localidade == "recife")
            // {
            //   $ufBusca = $doBusca->uf;
            //   $profissoes = array();
            //   $terminou_busca = false;
            //   $next = "";
            //   while($terminou_busca === false)
            //   {
            //     $doBuscaProfissoes = getProfissoes($ufBusca,$next);
            //     $doBuscaProfissoes = json_decode($doBuscaProfissoes,true);
            //     if(isset($doBuscaProfissoes["result"]) and $doBuscaProfissoes["result"] != "")
            //     {
            //       array_push($profissoes,$doBuscaProfissoes["result"]);
            //       if(isset($doBuscaProfissoes["next"]))
            //       {
            //         $next = ',"next":"'.$doBuscaProfissoes["next"].'"';
            //       }else{
            //         $terminou_busca = true;
            //         $next = "";
            //       }
            //     }else{
            //       $terminou_busca = true;
            //       $profissoes = false;
            //     }
            //   }
            //   $retorno["profissoes"] = $profissoes;
            }
            //fim busca

            header('Content-Type: application/json');
            echo json_encode($retorno);
            exit;
          }
        break;
      case "buscaProfissoesEntidadeAberta":
        $buscaProfissoesEntidadeAberta = mysqli_query($conexao,"select profissao from profissoes where ativo = 'SIM' order by profissao asc");
        $retorno = array();
        $retorno["error"] = false;
        $profissoes = array();
        while($rsProf=mysqli_fetch_array($buscaProfissoesEntidadeAberta))
        {
          $profissoes[] = $rsProf["profissao"];
        }
        $retorno["profissoes"] = $profissoes;
        echo json_encode($retorno);
        exit;
        break;
      case "testepwd":
        $pass = md5($_POST["pass"]);
        $busca = mysqli_query($conexao,"select * from clientes where password = '$pass'");
        if(mysqli_num_rows($busca) > 0)
        {
          echo "true";
        }else{
          echo "false";
        }
        exit;
        break;
      case "buscaProfissoes":
        $profissao = "";
        $next = "";
        if(isset($_POST["uf"]))
        {
          $uf = $_POST["uf"];

          $terminou_busca = false;
          $busca = "";
          while($terminou_busca === false)
          {
            $_busca = json_decode(getProfissoes($uf,$next,$profissao),true);
            // $_busca = $_busca["result"];
            if($_busca["result"] === "" or empty($_busca["result"]))
            {
              $terminou_busca = true;
            }else{
              if($busca === "")
              {
                $busca = $_busca["result"];
                if(isset($_busca["next"])){
                  $next = ',"start":"'.$_busca["next"].'"';
                }else{
                  $terminou_busca = true;
                }
              }else{
                foreach($_busca["result"] as $_profissao)
                {
                  array_push($busca,$_profissao);
                }
                if(isset($_busca["next"])){
                  $next = ',"start":"'.$_busca["next"].'"';
                }else{
                  $terminou_busca = true;
                }
              }
            }
          }

          echo json_encode(array("error" => "false", "profissoes" => $busca));
          exit;
          break;

        }else{
          echo json_encode(array("error" => "true", "error_msg" => "Parâmetros incorretos."), true);
          exit;
          break;
        }
        break;
      case "buscaEmpresa":
        if(isset($_POST["cnpj"]) and $_POST["cnpj"] != "")
        {
          $cnpj = $_POST["cnpj"];

          $payload_busca_cnpj = '{
            "filter": {
                "UF_CRM_1586990421": "'.$cnpj.'"
            }
          }';

          $getFromBitrix = curl_bitrix_method("crm.company.list",$payload_busca_cnpj);
          $resultCompany = json_decode($getFromBitrix,true);
          if($resultCompany["total"] > 0)
          {
            $resultCompany = $resultCompany["result"][0];
            header('Content-Type: application/json');
            echo json_encode(array("error" => "false", "hasCompany" => 1, "id_company" => $resultCompany["ID"], "nome_company" => $resultCompany["TITLE"]), true);
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "false","hasCompany" => 0), true);
          }
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "error_msg" => "Parâmetros incorretos."), true);
        }
        exit;
        break;
      case "gerarAdesao":
        if(isset($_POST["deal_id"]) and $_POST["deal_id"] != "")
        {
          $deal_id = $_POST["deal_id"];
          $template = $_POST["template"];

          $cnpj = $_POST["cnpj"];

          $payload_busca_cnpj = '{
            "filter": {
                "UF_CRM_1586990421": "'.$cnpj.'"
            }
          }';

          $getFromBitrix = curl_bitrix_method("crm.company.list",$payload_busca_cnpj);
          $resultCompany = json_decode($getFromBitrix,true);
        
          
          $company_id = $resultCompany["result"][0]["ID"];




          $buscaOperadoras = mysqli_query($conexao,"select * from operadoras where xml_id = 8347");

          while($rsOpe=mysqli_fetch_array($buscaOperadoras))
          {
            $xmlid = $rsOpe["xml_id"];
            $valueid = $rsOpe["value_id"];
            $imgplan = $rsOpe["img"];
            $nomeOpe = $rsOpe["nome"];
            $docsId = json_decode($rsOpe["id_docs"],true);
            
            $_operadoras_imgs["$xmlid"] = $imgplan;
            $operadoras_venda_nome["$xmlid"] = $nomeOpe;
            $operadoras_venda[] = $xmlid;
            $templatesDocs["$xmlid"] = $docsId;
          }

          $proposta_template = $templatesDocs['8347']['uf']['default']['pj']['proposta'];


          $cnpj = $_POST["cnpj"];

          $payload_busca_cnpj = '{
            "filter": {
                "UF_CRM_1586990421": "'.$cnpj.'"
            }
          }';


          $payloadDocRascunho = '{
              "entityTypeId": "4",
              "templateId": "'.$proposta_template.'",
              "entityId": "'.$company_id.'"
          }';



          $avancaPropostaFinal = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=vwqsz&target=DEAL_".$deal_id);

          $payloadDocProposta = '{
              "templateId": "949",
              "entityTypeId": "4",
              "entityId": "'.$resultCompany["ID"].'"
          }';
          $create_proposta = curl_bitrix_method("crm.documentgenerator.document.add", $payloadDocRascunho);
          $create_proposta = json_decode($create_proposta,true);

          $id_proposta = $create_proposta["result"]["document"]["id"];

          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "proposta_id" => $id_proposta), true);
          exit;
          
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "avancaParaDocumentacao":
        //trigger to info dep
        $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=d7nsw&target=DEAL_".$_POST["deal_id"]);
        $updProposta = mysqli_query($conexao,"update propostas set status = 'ENVIO DOCUMENTAÇÃO' where deal_id = ".$_POST["deal_id"]);
        header('Content-Type: application/json');
        echo json_encode(array("error" => "false"), true);
        exit;
        break;
      case "avancaNegocioGanho":
        //trigger to info dep
        $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=lfz9e&target=DEAL_".$_POST["deal_id"]);
        $payload = json_decode($_POST["payload"],true);
        $updProposta = mysqli_query($conexao,"update propostas set status = 'PROPOSTA ENVIADA', infoCustomer = '".serialize($payload)."' where deal_id = ".$_POST["deal_id"]);
        header('Content-Type: application/json');
        echo json_encode(array("error" => "false"), true);
        exit;
        break;
      case "avancaParaRascunho":
        //trigger to info dep
        $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger?code=14b7x&target=DEAL_".$_POST["deal_id"]);
        $updProposta = mysqli_query($conexao,"update propostas set status = 'RASCUNHO DA PROPOSTA' where deal_id = ".$_POST["deal_id"]);
        header('Content-Type: application/json');
        echo json_encode(array("error" => "false"), true);
        exit;
        break;
      case "avancaParaDS":
        //trigger to info dep
        $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger?target=code=dwz46&DEAL_".$_POST["deal_id"]);
        $updProposta = mysqli_query($conexao,"update propostas set status = 'DECLARAÇÂO DE SAÚDE' where deal_id = ".$_POST["deal_id"]);
        header('Content-Type: application/json');
        echo json_encode(array("error" => "false"), true);
        exit;
        break;
      case "gravaLead":
        $payload = null;
        if(isset($_POST["payload"]) and isset($_POST["cobertura"]))
        {
          $payload = json_decode($_POST["payload"],true);
          $cobertura = $_POST["cobertura"];
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }

        $comment = ($cobertura == "s") ? "[STORE PME] - Cliente residente em localidade com cobertura. Preenchido dados iniciais." : "[STORE PME] - Cliente residente em localidade sem cobertura. Manifestou interesse em deixar contato salvo.";
        //payload mount
        $prepareToSend = '{
            "fields": {
                "TITLE": "LOJA ONLINE - AUTOMAÇÃO DE VENDAS [PME]",
                "NAME": "'.$payload["NAME"].'",
                "UF_CRM_1578521856": "'.$payload["UF_CRM_1578521856"].'",
                "UF_CRM_1578510751": "'.$payload["UF_CRM_1578510751"].'",
                "UF_CRM_1578511012": "'.$payload["UF_CRM_1578511012"].'",
                "UF_CRM_1582805357": "'.$payload["UF_CRM_1582805357"].'",
                "PHONE": [
                    {
                        "VALUE": "'.$payload["PHONE"].'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "EMAIL": [
                    {
                        "VALUE": "'.$payload["EMAIL"].'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "OPENED": "Y",
                "COMMENTS": "'.$comment.'",
                "TYPE_ID": "CLIENT",
                "ASSIGNED_BY_ID": "1012",
                "SOURCE_ID": "STORE",
                "UTM_SOURCE": "'.$payload["UTM_SOURCE"].'",
                "UTM_MEDIUM": "'.$payload["UTM_MEDIUM"].'",
                "UTM_CAMPAIGN": "'.$payload["UTM_CAMPAIGN"].'",
                "UTM_CONTENT": "'.$payload["UTM_CONTENT"].'",
                "UTM_TERM": "'.$payload["UTM_TERM"].'"
            }
        }';

        $sendToBitrix = curl_bitrix_lead_add($prepareToSend);
        $sendToBitrix = json_decode($sendToBitrix,true);

        if(isset($sendToBitrix["result"]) and ($sendToBitrix["result"] != "" or !empty($sendToBitrix["result"])))
        {
          $lead_id = $sendToBitrix["result"];
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "lead_id" => $lead_id), true);
          exit;
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Falha ao salvar dados."), true);
          exit;
        }
        exit;
        break;
      case "buscaPlanoDep":
        if(isset($_POST["plano_escolhido"]) and isset($_POST["idade"]) and $_POST["idade"] != ""){
          $catalog_id = null;
          $idade = $_POST["idade"];
          $plano = json_decode($_POST["plano_escolhido"],true);

          $payload_alternativo = '{
            "order": {
                "NAME": "ASC"
            },
            "filter": {
                "PROPERTY_317": {
                    "value": "'.getCodIdade($idade).'"
                },
                "PROPERTY_161": {
                    "value": "'.$plano["PROPERTY_161"]["value"].'"
                },
                "PROPERTY_321": {
                    "value": "'.$plano["PROPERTY_321"]["value"].'"
                },
                "PROPERTY_366": {
                    "value": "'.$plano["PROPERTY_366"]["value"].'"
                },
                "PROPERTY_322": {
                    "value": "'.$plano["PROPERTY_322"]["value"].'"
                },
                "PROPERTY_319": {
                  "value": "265"
                }
            },
            "select": [
                "ID",
                "NAME",
                "PLANO",
                "PRICE",
                "SECTION_ID"
            ]
          }';

          // $payload = '{
          //   "order": {
          //     "NAME": "ASC"
          //   },
          //   "filter": {
          //     "NAME": {
          //       "value": "'.$_POST["nome_plano"].'"
          //     },
          //     "PROPERTY_370": {
          //       "value": "'.$_POST["uf"].'"
          //     },
          //     "PROPERTY_317": {
          //       "value": "'.getCodIdade($idade).'"
          //     },
          //     "CATALOG_ID": {
          //       "value": "'.$catalog_id.'"
          //     }
          //   },
          //   "select": [
          //     "NAME",
          //     "PRICE"
          //   ]
          // }';

          $getFromBitrix = curl_bitrix_method("crm.product.list",$payload_alternativo);
          $resultPlanos = json_decode($getFromBitrix,true);
          $resultPlanos = $resultPlanos["result"][0];

          // //teste//
          // header('Content-Type: application/json');
          // echo json_encode(array("error" => "true", "debug" => $resultPlanos), true);
          // exit;
          // //fim teste//
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "plano" => $resultPlanos), true);
          exit;
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "buscaEntidade":
        if(isset($_POST["payload"]))
        {
          $payload = json_decode($_POST["payload"],true);
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }

        $prepareToSend = '{
          "order": {
            "NAME": "ASC"
          },
          "filter": {
            "NAME": {
              "value": "'.$profissao.'"
            },
            "SECTION_ID": {
              "value": "156"
            },
            "PROPERTY_370": {
              "value": "'.$uf.'"
            }
          },
          "select": [
            "ID",
            "NAME",
            "SECTION_ID",
            "PROPERTY_324",
            "PROPERTY_326",
            "PROPERTY_368"
          ]
        }';

        $getFromBitrix = curl_bitrix_method("crm.product.list",$prepareToSend);
        $resultPlanos = json_decode($getFromBitrix,true);
        $resultPlanos = $resultPlanos["result"];

        if(empty($resultPlanos))
        {
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "data" => $resultPlanos[0]), true);
          exit;
        }

        exit;
        break;
      case "buscaPlano":
        if(isset($_POST["id_plano"]) and $_POST["id_plano"] != ""){
          $id_plano = $_POST["id_plano"];
          $url = "https://waydigital.bitrix24.com.br/rest/43/6jge2t8869uoz5kr/crm.product.get?id=".$id_plano;
          $buscaPlano = json_decode(curl_rest($url),true);
          $buscaPlano = $buscaPlano["result"];
          $nome_plano = $buscaPlano["NAME"];
          $preco_plano = $buscaPlano["PRICE"];
          $operadora = $buscaPlano["PROPERTY_322"]["value"];
          $imagem = ($operadora == 294) ? "assets/img/logo-unimed-natal.png" : "assets/img/logo-unimed-recife.png";

          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "nome_plano" => $nome_plano, "preco_plano" => "R$ ".number_format($preco_plano,2,",","."), "imagem" => $imagem, "operadora" => $operadora), true);
          exit;

        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "buscaPlanos2":
        $payload = null;
        $cidade = null;
        $props = json_decode(file_get_contents('property_fields.json'), true);
        $props = $props["result"];
        if(isset($_POST["payload"]))
        {
          $infoCustomer = json_decode($_POST["payload"],true);

          $_operadoras_imgs = array();
          $templatesDocs = array();
          $operadoras_venda = array();
          $operadoras_venda_nome = array();

          $buscaOperadoras = mysqli_query($conexao,"select * from operadoras where xml_id = 8347");

          while($rsOpe=mysqli_fetch_array($buscaOperadoras))
          {
            $xmlid = $rsOpe["xml_id"];
            $valueid = $rsOpe["value_id"];
            $imgplan = $rsOpe["img"];
            $nomeOpe = $rsOpe["nome"];
            $docsId = json_decode($rsOpe["id_docs"],true);
            
            $_operadoras_imgs["$xmlid"] = $imgplan;
            $operadoras_venda_nome["$xmlid"] = $nomeOpe;
            $operadoras_venda[] = $xmlid;
            $templatesDocs["$xmlid"] = $docsId;
          }

          $payload = '{
            "order": {
              "NAME": "ASC"
            },
            "filter": {
              "PROPERTY_319": {
                "value": "265"
              },
              "PROPERTY_413": {
                "value": "555"
              },
              "PROPERTY_425": {
                "value": "533"
              }
            },
            "select": [
              "NAME",
              "PRICE",
              "PROPERTY_159",
              "PROPERTY_161",
              "PROPERTY_163",
              "PROPERTY_317",
              "PROPERTY_319",
              "PROPERTY_321",
              "PROPERTY_322",
              "PROPERTY_324",
              "PROPERTY_366",
              "PROPERTY_370",
              "PROPERTY_378",
              "PROPERTY_380",
              "PROPERTY_382",
              "PROPERTY_384",
              "PROPERTY_386",
              "PROPERTY_410",
              "PROPERTY_408"
            ]
          }';

          $getFromBitrix = curl_bitrix_method("crm.product.list",$payload);
          $_resultPlanos = json_decode($getFromBitrix,true);
          $resultPlanos = $_resultPlanos["result"];
          $acabou = false;
          while(!$acabou)
          {            
            if(isset($_resultPlanos["next"]))
            {
              $next = ',"start":"'.$_resultPlanos["next"].'"';

              $payload = '{
                "order": {
                  "NAME": "ASC"
                },
                "filter": {
                  "PROPERTY_319": {
                    "value": "265"
                  },
                  "PROPERTY_413": {
                    "value": "555"
                  },
                  "PROPERTY_425": {
                    "value": "533"
                  }
                },
                "select": [
                  "NAME",
                  "PRICE",
                  "PROPERTY_159",
                  "PROPERTY_161",
                  "PROPERTY_163",
                  "PROPERTY_317",
                  "PROPERTY_319",
                  "PROPERTY_321",
                  "PROPERTY_322",
                  "PROPERTY_324",
                  "PROPERTY_366",
                  "PROPERTY_370",
                  "PROPERTY_378",
                  "PROPERTY_380",
                  "PROPERTY_382",
                  "PROPERTY_384",
                  "PROPERTY_386",
                  "PROPERTY_410",
                  "PROPERTY_408"
                ]
                '.$next.'
              }';

              $getFromBitrix = curl_bitrix_method("crm.product.list",$payload);
              $_resultPlanos = json_decode($getFromBitrix,true);
              foreach($_resultPlanos["result"] as $result){
                $resultPlanos[] = $result;
              }

              if(!isset($_resultPlanos["next"])){
                $acabou = true;
              }
            }else{
              $acabou = true;
            }
          }

          $payloadPropPlano = '{
            "order": {
                "SORT": "ASC"
            },
            "filter": {
                "NAME": "Plano",
                "ID": "321"
            }
          }';

          $getPropPlano = curl_bitrix_method("crm.product.property.list",$payloadPropPlano);
          $resultPropPlano = json_decode($getPropPlano,true);
          $resultPropPlano = $resultPropPlano["result"][0]["VALUES"];

          $payloadPropOperadora = '{
              "order": {
                  "SORT": "ASC"
              },
              "filter": {
                  "NAME": "Operadora",
                  "ID": "322"
              }
          }
          ';

          $getPropOperadora = curl_bitrix_method("crm.product.property.list",$payloadPropOperadora);
          $resultPropOperadora = json_decode($getPropOperadora,true);
          $resultPropOperadora = $resultPropOperadora["result"][0]["VALUES"];

          //montagem html planos
            $html_planos = "";            
            $line = 1;
            foreach ($resultPlanos as $plano) {

              $prop321 = intval($plano["PROPERTY_321"]["value"]);
              $prop322 = intval($plano["PROPERTY_322"]["value"]);
              $planoNome = $resultPropPlano[$prop321]["VALUE"];
              $planoID = $resultPropPlano[$prop321]["XML_ID"];
              $operadoraID = $resultPropOperadora[$prop322]["XML_ID"];
              //$resultPropPlano[$plano["PROPERTY_321"]["value"]]["XML_ID"]

              // if($plano["PROPERTY_408"][0]["value"] !== null and $plano["PROPERTY_408"][0]["value"] !== "")
              // {
              //   if(strpos(convertem($plano["PROPERTY_408"][0]["value"]), $infoCustomer["UF_CRM_1578511012"]) === false)
              //   {
              //     continue;
              //   }
              // }

              $plano["planoID"] = $planoID;
              $plano["operadoraID"] = $operadoraID;
              $plano["NAME"] = $planoNome;
              $plano["imgSrc"] = $_operadoras_imgs["$operadoraID"];
              $plano["templates_docs"] = $templatesDocs["$operadoraID"];

              if (in_array($plano["operadoraID"], $operadoras_venda))
              {
                $html_planos .= '
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 filter acomoda'.$plano["PROPERTY_161"]["value"].' copart'.$plano["PROPERTY_366"]["value"].' " data-order="'.$line.'" data-price="'.$plano["PRICE"].'" data-operadoraid="'.$operadoraID.'">
                  <table class="borda_plano">
                    <tr>
                        <td height="5"></td>
                    </tr>
                    <tr>
                        <td><img style="padding:0 5px;" width="98" src="'.$plano["imgSrc"].'"></td>
                        <td>
                            <table>
                                <tr>
                                    <td class="texto3"><strong>'.$plano["NAME"].'</strong></td>
                                </tr>
                                <tr>
                                    <td class="texto3"><strong>ANS:</strong> '.$plano["PROPERTY_163"]["value"].'</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><img src="assets/img/fio.jpg" width="90%" height="2"></center></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="borda_plano_inter">
                            <table class="borda_plano_inter2">
                                <tr>
                                    <td height="10"></td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_161"]["values"][$plano["PROPERTY_161"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_366"]["values"][$plano["PROPERTY_366"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_159"]["values"][$plano["PROPERTY_159"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto3">&nbsp;Ambulatorial, Hospitalar</td>
                                </tr>
                                <tr>
                                    <td height="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="texto2"><strong>R$ '.number_format($plano["PRICE"],2,",",".").'</strong></td>
                        <td><input type="button" name="next" class="btn filter-button2 choosePlan" value="Escolher" data-plano=\''.json_encode($plano).'\'>  </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="texto2"><strong><a href="'.$plano["PROPERTY_382"]["value"].'" target="_blank">Ver Detalhes</a></strong></td>
                    </tr>
                  </table>
                </div>
                ';
                $line++;
              }
            }

          //fim montagem
          $retornaEntidades = "false";
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "operadoras_venda" => $operadoras_venda_nome, "entidades" => $retornaEntidades, "data" => $html_planos, "payloadUsed" => $payload), true);
          exit;

        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        break;
      case "buscaPlanos":
        $payload = null;
        $cidade = null;
        $props = json_decode(file_get_contents('property_fields.json'), true);
        $props = $props["result"];
        if(isset($_POST["payload"]))
        {
          $infoCustomer = json_decode($_POST["payload"],true);

          $_operadoras_imgs = array();
          $templatesDocs = array();
          $operadoras_venda = array();
          $operadoras_venda_nome = array();

          $buscaOperadoras = mysqli_query($conexao,"select * from operadoras where xml_id = 8347");

          while($rsOpe=mysqli_fetch_array($buscaOperadoras))
          {
            $xmlid = $rsOpe["xml_id"];
            $valueid = $rsOpe["value_id"];
            $imgplan = $rsOpe["img"];
            $nomeOpe = $rsOpe["nome"];
            $docsId = json_decode($rsOpe["id_docs"],true);
            
            $_operadoras_imgs["$xmlid"] = $imgplan;
            $operadoras_venda_nome["$xmlid"] = $nomeOpe;
            $operadoras_venda[] = $xmlid;
            $templatesDocs["$xmlid"] = $docsId;
          }

          $payload = '{
            "order": {
              "NAME": "ASC"
            },
            "filter": {
              "PROPERTY_370": {
                "value": "'.$infoCustomer["UF_CRM_1582805357"].'"
              },
              "PROPERTY_319": {
                "value": "265"
              },
              "PROPERTY_317": {
                "value": "'.getCodIdade($infoCustomer["IDADE"]).'"
              },
              "PROPERTY_413": {
                "value": "555"
              },
              "PROPERTY_425": {
                "value": "533"
              }
            },
            "select": [
              "NAME",
              "PRICE",
              "PROPERTY_159",
              "PROPERTY_161",
              "PROPERTY_163",
              "PROPERTY_317",
              "PROPERTY_319",
              "PROPERTY_321",
              "PROPERTY_322",
              "PROPERTY_324",
              "PROPERTY_366",
              "PROPERTY_370",
              "PROPERTY_378",
              "PROPERTY_380",
              "PROPERTY_382",
              "PROPERTY_384",
              "PROPERTY_386",
              "PROPERTY_410",
              "PROPERTY_408"
            ]
          }';

          $getFromBitrix = curl_bitrix_method("crm.product.list",$payload);
          $_resultPlanos = json_decode($getFromBitrix,true);
          $resultPlanos = $_resultPlanos["result"];
          $acabou = false;
          while(!$acabou)
          {            
            if(isset($_resultPlanos["next"]))
            {
              $next = ',"start":"'.$_resultPlanos["next"].'"';

              $payload = '{
                "order": {
                  "NAME": "ASC"
                },
                "filter": {
                  "PROPERTY_370": {
                    "value": "'.$infoCustomer["UF_CRM_1582805357"].'"
                  },
                  "PROPERTY_319": {
                    "value": "265"
                  },
                  "PROPERTY_317": {
                    "value": "'.getCodIdade($infoCustomer["IDADE"]).'"
                  },
                  "PROPERTY_413": {
                    "value": "555"
                  },
                  "PROPERTY_425": {
                    "value": "533"
                  }
                },
                "select": [
                  "NAME",
                  "PRICE",
                  "PROPERTY_159",
                  "PROPERTY_161",
                  "PROPERTY_163",
                  "PROPERTY_317",
                  "PROPERTY_319",
                  "PROPERTY_321",
                  "PROPERTY_322",
                  "PROPERTY_324",
                  "PROPERTY_366",
                  "PROPERTY_370",
                  "PROPERTY_378",
                  "PROPERTY_380",
                  "PROPERTY_382",
                  "PROPERTY_384",
                  "PROPERTY_386",
                  "PROPERTY_410",
                  "PROPERTY_408"
                ]
                '.$next.'
              }';

              $getFromBitrix = curl_bitrix_method("crm.product.list",$payload);
              $_resultPlanos = json_decode($getFromBitrix,true);
              foreach($_resultPlanos["result"] as $result){
                $resultPlanos[] = $result;
              }

              if(!isset($_resultPlanos["next"])){
                $acabou = true;
              }
            }else{
              $acabou = true;
            }
          }

          $payloadPropPlano = '{
            "order": {
                "SORT": "ASC"
            },
            "filter": {
                "NAME": "Plano",
                "ID": "321"
            }
          }';

          $getPropPlano = curl_bitrix_method("crm.product.property.list",$payloadPropPlano);
          $resultPropPlano = json_decode($getPropPlano,true);
          $resultPropPlano = $resultPropPlano["result"][0]["VALUES"];

          $payloadPropOperadora = '{
              "order": {
                  "SORT": "ASC"
              },
              "filter": {
                  "NAME": "Operadora",
                  "ID": "322"
              }
          }
          ';

          $getPropOperadora = curl_bitrix_method("crm.product.property.list",$payloadPropOperadora);
          $resultPropOperadora = json_decode($getPropOperadora,true);
          $resultPropOperadora = $resultPropOperadora["result"][0]["VALUES"];

          //montagem html planos
            $html_planos = "";            
            $line = 1;
            foreach ($resultPlanos as $plano) {

              $prop321 = intval($plano["PROPERTY_321"]["value"]);
              $prop322 = intval($plano["PROPERTY_322"]["value"]);
              $planoNome = $resultPropPlano[$prop321]["VALUE"];
              $planoID = $resultPropPlano[$prop321]["XML_ID"];
              $operadoraID = $resultPropOperadora[$prop322]["XML_ID"];
              //$resultPropPlano[$plano["PROPERTY_321"]["value"]]["XML_ID"]

              if($plano["PROPERTY_408"][0]["value"] !== null and $plano["PROPERTY_408"][0]["value"] !== "")
              {
                if(strpos(convertem($plano["PROPERTY_408"][0]["value"]), $infoCustomer["UF_CRM_1578511012"]) === false)
                {
                  continue;
                }
              }

              $plano["planoID"] = $planoID;
              $plano["operadoraID"] = $operadoraID;
              $plano["NAME"] = $planoNome;
              $plano["imgSrc"] = $_operadoras_imgs["$operadoraID"];
              $plano["templates_docs"] = $templatesDocs["$operadoraID"];

              if (in_array($plano["operadoraID"], $operadoras_venda))
              {
                $html_planos .= '
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 filter acomoda'.$plano["PROPERTY_161"]["value"].' copart'.$plano["PROPERTY_366"]["value"].' " data-order="'.$line.'" data-price="'.$plano["PRICE"].'" data-operadoraid="'.$operadoraID.'">
                  <table class="borda_plano">
                    <tr>
                        <td height="5"></td>
                    </tr>
                    <tr>
                        <td><img style="padding:0 5px;" width="98" src="'.$plano["imgSrc"].'"></td>
                        <td>
                            <table>
                                <tr>
                                    <td class="texto3"><strong>'.$plano["NAME"].'</strong></td>
                                </tr>
                                <tr>
                                    <td class="texto3"><strong>ANS:</strong> '.$plano["PROPERTY_163"]["value"].'</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><img src="assets/img/fio.jpg" width="90%" height="2"></center></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="borda_plano_inter">
                            <table class="borda_plano_inter2">
                                <tr>
                                    <td height="10"></td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_161"]["values"][$plano["PROPERTY_161"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_366"]["values"][$plano["PROPERTY_366"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto4">&nbsp;'.$props["PROPERTY_159"]["values"][$plano["PROPERTY_159"]["value"]]["VALUE"].'</td>
                                </tr>
                                <tr>
                                    <td class="texto3">&nbsp;Ambulatorial, Hospitalar</td>
                                </tr>
                                <tr>
                                    <td height="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="texto2"><strong>R$ '.number_format($plano["PRICE"],2,",",".").'</strong></td>
                        <td><input type="button" name="next" class="btn filter-button2 choosePlan" value="Escolher" data-plano=\''.json_encode($plano).'\'>  </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="texto2"><strong><a href="'.$plano["PROPERTY_382"]["value"].'" target="_blank">Ver Detalhes</a></strong></td>
                    </tr>
                  </table>
                </div>
                ';
                $line++;
              }
            }

          //fim montagem
          $retornaEntidades = "false";
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "operadoras_venda" => $operadoras_venda_nome, "entidades" => $retornaEntidades, "data" => $html_planos, "payloadUsed" => $payload), true);
          exit;

        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        break;
      case "now":
        $sql = mysqli_query($conexao,"select now() as 'data'");
        while($dados=mysqli_fetch_array($sql))
        {
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false","data" => $dados["data"]), true);
          exit;
        }
        if(!$conexao){
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true","error_msg" => mysqli_connect_error()), true);
          exit;
        }
        break;
      case "getFichaAssociacao":
        if(isset($_POST["ficha_id"]) and isset($_POST["payload"]))
        {
        
          $id_ficha = $_POST["ficha_id"];
          $deal_id = $_POST["deal_id"];
          $payload = json_decode($_POST["payload"],true);

          $payloadPegaFicha = '{
            "id": "'.$id_ficha.'"
          }';

          $pegou_ficha = false;
          $url_pdf = false;
          $key_doc = false;
          $number_tries = 0;
          $erro_pega_ficha = false;
          while($pegou_ficha == false)
          {
            if($number_tries > 1){
              $erro_pega_ficha = true;
              break;
            }
            sleep(5);
            $pega_ficha = curl_bitrix_method("crm.documentgenerator.document.get", $payloadPegaFicha);
            $pega_ficha = json_decode($pega_ficha,true);

            if(isset($pega_ficha["result"]["document"]["downloadUrlMachine"])){
              $url_pdf = $pega_ficha["result"]["document"]["downloadUrlMachine"];
              $pegou_ficha = true;
            }
            $number_tries++;
          }

          if($pegou_ficha)
          {
            $payloadConvertePDF = '{
              "Parameters": [
                  {
                      "Name": "File",
                      "FileValue": {
                          "Url": "'.$url_pdf.'"
                      }
                  }
              ]
            }';
  
            $documentPDF = json_decode(curlConvertPdf($payloadConvertePDF),true);
            if(isset($documentPDF["Files"])){
  
              
              $b64Doc = $documentPDF["Files"][0]["FileData"];
              
              //salva contato
              $arrNome = explode(" ", $payload["NAME"]);
              $nome = strtoupper($arrNome[0]);
              unset($arrNome[0]);
              $ultimoNome = implode(" ", $arrNome);
  
              //chama clicksign
              $payloadClickSign = '{
                "document": {
                    "path": "/Ficha_Associativa_'.$id_ficha.'.pdf",
                    "content_base64": "data:application/pdf;base64,'.$b64Doc.'",
                    "deadline_at": "'.date("Y-m-d",strtotime(date("Y-m-d").' +1 days')).'T'.date("H:i:s").'-03:00",
                    "auto_close": true,
                    "locale": "pt-BR",
                    "signers": [
                        {
                            "email": "'.$payload["EMAIL"].'",
                            "sign_as": "sign",
                            "auths": [
                                "email"
                            ],
                            "name": "'.$nome.' '.$ultimoNome.'",
                            "has_documentation": true,
                            "send_email": true,
                            "message": "Olá, segue para assinatura eletrônica a sua Ficha Associativa. Ela tem o mesmo valor legal que a ficha convencional. Confirme os seus dados e por favor assine o documento para continuarmos com o processo de preenchimento da sua Proposta de Adesão."
                        }
                    ]
                }
              }';
  
  
              $sendToSign = json_decode(curlClickSign($payloadClickSign),true);
  
              if(isset($sendToSign["document"]["key"]))
              {
                $key_doc = $sendToSign["document"]["key"];
                unlink('ficha_'.$id_ficha.'.pdf');

                //update proposta
                $updProposta = mysqli_query($conexao,"update propostas set status = 'FICHA ASSOCIATIVA', keyid_ficha_associativa = '$key_doc' where deal_id = $deal_id");
                //fim update
  
                header('Content-Type: application/json');
                echo json_encode(array("error" => "false", "id_ficha" => $id_ficha, "key_doc" => $key_doc), true);
                exit;
              }else{
                header('Content-Type: application/json');
                echo json_encode(array("error" => "true", "debugPdf" => $documentPDF, "debugSign" => $sendToSign, "erro_msg" => "Falha no processo."), true);
                exit;
              }
            }else{
              header('Content-Type: application/json');
              echo json_encode(array("error" => "true", "erros" => $documentPDF , "erro_msg" => "Falha no processo."), true);
              exit;
            }
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "erro_msg" => "Falha no processo."), true);
            exit;
          }
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        break;
      case "fichaAssociacao":
        $payload = null;
        if(isset($_POST["payload"]) and $_POST["payload"] != "" and $_POST["lead_id"] != "")
        {
          $payload = json_decode($_POST["payload"],true);
          $lead_id = $_POST["lead_id"];
          $deal_id = $_POST["deal_id"];
          $contact_id = $_POST["contact_id"];
          $anexo_profissao = $_POST["proofProfessionAttachment"];

          $mime = explode(";",$anexo_profissao);
          $base64f = explode(",",$mime[1]);
          $mime = explode("/", $mime[0]);
          $ext = $mime[1];

          $props = json_decode(file_get_contents('property_fields.json'), true);
          $props = $props["result"];

          $payloadUpdContato = '{
              "id": "'.$contact_id.'",
              "fields": {
                  "UF_CRM_1583447214343": "'.$payload["UF_CRM_1583447214343"].'",
                  "UF_CRM_1583453003241": "'.$payload["UF_CRM_1583453003241"].'",
                  "UF_CRM_1583453318705": "'.$payload["UF_CRM_1583453318705"].'",
                  "UF_CRM_1583453300308": "'.$props["ESTADOS_ENT"][$payload["UF_CRM_1583453300308"]].'",
                  "UF_CRM_1583451688644": "'.$payload["UF_CRM_1583451688644"].'",
                  "UF_CRM_1583451717890": "'.$payload["UF_CRM_1583451717890"].'"
              }
          }
          ';

          $payloadUpdDeal = '{
            "id": "'.$deal_id.'",
            "fields": {
                "UF_CRM_1595520154": {
                  "fileData": [
                      "Comprovante_Profissao.'.$ext.'",
                      "'.$base64f[1].'"
                  ]
                },
                "UF_CRM_1583411966": "'.$payload["UF_CRM_1583411966"].'",
                "UF_CRM_1591131187": "'.$payload["UF_CRM_1591131187"].'",
                "UF_CRM_1582823504": "'.$payload["UF_CRM_1582823504"].'",
                "UF_CRM_1582822611": "'.$payload["UF_CRM_1582822611"].'"
            }
          }
          ';

          $updDeal = curl_bitrix_method("crm.deal.update",$payloadUpdDeal);

          $updContato = curl_bitrix_method("crm.contact.update",$payloadUpdContato);
          $updContato = json_decode($updContato,true);

          //etapa ficha
          $avancaFicha = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=ssyq1&target=DEAL_".$deal_id);

          //cria documento
          $payloadDocFicha = '{
              "templateId": "'.$payload["COD_DOC_ENTIDADE"].'",
              "entityTypeId": "2",
              "entityId": "'.$deal_id.'"
          }';
          $create_ficha = curl_bitrix_method("crm.documentgenerator.document.add", $payloadDocFicha);
          $create_ficha = json_decode($create_ficha,true);

          $id_ficha = $create_ficha["result"]["document"]["id"];
          //$id_ficha = 4517;
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "id_ficha" => $id_ficha), true);
          exit;

        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "gravaDadosDep":
        if(isset($_POST["deal_id"]) and $_POST["deal_id"] != "" and $_POST["payload"] != "")
        {
          $dependentes = json_decode($_POST["payload"],true);
          $deal_id = $_POST["deal_id"];
          $fields = false;
          if(isset($dependentes[1])){
            $fields = '
              "UF_CRM_1579894892": "'.$dependentes[1]["NAME"].'",
              "UF_CRM_1579894880": "'.$dependentes[1]["CPF"].'",
              "UF_CRM_1580133377": "'.$dependentes[1]["data_nasc"].'",
              "UF_CRM_1579895047": "'.$dependentes[1]["SEXO"].'",
              "UF_CRM_1579895112": "'.$dependentes[1]["ESTCIVIL"].'",
              "UF_CRM_1579895470": "'.$dependentes[1]["GRAU"].'",
              "UF_CRM_1579896057": "'.$dependentes[1]["NOMMAE"].'",
              "UF_CRM_1579896423": "'.$dependentes[1]["MUNNASC"].'",
              "UF_CRM_1579894925": "'.$dependentes[1]["CARDSUS"].'",
              "UF_CRM_1579894940": "'.$dependentes[1]["NASCVIVO"].'" 
            ';
          }

          if(isset($dependentes[2])){
            if($fields === false)
            {
              /*
              
              NOME COMPLETO UF_CRM_1580132727
              CPF UF_CRM_1580132713
              DATA NASCIMENTO UF_CRM_1580133197
              SEXO  UF_CRM_1580133501
              ESTADO CIVIL  UF_CRM_1580133161
              GRAU PARENTESCO UF_CRM_1580133581
              NOME DA MAE UF_CRM_1580133594
              MUNICIPIO NASCIMENTO  UF_CRM_1580133695
              CARTAO DO SUS UF_CRM_1580133074
              DECLARACAO DE NASCIDO VIVO  UF_CRM_1580133086


              */

              $fields = '
                "UF_CRM_1580132727": "'.$dependentes[2]["NAME"].'",
                "UF_CRM_1580132713": "'.$dependentes[2]["CPF"].'",
                "UF_CRM_1580133197": "'.$dependentes[2]["data_nasc"].'",
                "UF_CRM_1580133501": "'.$dependentes[2]["SEXO"].'",
                "UF_CRM_1580133161": "'.$dependentes[2]["ESTCIVIL"].'",
                "UF_CRM_1580133581": "'.$dependentes[2]["GRAU"].'",
                "UF_CRM_1580133594": "'.$dependentes[2]["NOMMAE"].'",
                "UF_CRM_1580133695": "'.$dependentes[2]["MUNNASC"].'",
                "UF_CRM_1580133074": "'.$dependentes[2]["CARDSUS"].'",
                "UF_CRM_1580133086": "'.$dependentes[2]["NASCVIVO"].'"
              ';
            }else{
              $fields .= '
              ,"UF_CRM_1580132727": "'.$dependentes[2]["NAME"].'",
              "UF_CRM_1580132713": "'.$dependentes[2]["CPF"].'",
              "UF_CRM_1580133197": "'.$dependentes[2]["data_nasc"].'",
              "UF_CRM_1580133501": "'.$dependentes[2]["SEXO"].'",
              "UF_CRM_1580133161": "'.$dependentes[2]["ESTCIVIL"].'",
              "UF_CRM_1580133581": "'.$dependentes[2]["GRAU"].'",
              "UF_CRM_1580133594": "'.$dependentes[2]["NOMMAE"].'",
              "UF_CRM_1580133695": "'.$dependentes[2]["MUNNASC"].'",
              "UF_CRM_1580133074": "'.$dependentes[2]["CARDSUS"].'",
              "UF_CRM_1580133086": "'.$dependentes[2]["NASCVIVO"].'"
              ';
            }
          }

          if(isset($dependentes[3])){
            if($fields === false)
            {
              /*
              
              NOME COMPLETO UF_CRM_1580133726
              CPF UF_CRM_1580133710
              DATA NASCIMENTO UF_CRM_1580134210
              SEXO  UF_CRM_1580134252
              ESTADO CIVIL  UF_CRM_1580133813
              GRAU PARENTESCO UF_CRM_1580134323
              NOME DA MAE UF_CRM_1580134533
              MUNICIPIO NASCIMENTO  UF_CRM_1580134576
              CARTAO DO SUS UF_CRM_1580133751
              DECLARACAO DE NASCIDO VIVO  UF_CRM_1580133764

              */

              $fields = '
                "UF_CRM_1580133726": "'.$dependentes[3]["NAME"].'",
                "UF_CRM_1580133710": "'.$dependentes[3]["CPF"].'",
                "UF_CRM_1580134210": "'.$dependentes[3]["data_nasc"].'",
                "UF_CRM_1580134252": "'.$dependentes[3]["SEXO"].'",
                "UF_CRM_1580133813": "'.$dependentes[3]["ESTCIVIL"].'",
                "UF_CRM_1580134323": "'.$dependentes[3]["GRAU"].'",
                "UF_CRM_1580134533": "'.$dependentes[3]["NOMMAE"].'",
                "UF_CRM_1580134576": "'.$dependentes[3]["MUNNASC"].'",
                "UF_CRM_1580133751": "'.$dependentes[3]["CARDSUS"].'",
                "UF_CRM_1580133764": "'.$dependentes[3]["NASCVIVO"].'"
              ';
            }else{
              $fields .= '
              ,"UF_CRM_1580133726": "'.$dependentes[3]["NAME"].'",
              "UF_CRM_1580133710": "'.$dependentes[3]["CPF"].'",
              "UF_CRM_1580134210": "'.$dependentes[3]["data_nasc"].'",
              "UF_CRM_1580134252": "'.$dependentes[3]["SEXO"].'",
              "UF_CRM_1580133813": "'.$dependentes[3]["ESTCIVIL"].'",
              "UF_CRM_1580134323": "'.$dependentes[3]["GRAU"].'",
              "UF_CRM_1580134533": "'.$dependentes[3]["NOMMAE"].'",
              "UF_CRM_1580134576": "'.$dependentes[3]["MUNNASC"].'",
              "UF_CRM_1580133751": "'.$dependentes[3]["CARDSUS"].'",
              "UF_CRM_1580133764": "'.$dependentes[3]["NASCVIVO"].'"
              ';
            }
          }

          if(isset($dependentes[4])){
            if($fields === false)
            {
              /*
              
              NOME COMPLETO UF_CRM_1580134616
              CPF UF_CRM_1580134595
              DATA NASCIMENTO UF_CRM_1580135094
              SEXO  UF_CRM_1580135122
              ESTADO CIVIL  UF_CRM_1580135074
              GRAU PARENTESCO UF_CRM_1580135174
              NOME DA MAE UF_CRM_1580135191
              MUNICIPIO NASCIMENTO  UF_CRM_1580135288
              CARTAO DO SUS UF_CRM_1580134651
              DECLARACAO DE NASCIDO VIVO  UF_CRM_1580135026

              */

              $fields = '
                "UF_CRM_1580134616": "'.$dependentes[4]["NAME"].'",
                "UF_CRM_1580134595": "'.$dependentes[4]["CPF"].'",
                "UF_CRM_1580135094": "'.$dependentes[4]["data_nasc"].'",
                "UF_CRM_1580135122": "'.$dependentes[4]["SEXO"].'",
                "UF_CRM_1580135074": "'.$dependentes[4]["ESTCIVIL"].'",
                "UF_CRM_1580135174": "'.$dependentes[4]["GRAU"].'",
                "UF_CRM_1580135191": "'.$dependentes[4]["NOMMAE"].'",
                "UF_CRM_1580135288": "'.$dependentes[4]["MUNNASC"].'",
                "UF_CRM_1580134651": "'.$dependentes[4]["CARDSUS"].'",
                "UF_CRM_1580135026": "'.$dependentes[4]["NASCVIVO"].'"
              ';
            }else{
              $fields .= '
              ,"UF_CRM_1580134616": "'.$dependentes[4]["NAME"].'",
              "UF_CRM_1580134595": "'.$dependentes[4]["CPF"].'",
              "UF_CRM_1580135094": "'.$dependentes[4]["data_nasc"].'",
              "UF_CRM_1580135122": "'.$dependentes[4]["SEXO"].'",
              "UF_CRM_1580135074": "'.$dependentes[4]["ESTCIVIL"].'",
              "UF_CRM_1580135174": "'.$dependentes[4]["GRAU"].'",
              "UF_CRM_1580135191": "'.$dependentes[4]["NOMMAE"].'",
              "UF_CRM_1580135288": "'.$dependentes[4]["MUNNASC"].'",
              "UF_CRM_1580134651": "'.$dependentes[4]["CARDSUS"].'",
              "UF_CRM_1580135026": "'.$dependentes[4]["NASCVIVO"].'"
              ';
            }
          }

          if(isset($dependentes[5])){
            if($fields === false)
            {
              /*
              
              NOME COMPLETO UF_CRM_1580135345
              CPF UF_CRM_1580135330
              DATA NASCIMENTO UF_CRM_1580135444
              SEXO  UF_CRM_1580135608
              ESTADO CIVIL  UF_CRM_1580135427
              GRAU PARENTESCO UF_CRM_1580135667
              NOME DA MAE UF_CRM_1580135812
              MUNICIPIO NASCIMENTO  UF_CRM_1580135834
              CARTAO DO SUS UF_CRM_1580135370
              DECLARACAO DE NASCIDO VIVO  UF_CRM_1580135381

              */

              $fields = '
                "UF_CRM_1580135345": "'.$dependentes[5]["NAME"].'",
                "UF_CRM_1580135330": "'.$dependentes[5]["CPF"].'",
                "UF_CRM_1580135444": "'.$dependentes[5]["data_nasc"].'",
                "UF_CRM_1580135608": "'.$dependentes[5]["SEXO"].'",
                "UF_CRM_1580135427": "'.$dependentes[5]["ESTCIVIL"].'",
                "UF_CRM_1580135667": "'.$dependentes[5]["GRAU"].'",
                "UF_CRM_1580135812": "'.$dependentes[5]["NOMMAE"].'",
                "UF_CRM_1580135834": "'.$dependentes[5]["MUNNASC"].'",
                "UF_CRM_1580135370": "'.$dependentes[5]["CARDSUS"].'",
                "UF_CRM_1580135381": "'.$dependentes[5]["NASCVIVO"].'"
              ';
            }else{
              $fields .= '
              ,"UF_CRM_1580135345": "'.$dependentes[5]["NAME"].'",
              "UF_CRM_1580135330": "'.$dependentes[5]["CPF"].'",
              "UF_CRM_1580135444": "'.$dependentes[5]["data_nasc"].'",
              "UF_CRM_1580135608": "'.$dependentes[5]["SEXO"].'",
              "UF_CRM_1580135427": "'.$dependentes[5]["ESTCIVIL"].'",
              "UF_CRM_1580135667": "'.$dependentes[5]["GRAU"].'",
              "UF_CRM_1580135812": "'.$dependentes[5]["NOMMAE"].'",
              "UF_CRM_1580135834": "'.$dependentes[5]["MUNNASC"].'",
              "UF_CRM_1580135370": "'.$dependentes[5]["CARDSUS"].'",
              "UF_CRM_1580135381": "'.$dependentes[5]["NASCVIVO"].'"
              ';
            }
          }

          $payloadUpdDeal = '{
            "id": "'.$deal_id.'",
            "fields": {
                '.$fields.'
            }
          }';

          $updDeal = json_decode(curl_bitrix_method("crm.deal.update",$payloadUpdDeal),true);

          if(isset($updDeal["result"]) and $updDeal["result"] === true)
          {
            //trigger to info dep
            $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=d7nsw&target=DEAL_".$deal_id);

            header('Content-Type: application/json');
            echo json_encode(array("error" => "false"), true);
            exit;
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "erro_msg" => $updDeal), true);
            exit;
          }
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "baixaRascunho":
        if(isset($_POST["rascunho_id"]) and $_POST["rascunho_id"] != "")
        {
          $id_rascunho = $_POST["rascunho_id"];

          $payloadPegaRascunho = '{
            "id": "'.$id_rascunho.'"
          }';
          
          $pegou_rascunho = false;
          $url_pdf = false;
          $number_tries = 0;
          $erro_pega_rascunho = false;
          $arrerro = array();

          $pega_rascunho = curl_bitrix_method("crm.documentgenerator.document.get", $payloadPegaRascunho);
          $pega_rascunho = json_decode($pega_rascunho,true);

          if(isset($pega_rascunho["result"]["document"]["downloadUrlMachine"])){
            $url_pdf = $pega_rascunho["result"]["document"]["downloadUrlMachine"];
            $pegou_rascunho = true;
          }

          
          if($pegou_rascunho){

            $payloadConvertePDF = '{
              "Parameters": [
                  {
                      "Name": "File",
                      "FileValue": {
                          "Url": "'.$url_pdf.'"
                      }
                  }
              ]
            }';

            $documentPDF = json_decode(curlConvertPdf($payloadConvertePDF),true);
            if(isset($documentPDF["Files"])){

              $ifp = fopen( "proposta_rascunho_".$id_rascunho.'.pdf', 'wb' ); 
              // we could add validation here with ensuring count( $data ) > 1
              fwrite( $ifp, base64_decode( $documentPDF["Files"][0]["FileData"] ) );

              // clean up the file resource
              fclose( $ifp ); 

              header('Content-Type: application/json');
              echo json_encode(array("error" => "false", "rascunho_id" => $id_rascunho), true);
              exit;
            }else{
              header('Content-Type: application/json');
              echo json_encode(array("error" => "true", "erro_msg" => "Falha no processo.", "errorTrace" => $documentPDF), true);
              exit;
            }
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "erro_msg" => "Falha no processo."), true);
            exit;
          }
        }
        break;
        case "baixaProposta":
          if(isset($_POST["proposta_id"]) and $_POST["proposta_id"] != "")
          {
            $id_proposta = $_POST["proposta_id"];
            $payload = json_decode($_POST["payload"],true);
  
            $payloadPegaProposta = '{
              "id": "'.$id_proposta.'"
            }';
            
            $pegou_proposta = false;
            $url_pdf = false;
            $number_tries = 0;
            $erro_pega_proposta = false;
            $arrerro = array();
  
            $pega_proposta = curl_bitrix_method("crm.documentgenerator.document.get", $payloadPegaProposta);
            $pega_proposta = json_decode($pega_proposta,true);
  
            if(isset($pega_proposta["result"]["document"]["downloadUrlMachine"])){
              $url_pdf = $pega_proposta["result"]["document"]["downloadUrlMachine"];
              $pegou_proposta = true;
            }
  
            

            if($pegou_proposta){
  
              $payloadConvertePDF = '{
                "Parameters": [
                    {
                        "Name": "File",
                        "FileValue": {
                            "Url": "'.$url_pdf.'"
                        }
                    }
                ]
              }';
  
              $documentPDF = json_decode(curlConvertPdf($payloadConvertePDF),true);
              if(isset($documentPDF["Files"])){
  
                $ifp = fopen( "proposta_final_".$id_proposta.'.pdf', 'wb' ); 
                // we could add validation here with ensuring count( $data ) > 1
                fwrite( $ifp, base64_decode( $documentPDF["Files"][0]["FileData"] ) );
  
                // clean up the file resource
                fclose( $ifp ); 

                $file = file('proposta_final_'.$id_proposta.'.pdf');
                $endfile= trim($file[count($file) - 1]);
                $n="%%EOF";
                if (true) {
    
                  $b64Doc = $documentPDF["Files"][0]["FileData"];

                  $arrNome = explode(" ", $payload["razao_social"]);
                  $nome = strtoupper($arrNome[0]);
                  unset($arrNome[0]);
                  $ultimoNome = implode(" ", $arrNome);
                  //chama clicksign
                  // $payloadClickSign = '{
                  //   "document": {
                  //       "path": "/Proposta_final_'.$id_proposta.'.pdf",
                  //       "content_base64": "data:application/pdf;base64,'.$b64Doc.'",
                  //       "deadline_at": "'.date("Y-m-d",strtotime(date("Y-m-d").' +1 days')).'T'.date("H:i:s").'-03:00",
                  //       "auto_close": true,
                  //       "locale": "pt-BR",
                  //       "signers": [
                  //           {
                  //               "email": "'.$payload["email"].'",
                  //               "sign_as": "sign",
                  //               "auths": [
                  //                   "email"
                  //               ],
                  //               "name": "teste",
                  //               "has_documentation": true,
                  //               "send_email": true,
                  //               "message": "Olá, segue para assinatura eletrônica o seu contrato. Ela tem o mesmo valor legal que a proposta convencional. Confirme os seus dados e por favor assine o documento para continuarmos com o processo de implantação da sua Proposta de Adesão."
                  //           }
                  //       ]
                  //   }
                  // }';

                 $payloadClickSign = '{
                              "document": {
                                  "path": "/Proposta_final_'.$id_proposta.'.pdf",
                                  "content_base64": "data:application/pdf;base64,'.$b64Doc.'",
                                  "deadline_at": "'.date("Y-m-d",strtotime(date("Y-m-d").' +1 days')).'T'.date("H:i:s").'-03:00",
                                  "auto_close": true,
                                  "locale": "pt-BR",
                                  "signers": [
                                      {
                                          "email": "'.$payload["email"].'",
                                          "sign_as": "sign",
                                          "auths": [
                                              "email"
                                          ],
                                          "name": "Proposta CNPJ",
                                          "has_documentation": true,
                                          "send_email": true,
                                          "message": "Olá, segue para assinatura eletrônica o seu contrato. Ela tem o mesmo valor legal que a proposta convencional. Confirme os seus dados e por favor assine o documento para continuarmos com o processo de implantação da sua Proposta de Adesão."
                                      }
                                  ]
                              }
                            }';



                  $sendToSign = json_decode(curlClickSign($payloadClickSign),true);

                  $key_doc = false;
                  if(isset($sendToSign["document"]["key"]))
                  {
                    $key_doc = $sendToSign["document"]["key"];
                    $updProposta = mysqli_query($conexao,"update propostas set keyid_proposta = '$key_doc', status = 'PROPOSTA GERADA' where deal_id = ".$_POST["deal_id"]);
                  }

                  header('Content-Type: application/json');
                  echo json_encode(array("error" => "false", "key_id_proposta" => $key_doc, "proposta_id" => $id_proposta), true);
                  exit;   
                } else {
                  unlink('proposta_rascunho_'.$id_rascunho.'.pdf');
                  header('Content-Type: application/json');
                  echo json_encode(array("error" => "true","erro_msg" => "Falha no processo."), true);
                  exit;
                }
              }else{
                header('Content-Type: application/json');
                echo json_encode(array("error" => "true", "erro_msg" => "Falha no processo.", "errorTrace" => $documentPDF), true);
                exit;
              }
            }else{
              header('Content-Type: application/json');
              echo json_encode(array("error" => "true", "erro_msg" => "Falha no processo."), true);
              exit;
            }
          }
          break;
      case "geraRascunho":
        if(true)
        {
          $deal_id = $_POST["deal_id"];
          $template = $_POST["template"];



          $buscaOperadoras = mysqli_query($conexao,"select * from operadoras where xml_id = 8347");

          while($rsOpe=mysqli_fetch_array($buscaOperadoras))
          {
            $xmlid = $rsOpe["xml_id"];
            $valueid = $rsOpe["value_id"];
            $imgplan = $rsOpe["img"];
            $nomeOpe = $rsOpe["nome"];
            $docsId = json_decode($rsOpe["id_docs"],true);
            
            $_operadoras_imgs["$xmlid"] = $imgplan;
            $operadoras_venda_nome["$xmlid"] = $nomeOpe;
            $operadoras_venda[] = $xmlid;
            $templatesDocs["$xmlid"] = $docsId;
          }

          $rascunho_template = $templatesDocs['8347']['uf']['default']['pj']['rascunho'];

          $cnpj = $_POST["cnpj"];

          $payload_busca_cnpj = '{
            "filter": {
                "UF_CRM_1586990421": "'.$cnpj.'"
            }
          }';

          $getFromBitrix = curl_bitrix_method("crm.company.list",$payload_busca_cnpj);
          $resultCompany = json_decode($getFromBitrix,true);
          
          $company_id = $resultCompany["result"][0]["ID"];
        

          $payloadDocRascunho = '{
              "templateId": "'.$rascunho_template.'",
              "entityTypeId": "4",
              "entityId": "'.$company_id.'"
          }';
          $create_rascunho = curl_bitrix_method("crm.documentgenerator.document.add", $payloadDocRascunho);
          $create_rascunho = json_decode($create_rascunho,true);
          
          $id_rascunho = $create_rascunho["result"]["document"]["id"];

          if($id_rascunho === null)
          {
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "error_msg" => $create_rascunho), true);
            exit;
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "false", "rascunho_id" => $id_rascunho), true);
            exit;
          }
          
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "geraProposta":
        if(isset($_POST["deal_id"]) and $_POST["deal_id"] != "")
        {
          $deal_id = $_POST["deal_id"];
          $template = $_POST["template"];

          $avancaPropostaFinal = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=vwqsz&target=DEAL_".$deal_id);

          $payloadDocProposta = '{
              "templateId": "'.$template.'",
              "entityTypeId": "4",
              "entityId": "'.$deal_id.'"
          }';
          $create_proposta = curl_bitrix_method("crm.documentgenerator.document.add", $payloadDocProposta);
          $create_proposta = json_decode($create_proposta,true);

          $id_proposta = $create_proposta["result"]["document"]["id"];

          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "proposta_id" => $id_proposta), true);
          exit;
          
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "uploadAnexos":
        if(isset($_POST["deal_id"]) and $_POST["deal_id"] != "")
        {
          $deal_id = $_POST["deal_id"];
          $qtDep = $_POST["qtDep"];

          //foreach files
          $fields = false;
          foreach ($_FILES as $key => $error) {
            if(!$fields)
            {
              $fields .= '"'.$key.'": {
                "fileData": [
                    "'.$_FILES[$key]["name"].'",
                    "'.base64_encode(file_get_contents($_FILES[$key]["tmp_name"])).'"
                ]
              }';
            }else{
              $fields .= ',"'.$key.'": {
                "fileData": [
                    "'.$_FILES[$key]["name"].'",
                    "'.base64_encode(file_get_contents($_FILES[$key]["tmp_name"])).'"
                ]
              }';
            }
          }
          //fim foreach

          $payloadUpdDeal = '{
            "id": "'.$deal_id.'",
            "fields": {
                '.$fields.'
            }
          }';

          $updDeal = json_decode(curl_bitrix_method("crm.deal.update",$payloadUpdDeal),true);

          if(isset($updDeal["result"]) and $updDeal["result"] === true)
          {
            header('Content-Type: application/json');
            echo json_encode(array("error" => "false", "debug" => "deu certo"), true);
            exit;
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "erro_msg" => "Falha no envio."), true);
            exit;
          }
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        exit;
        break;
      case "uploadFicha":
        if(isset($_POST["deal_id"]) and $_POST["deal_id"] != "" and $_POST["proofEntityAttachment"] != "")
        {
          $deal_id = $_POST["deal_id"];
          $anexo_entidade = $_POST["proofEntityAttachment"];
          $payload = json_decode($_POST["payload"],true);

          $mime = explode(";",$anexo_entidade);
          $base64f = explode(",",$mime[1]);
          $mime = explode("/", $mime[0]);
          $ext = $mime[1];
          
          $payloadUpdDeal = '{
            "id": "'.$deal_id.'",
            "fields": {
                "UF_CRM_1580498362": {
                  "fileData": [
                      "Vinculo_Entidade.'.$ext.'",
                      "'.$base64f[1].'"
                  ]
                },
                "UF_CRM_1583411966": "'.$payload["UF_CRM_1583411966"].'",
                "UF_CRM_1591131187": "'.$payload["UF_CRM_1591131187"].'",
                "UF_CRM_1582823504": "'.$payload["UF_CRM_1582823504"].'"
            }
          }';

          $updDeal = json_decode(curl_bitrix_method("crm.deal.update",$payloadUpdDeal),true);
          $avancaFicha = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=ssyq1&target=DEAL_".$deal_id);

          if(isset($updDeal["result"]) and $updDeal["result"] === true)
          {
            //trigger to info dep
            $avancaFormDeps = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=nlmd1&target=DEAL_".$deal_id);

            header('Content-Type: application/json');
            echo json_encode(array("error" => "false"), true);
            exit;
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "erro_msg" => $updDeal), true);
            exit;
          }

        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        break;
      case "checkUserExists":
        if(isset($_POST["cpf"]))
        {
          $cpf = $_POST["cpf"];
          $buscaConta = mysqli_query($conexao,"select * from clientes where cpf = '$cpf'");
          
          header('Content-Type: application/json');
          echo json_encode(array("error" => "false", "hasAccount" => mysqli_num_rows($buscaConta)), true);
          exit;
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }
        break;
      case "AtualizarEmpresa":


          $cnpj = $_POST["cnpj"];

          $payload_busca_cnpj = '{
            "filter": {
                "UF_CRM_1586990421": "'.$cnpj.'"
            }
          }';

          $getFromBitrix = curl_bitrix_method("crm.company.list",$payload_busca_cnpj);
          $resultCompany = json_decode($getFromBitrix,true);

          $company_id = $resultCompany["result"][0]["ID"];


        //foreach files
          $fields = false;
          foreach ($_FILES as $key => $error) {
            if(!$fields)
            {
              $fields .= '"'.$key.'": {
                "fileData": [
                    "'.$_FILES[$key]["name"].'",
                    "'.base64_encode(file_get_contents($_FILES[$key]["tmp_name"])).'"
                ]
              }';
            }else{
              $fields .= ',"'.$key.'": {
                "fileData": [
                    "'.$_FILES[$key]["name"].'",
                    "'.base64_encode(file_get_contents($_FILES[$key]["tmp_name"])).'"
                ]
              }';
            }
          }


          if($company_id){
              $payloadContato = '{
                  "id": "'.$company_id.'",
                  "fields": {
                    ' .$fields.'
                  }
              }';

              $updDeal = curl_bitrix_method("crm.company.update",$payloadContato);
              echo $updDeal;          
          }else{
            echo "company not found";
          }
  
      break;
      case "cadastrarEmpresa":

          $payloadContato = '{
              "fields": {
                  "UF_CRM_1586990503": "'.$_POST["nome_fantasia"].'",
                  "UF_CRM_1586990521": "'.$_POST["inc_est"].'",
                  "UF_CRM_1586990540": "'.$_POST["inc_muni"].'",     
                  "UF_CRM_1586990608": "'.$_POST["endereco"].'",        
                  "UF_CRM_1596212224": "'.$_POST["numTit"].'",   
                  "UF_CRM_1591717109352": "'.$_POST["endereco"].'",                                                      
                  "UF_CRM_1591717146847": "'.$_POST["endereco"].'",   
                  "UF_CRM_1591717146847": "'.$_POST["endereco"].'",   
                  "UF_CRM_1591717166855": "'.$_POST["cep"].'",   
                  "UF_CRM_1591717194639": "'.$_POST["tel"].'",   
                   "UF_CRM_1591717209143": "'.$_POST["nome_soc"].'",   
                  "UF_CRM_1586990672": "'.$_POST["cpf_soc"].'",   
                  "UF_CRM_1586990651": "'.$_POST["emailTit"].'",   
                  "Nome fantasia": "'.$_POST["nome_fantasia"].'",
                  "UF_CRM_1586990421": "'.$_POST["cnpj"].'",
                  "TITLE": "'.$_POST["razao_social"].'"
              }
          }';

          $updDeal = curl_bitrix_method("crm.company.add",$payloadContato);
          echo $updDeal;
      break;
      case "addDeal":

           $lead_id = $_POST['lead_id'];
           $converte_lead = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=yfjap&target=LEAD_".$lead_id);

        //pega deal gerada
        $payloadPegaDeal = '{
            "order": {
                "ID": "DSC"
            },
            "filter": {
                "LEAD_ID": "'.$lead_id.'",
                "STAGE_ID": "C12:NEW"
            },
            "select": [
                "ID"
            ]
        }';

        $pegaDeal = curl_bitrix_method("crm.deal.list",$payloadPegaDeal);
        echo $pegaDeal;
      break;
      case "converteLead":
        $payload = null;
        if(isset($_POST["payload"]) and $_POST["payload"] != "" and $_POST["lead_id"] != "")
        {
          $payload = json_decode($_POST["payload"],true);
          $plano_escolhido = $payload["PLANO_ESCOLHIDO"];
          $lead_id = $_POST["lead_id"];
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
          exit;
        }

        //converte lead
        $converte_lead = curl_rest("https://waydigital.bitrix24.com.br/rest/43/1xh6682c1ziihiq0/crm.automation.trigger/?code=yfjap&target=LEAD_".$lead_id);

        //pega deal gerada
        $payloadPegaDeal = '{
            "order": {
                "ID": "DSC"
            },
            "filter": {
                "LEAD_ID": "'.$lead_id.'",
                "STAGE_ID": "C12:NEW"
            },
            "select": [
                "ID"
            ]
        }';

        $pegaDeal = curl_bitrix_method("crm.deal.list",$payloadPegaDeal);
        $pegaDeal = json_decode($pegaDeal,true);
        $deal_id = $pegaDeal["result"][0]["ID"];
        //fim pega deal

        //salva contato
        $arrNome = explode(" ", $payload["NAME"]);
        $nome = strtoupper($arrNome[0]);
        unset($arrNome[0]);
        $ultimoNome = implode(" ", $arrNome);

        $props = json_decode(file_get_contents('property_fields.json'), true);
        $props = $props["result"];

        //quebra tel
        $t = str_replace("(","",$payload["PHONE"]);
        $t = str_replace(")","",$t);
        $t = str_replace(" ","",$t);
        $t = str_replace("-","",$t);

        $t1 = substr($t,0,2);
        $t2 = substr($t,2);

        $payloadContato = '{
            "fields": {
                "NAME": "'.$nome.'",
                "LAST_NAME": "'.strtoupper($ultimoNome).'",
                "UF_CRM_1580684796": "'.$payload["IDADE"].'",
                "UF_CRM_1578521856": "'.$payload["UF_CRM_1578521856"].'",
                "UF_CRM_1578510751": "'.$payload["UF_CRM_1578510751"].'",
                "UF_CRM_1578510781": "'.$payload["UF_CRM_1578510781"].'",
                "UF_CRM_1578510989": "'.$payload["UF_CRM_1578510989"].'",
                "UF_CRM_1578511012": "'.$payload["UF_CRM_1578511012"].'",
                "UF_CRM_1582805357": "'.$props["ESTADOS"][$payload["UF_CRM_1582805357"]].'",
                "UF_CRM_1578521601": "'.$payload["UF_CRM_1578521601"].'",
                "UF_CRM_1583444098092": "'.$payload["UF_CRM_1583444098092"].'",
                "UF_CRM_1578521815": "'.$payload["UF_CRM_1578521815"].'",
                "UF_CRM_1578521887": "'.$payload["UF_CRM_1578521887"].'",
                "UF_CRM_1578521726": "'.strtoupper($payload["UF_CRM_1578521726"]).'",
                "UF_CRM_1578510927": "'.$payload["UF_CRM_1578510927"].'",
                "UF_CRM_1578510945": "'.$payload["UF_CRM_1578510945"].'",
                "UF_CRM_1578521943": "'.$payload["UF_CRM_1578521943"].'",
                "UF_CRM_1578511736": "'.$t1.'",
                "UF_CRM_1578511754": "'.$t2.'",
                "UF_CRM_1583766955763": "'.$payload["UF_CRM_1583766955763"].'",
                "PHONE": [
                    {
                        "VALUE": "'.$payload["PHONE"].'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "EMAIL": [
                    {
                        "VALUE": "'.$payload["EMAIL"].'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "OPENED": "Y",
                "TYPE_ID": "CLIENT",
                "ASSIGNED_BY_ID": "1012"
            }
        }';

        $criaContato = curl_bitrix_method("crm.contact.add",$payloadContato);
        $criaContato = json_decode($criaContato,true);

        if(isset($criaContato["result"]) and ($criaContato["result"] != "" or !empty($criaContato["result"])))
        {
          $contact_id = $criaContato["result"];

          //add empresa ao contato
          $payloadAddCompanyToContact = '{
            "id":"'.$contact_id.'",
            "fields": {
              "COMPANY_ID": "'.$payload["company_id"].'"
            }
          }';
          $addCompanyContato = curl_bitrix_method("crm.contact.company.add",$payloadAddCompanyToContact);

          //cria deal
          $payloadDeal = '{
              "id": "'.$deal_id.'",
              "fields": {
                  "TITLE": "'.$payload["NAME"].'",
                  "COMMENTS": "Criado via Loja Online - Gpsoft",
                  "CONTACT_ID": "'.$contact_id.'",
                  "COMPANY_ID": "'.$payload["company_id"].'",
                  "ASSIGNED_BY_ID": "1012",
                  "LEAD_ID": "'.$lead_id.'",
                  "TYPE_ID": "SALE",
                  "CATEGORY_ID": "12",
                  "SOURCE_ID": "STORE",
                  "UF_CRM_1578521618": "'.$payload["NAME"].'",
                  "UF_CRM_1582811779965": "'.$plano_escolhido["planoID"].'",
                  "UF_CRM_1580318169": "'.$payload["UF_CRM_1580318169"].'",
                  "UF_CRM_1580684796": "'.$payload["IDADE"].'",
                  "UF_CRM_1583411966": "'.$payload["UF_CRM_1583411966"].'",
                  "UF_CRM_1587331426": "'.$plano_escolhido["operadoraID"].'",
                  "UF_CRM_1581529436": "'.$payload["UF_CRM_1581529436"].'",
                  "UF_CRM_1581529045": "'.$payload["UF_CRM_1581529045"].'",
                  "UF_CRM_1581529498": "'.$payload["UF_CRM_1581529498"].'",
                  "UF_CRM_1581529934": "'.$payload["UF_CRM_1581529934"].'",
                  "UF_CRM_1581529962": "'.$payload["UF_CRM_1581529962"].'",
                  "UF_CRM_1581530003": "'.$payload["UF_CRM_1581530003"].'",
                  "UF_CRM_1581530045": "'.$payload["UF_CRM_1581530045"].'",
                  "UF_CRM_1581530083": "'.$payload["UF_CRM_1581530083"].'",
                  "UF_CRM_1581530136": "'.$payload["UF_CRM_1581530136"].'",
                  "UF_CRM_1581529316": "'.$payload["UF_CRM_1581529316"].'",
                  "UF_CRM_1581529333": "'.$payload["UF_CRM_1581529333"].'",
                  "UF_CRM_1583507113": "5820",
                  "UF_CRM_1580393400": "1",
                  "UF_CRM_1591132393": "1"
              }
          }';

          $updDeal = curl_bitrix_method("crm.deal.update",$payloadDeal);
          $updDeal = json_decode($updDeal,true);

          if(isset($updDeal["result"]))
          {
            //add produtos dependente se tiver
            $payloadProdDep = "";
            if($payload["UF_CRM_1580318169"] == "1")
            {
              foreach ($payload["dependentes"] as $dep) {
                //add produto
                $payloadProdDep .= '
                  ,{
                      "PRODUCT_ID": "'.$dep["id_plano"].'",
                      "PRICE": "'.$dep["price_plano"].'",
                      "QUANTITY": 1
                  }
                ';
              }
            }
            
            //add produto
            $payloadAddProd = '{
                "ID": "'.$deal_id.'",
                "rows": [
                    {
                        "PRODUCT_ID": "'.$plano_escolhido["ID"].'",
                        "PRICE": "'.$plano_escolhido["PRICE"].'",
                        "QUANTITY": 1
                    }'.$payloadProdDep.'
                ]
            }
            ';

            $addProd = curl_bitrix_method("crm.deal.productrows.set",$payloadAddProd);

            /*** Cria conta no banco ou pega conta existente ***/
            $dataNow = date("Y-m-d H:i:s");
            
            $buscaConta = mysqli_query($conexao,"select id from clientes where cpf = '".$payload["UF_CRM_1578521601"]."'");
            if(mysqli_num_rows($buscaConta) > 0)
            {
              $rsUser = mysqli_fetch_array($buscaConta);
              $user_id = $rsUser["id"];
            }else{
              $insertUser = "insert into clientes VALUES (null,'".$payload["NAME"]."','".$payload["EMAIL"]."','".$payload["UF_CRM_1578521856"]."','".$payload["UF_CRM_1578521601"]."','".md5($payload["password"])."',null,'".$dataNow."',null)";
              $runSqlUser = mysqli_query($conexao,$insertUser);
              $user_id = mysqli_insert_id($conexao);
            }

            //checa se tem conta empresa
            $company_id = $payload["company_id"];
            $company_name = $payload["company_name"];
            $buscaContaEmp = mysqli_query($conexao,"select company_id from empresas where company_id = $company_id");
            if(mysqli_num_rows($buscaContaEmp) == 0)
            {
              $insertEmp = "insert into empresas VALUES ($company_id,'$company_name','$dataNow')";
              $runSqlEmp = mysqli_query($conexao,$insertEmp);
            }

            $insertProposta = "insert into propostas VALUES (".$deal_id.",".$user_id.",'".serialize($payload)."',null,null,null,'".$dataNow."',null)";
            $runSqlProposta = mysqli_query($conexao,$insertProposta);
            /***   fim cria conta   ***/

            //add proposta
            $linkPropostaEmp = "insert into propostas_pme VALUES ($company_id,$deal_id)";
            $runSqlLinkPropostaEmp = mysqli_query($conexao,$linkPropostaEmp);
            
            header('Content-Type: application/json');
            echo json_encode(array("error" => "false", "deal_id" => $deal_id, "contact_id" => $contact_id), true);
            exit;
          }else{
            header('Content-Type: application/json');
            echo json_encode(array("error" => "true", "debug" => $updDeal, "deal_id" => $deal_id, "erro_msg" => "Falha ao salvar dados [UPD_DEAL]."), true);
            exit;
          }
        }else{
          header('Content-Type: application/json');
          echo json_encode(array("error" => "true", "erro_msg" => "Falha ao salvar dados [CRIA_CONTACT]."), true);
          exit;
        }

        exit;
        break;
    }
  }else{
    header('Content-Type: application/json');
    echo json_encode(array("error" => "true", "erro_msg" => "Parametros incorretos."), true);
    exit;
  }

  function curl_rest($url){
    //  Initiate curl
    $ch = curl_init();
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);
    //return
    return $result;
  }


  function curl_bitrix_company_add($payload){
    // API URL
    $url = 'https://waydigital.bitrix24.com.br/rest/1142/uuzj4yburfsuhrjg/crm.company.lead';

    // Create a new cURL resource
    $ch = curl_init($url);
    $payloadCompany = '{
          "fields": {
              "TITLE": "'.'jumper'.'",
              "COMMENTS": "Criado via Loja Online - Gpsoft",
          }
      }';

    // $payloadCompany = '{
    //       "fields": {
    //           "TITLE": "'.'jumper'.'",
    //           "COMMENTS": "Criado via Loja Online - Gpsoft",
    //           "CONTACT_ID": "'.$contact_id.'",
    //           "COMPANY_ID": "'.$payload["company_id"].'",
    //           "ASSIGNED_BY_ID": "1012",
    //           "LEAD_ID": "'.$lead_id.'",
    //           "TYPE_ID": "SALE",
    //           "CATEGORY_ID": "12",
    //           "SOURCE_ID": "STORE",
    //           "UF_CRM_1578521618": "'.$payload["NAME"].'",
    //           "UF_CRM_1582811779965": "'.$plano_escolhido["planoID"].'",
    //           "UF_CRM_1580318169": "'.$payload["UF_CRM_1580318169"].'",
    //           "UF_CRM_1580684796": "'.$payload["IDADE"].'",
    //           "UF_CRM_1583411966": "'.$payload["UF_CRM_1583411966"].'",
    //           "UF_CRM_1587331426": "'.$plano_escolhido["operadoraID"].'",
    //           "UF_CRM_1581529436": "'.$payload["UF_CRM_1581529436"].'",
    //           "UF_CRM_1581529045": "'.$payload["UF_CRM_1581529045"].'",
    //           "UF_CRM_1581529498": "'.$payload["UF_CRM_1581529498"].'",
    //           "UF_CRM_1581529934": "'.$payload["UF_CRM_1581529934"].'",
    //           "UF_CRM_1581529962": "'.$payload["UF_CRM_1581529962"].'",
    //           "UF_CRM_1581530003": "'.$payload["UF_CRM_1581530003"].'",
    //           "UF_CRM_1581530045": "'.$payload["UF_CRM_1581530045"].'",
    //           "UF_CRM_1581530083": "'.$payload["UF_CRM_1581530083"].'",
    //           "UF_CRM_1581530136": "'.$payload["UF_CRM_1581530136"].'",
    //           "UF_CRM_1581529316": "'.$payload["UF_CRM_1581529316"].'",
    //           "UF_CRM_1581529333": "'.$payload["UF_CRM_1581529333"].'",
    //           "UF_CRM_1583507113": "5820",
    //           "UF_CRM_1580393400": "1",
    //           "UF_CRM_1591132393": "1"
    //       }
    //   }';

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadCompany);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }

  function curl_bitrix_lead_add($payload){
    // API URL
    $url = 'https://waydigital.bitrix24.com.br/rest/1142/uuzj4yburfsuhrjg/crm.lead.add';

    // Create a new cURL resource
    $ch = curl_init($url);

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }

  function curlClickSign($payload){
    // API URL
    $url = 'https://app.clicksign.com/api/v1/documents?access_token=5a8bb3dc-d2e0-4be5-adf7-e827d576326e';

    // Create a new cURL resource
    $ch = curl_init($url);

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }


   function curlClickSignSigners($payload){
    // API URL
    $url = 'https://app.clicksign.com/api/v1/signers?access_token=5a8bb3dc-d2e0-4be5-adf7-e827d576326e';

    // Create a new cURL resource
    $ch = curl_init($url);

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }

  function curlConvertPdf($payload){
    // API URL
    $url = 'https://v2.convertapi.com/convert/docx/to/pdf?Secret=yDAjbrW67AmgM0Vq';

    // Create a new cURL resource
    $ch = curl_init($url);

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }

  function curl_bitrix_method($method,$payload){
    // API URL
    $url = 'https://waydigital.bitrix24.com.br/rest/1142/uuzj4yburfsuhrjg/'.$method;

    // Create a new cURL resource
    $ch = curl_init($url);

    // Attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $result = curl_exec($ch);

    // Close cURL resource
    curl_close($ch);
    
    //return result
    return $result;
  }

  function getProfissoes($uf, $next = "", $name = ""){

    $condTipo = '
    "PROPERTY_319": {
      "value": "537"
    },';
    
    // if (strtolower($uf) === "rj" or strtolower($uf) === "sp")
    // {
    //   $condTipo = "";
    // }

    $payloadProfissao = '{
      "order": {
        "NAME": "ASC"
      },
      "filter": {
        "SECTION_ID": {
          "value": "156"
        },
        '.$condTipo.'
        "PROPERTY_370": {
          "value": "'.$uf.'"
        }
        '.$name.'
      },
      "select": [
        "ID",
        "NAME",
        "SECTION_ID",
        "PROPERTY_324",
        "PROPERTY_326",
        "PROPERTY_368",
        "PROPERTY_372",
        "PROPERTY_376"
      ]
      '.$next.'
    }';

    $doBusca = curl_bitrix_method("crm.product.list", $payloadProfissao);

    return $doBusca;

  }
  
  function getCodIdade($idade){
    $id_idade = null;
    if($idade >=0 and $idade <=18)
    {
      $id_idade = 231;
    }else if($idade >=19 and $idade <=23)
    {
      $id_idade = 233;
    }else if($idade >=24 and $idade <=28)
    {
      $id_idade = 235;
    }else if($idade >=29 and $idade <=33)
    {
      $id_idade = 251;
    }else if($idade >=34 and $idade <=38)
    {
      $id_idade = 253;
    }else if($idade >=39 and $idade <=43)
    {
      $id_idade = 255;
    }else if($idade >=44 and $idade <=48)
    {
      $id_idade = 257;
    }else if($idade >=49 and $idade <=53)
    {
      $id_idade = 259;
    }else if($idade >=54 and $idade <=58)
    {
      $id_idade = 261;
    }else if($idade >=59)
    {
      $id_idade = 263;
    }else{
      $id_idade = false;
    }
    return $id_idade;
  }

  function getOperadoraId($value_id)
  {
    include "config/db_connect.php";
    $buscaOperadoraId = mysqli_query($conexao,"select xml_id from operadoras where value_id = ".$value_id);
    if(mysqli_num_rows($buscaOperadoraId) > 0)
    {
      $rsOpeId = mysqli_fetch_array($buscaOperadoraId);
      return $rsOpeId["xml_id"];
    }else{
      return false;
    }
  }

  function convertem($term) { 
    $palavra = strtr(strtoupper($term),"àáâãäåæçèéêëìíîïðñòóôõö÷øùüúþÿ","ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÜÚÞß");
    return $palavra; 
  }

?>
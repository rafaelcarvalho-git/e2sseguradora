<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E2S</title>    
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="imagex/png" href="img/icone.ico">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://e2scertificadoradigital.com.br/" style="color: white;" target="_blank"><img src="img/logo.png" alt="" width="50" height="30" class="d-inline-block align-text-top">
    AR E2S CORRETORA DE SEGUROS LTDA-ME</a>    
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link"><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#solicitarCertificado">Nova Seguro</button></a>                   
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php"><button type="button" class="btn btn-info">Usuários</button></a>          
      </li>    
      <li class="nav-item">
        <a class="nav-link"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sairSistema">Sair</button></a>  
      </li>      
    </ul>   
  </div>
</nav>
<br><br><br><br><br>
<main>
    <section class="periodo-consulta">       
        <div>          
          <select name="mes-consulta" class="form-select" id="mes">
            <option value="">Período</option>
            <option value="01">Janeiro</option>
            <option value="02">Feveireiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>            
          </select>          
          <button id="bt-consulta" class="btn btn-primary" onclick="searchDataAtivas()"><i class="bi bi-search"></i></button>
        </div>               
    </section>
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Tipo de Seguro</th>
        <th scope="col">Seguradora</th>
        <th scope="col">Comissao</th>
        <th scope="col">Prêmio</th>
        <th scope="col">Qtd. Parcelas</th>
        <th scope="col">Pagamento</th>
        <th scope="col">Dia do Pagamento</th>
        <th scope="col">Vigência</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="" data-bs-toggle="modal" data-bs-target="#visualizar">RAFAEL CANDIDO LACERDA CARVALHO</a></td>
        <td>AUTOMOVEL</td>                  
        <td>TOKIO MARINE</td>
        <td>10%</td>
        <td>R$ 1285,78</td>
        <td>A VISTA</button>
        <td>BOLETO</td>
        <td>VENC. CARTAO</td>                  
        <td>30/05/2018 A 30/05/2019</td>
        <td><button>Excluir</button><button>Cancelar</button>
        </td>
      </tr>
  </tbody>
  </table>
</main>
<!-- Janela Visualizar Informações Cliente -->
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="visualizarSolicitacaoLabel">
<div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-body">
        <h4><strong>CPF</strong></h4>
        <h3 class="text-primary">071.413.423-62</h3>
        <h4><strong>Telefone</strong></h4>
        <h3 class="text-primary"><a href="https://api.whatsapp.com/send/?phone=5588988573004&text&app_absent=0">88988573004</a></h3>          
        <h4><strong>Observações</strong></h4>
        <h3 class="text-primary">Observações</h3>
    </div>
    </div>
</div>
</div>
  <!-- Janela Nova Solicitação -->
  <div class="modal fade" id="solicitarCertificado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Seguro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" method="post" action="solicitar_sucesso.php" enctype="multipart/form-data" novalidate>
            <section>
                <div class="col-sm-12 mx-auto"><!--NOME DO CLIENTE-->
                  <label for="nome-cliente" class="form-label">Nome Completo</label>
                  <input name="nome" type="text" class="form-control" id="nome-cliente" required>
                  <div class="invalid-feedback">Insira o nome do cliente.</div>
                </div>
            </section>
            <!--ESCOLHAS PARA O TIPO E VALOR DO CERTIFICADO SELECIONADO-->
            <section>          
              <div class="col-sm-12 mx-auto text-center">
                <label for="type-cpf" class="form-label">Tipo do Seguro</label>
                <select name="tipo-certificado" class="form-select" id="type-cpf" required>
                  <option value="">Tipo</option>
                  <option>AUTOMOVEL</option>
                  <option>VIDA</option>
                  <option>RESIDENCIAL</option>
                  <option>CAMINHAO</option>
                  <option>MOTO</option>
                  <option>EMPRESARIAL</option>
                </select><div class="invalid-feedback">Selecione um tipo de certificado.</div>
              </div>
            </section>
            
            

            <section>
              <div class="col-sm-5 mx-auto"><!--CPF DO CLIENTE-->
                <label for="cpf-cliente" class="form-label">CPF</label>
                <input name="cpf" type="text" class="form-control" id="cpf-cliente" required>
                <div class="invalid-feedback">Insira o CPF do cliente.</div>
              </div>
      
              <div class="col-sm-4 mx-auto"><!--TELEFONE DO CLIENTE-->
                <label for="endereco-cliente" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="telefone-cliente" required>
                <div class="invalid-feedback">Insira o telefone do cliente.</div>
              </div>
            </section>

            <!--ESCOLHAS PARA O TIPO E VALOR DO CERTIFICADO SELECIONADO-->
            <section>          
                <div class="col-sm-12 mx-auto text-center">
                    <label for="type-cpf" class="form-label">Seguradora</label>
                    <select name="tipo-certificado" class="form-select" id="type-cpf" required>
                    <option value="">Tipo</option>
                    <option>TOKIO</option>
                    <option>VIDA</option>
                    <option>RESIDENCIAL</option>
                    <option>CAMINHAO</option>
                    <option>MOTO</option>
                    <option>EMPRESARIAL</option>
                    </select><div class="invalid-feedback">Selecione um tipo de certificado.</div>
                </div>
            </section>

            <section>
                <div class="col-sm-5 mx-auto"><!--CPF DO CLIENTE-->
                  <label for="cpf-cliente" class="form-label">Comissao</label>
                  <input name="cpf" type="text" class="form-control" id="cpf-cliente" required>
                  <div class="invalid-feedback">Insira o CPF do cliente.</div>
                </div>

                <div class="col-sm-5 mx-auto"><!--CPF DO CLIENTE-->
                    <label for="cpf-cliente" class="form-label">Prêmio</label>
                    <input name="cpf" type="text" class="form-control" id="cpf-cliente" required>
                    <div class="invalid-feedback">Insira o CPF do cliente.</div>
                </div>
        
                <div class="col-sm-4 mx-auto"><!--TELEFONE DO CLIENTE-->
                  <label for="endereco-cliente" class="form-label">Parcelas</label>
                  <input name="telefone" type="text" class="form-control" id="telefone-cliente" required>
                  <div class="invalid-feedback">Insira o telefone do cliente.</div>
                </div>
              </section>

              <section>
                <div class="col-sm-5 mx-auto"><!--CPF DO CLIENTE-->
                  <label for="cpf-cliente" class="form-label">Forma de Pagamento</label>
                  <input name="cpf" type="text" class="form-control" id="cpf-cliente" required>
                  <div class="invalid-feedback">Insira o CPF do cliente.</div>
                </div>
        
                <div class="col-sm-4 mx-auto"><!--TELEFONE DO CLIENTE-->
                  <label for="endereco-cliente" class="form-label">Dia do pagamento</label>
                  <input name="telefone" type="text" class="form-control" id="telefone-cliente" required>
                  <div class="invalid-feedback">Insira o telefone do cliente.</div>
                </div>
              </section>
              
              <div class="col-sm-4 mx-auto"><!--TELEFONE DO CLIENTE-->
                <label for="endereco-cliente" class="form-label">Vigencia</label>
                <input name="telefone" type="date" class="form-control" id="telefone-cliente" required>até
                <input name="telefone" type="date" class="form-control" id="telefone-cliente" required>
                <div class="invalid-feedback">Insira o telefone do cliente.</div>
              </div>
                  
            <section>        
              <div class="col-sm-12 mx-auto"><!--OBSERVACOES CLIENTE-->
                <label for="obs-cliente" class="form-label">OBSERVACOES</label>
                <input name="observacoes" type="textarea" class="form-control" id="obs-cliente">
              </div>
            </section><hr class="my-4">
            <input class="w-100 btn btn-lg btn-primary" type="submit" name="btnSolicitar" value="Salvar">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js" integrity="sha512-ewfXo9Gq53e1q1+WDTjaHAGZ8UvCWq0eXONhwDuIoaH8xz2r96uoAYaQCm1oQhnBfRXrvJztNXFsTloJfgbL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
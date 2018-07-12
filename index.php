<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" rel="stylesheet" crossorigin="anonymous">
  <link href="./static/invent_white.png" rel="shortcut icon">
  <link href="./style.css" rel="stylesheet">
  <?php
    if(isset($_POST['submit'])){
      $to = "ola@efforia.io"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
      $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
      // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
  ?>
  <title>Efforia</title>
</head>
<body>
  <div class="nebula">
    <div class="overlay">
      <div class="highlight">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-8 offset-md-2">
              <img class="img-fluid col-md-3 col-7" src="./static/invent_white.svg"/>
              <br><br>
              <h1>Somos a Efforia Invent Company</h1>
              <h2>Criamos experiências interativas, audiovisuais e
                <br>inteligentes através de software e hardware.</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid activities">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <br><br>
        <h1>Bem-vindo. Se procura por soluções inovadoras, chegou ao lugar certo.</h1>
        <br><br>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <i class="fab fa-5x fa-app-store-ios"></i><p></p>
        <h2>Aplicativos</h2>
        <p>Criamos os mais diversos apps para as plataformas Android e iOS</p>
      </div>
      <div class="col-md-3">
        <i class="far fa-5x fa-lightbulb"></i><p></p>
        <h2>Inteligência Artificial</h2>
        <p>Desenvolvemos chatbots e outras especialidades de AI</p>
      </div>
      <div class="col-md-3">
        <i class="fas fa-5x fa-cloud"></i><p></p>
        <h2>Hospedagem</h2>
        <p>Hospedamos para você a solução que precisar na nuvem</p>
      </div>
      <div class="col-md-3">
        <i class="fas fa-5x fa-paint-brush"></i><p></p>
        <h2>Webdesigning</h2>
        <p>Desenhamos sites, landing pages e outras páginas web</p>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <i class="fas fa-5x fa-envelope"></i><p></p>
        <h2>E-mail Marketing</h2>
        <p>Realizamos a automação de marketing através do e-mail</p>
      </div>
      <div class="col-md-3">
        <i class="fas fa-5x fa-chalkboard"></i><p></p>
        <h2>Business Model Canvas</h2>
        <p>Damos aquela orientação que você precisava para o seu negócio</p>
      </div>
      <div class="col-md-3">
        <i class="fas fa-5x fa-certificate"></i><p></p>
        <h2>Identidade Visual</h2>
        <p>Estudamos e desenhamos logos, vinhetas e a identidade que precisar</p>
      </div>
      <div class="col-md-3">
        <i class="fas fa-5x fa-broadcast-tower"></i><p></p>
        <h2>Internet das Coisas</h2>
        <p>Projetamos as mais diversas soluções de automação</p>
      </div>
    </div>
    <br><br>
  </div>
  </div>
  <div class="container-fluid grid">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>E esses são alguns de nossos clientes.</h1>
        <br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="background: url('./static/angulo.png')">
        <a href="http://www.angulodevista.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>Ângulo de Vista</h2>
            <p>Website de quadrinhos</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/fretefacil.png')">
        <a href="#" class="overlay">
          <div class="content">
            <h2>Frete Fácil</h2>
            <p>Aplicativo de entregas por freteiros</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/vupit.png')">
        <a href="#" class="overlay">
          <div class="content">
            <h2>Vupit</h2>
            <p>App de distribuição de bebidas</p>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="background: url('./static/fabricadeideias.png')">
        <a href="http://www.fabricadeideiascw.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>Fábrica de Ideias Coworking</h2>
            <p>Landing page do espaço de coworking</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/derhut.png')">
        <a href="http://www.derhut.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>Der Hut</h2>
            <p>Website de cultura teuto-brasileira</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/kulturzentrum.png')">
        <a href="http://www.25brasil.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>Centro Cultural 25 de julho</h2>
            <p>Portal do centro cultural de POA</p>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="background: url('./static/pet.png')">
        <a href="http://www.aterradosbichos.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>A Terra dos Bichos</h2>
            <p>Landing page da veterinária</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/cosmos.png')">
        <a href="http://www.trybocosmica.com.br" target=_blank class="overlay">
          <div class="content">
            <h2>Trybo Cósmica</h2>
            <p>Website cultural e religioso</p>
          </div>
        </a>
      </div>
      <div class="col-md-4" style="background: url('./static/blockchain.png')">
        <a href="http://www.grandircapitalfinanceiro.com" target=_blank class="overlay">
          <div class="content">
            <h2>Grandir Capital Financeiro</h2>
            <p>Landing page de corretora</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <h1 class="text-center">Gostou? Entre em contato com a gente.</h1><br>
        <form action="" method="post">
          <div class="form-group">
            <label for="firstname">Nome</label>
            <input class="form-control" id="firstname" type="text" name="first_name">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome</label>
            <input class="form-control" id="lastname" type="text" name="last_name">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" id="email" type="email" name="email">
          </div>
          <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea class="form-control" id="message" rows="5" name="message" cols="30"></textarea>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Enviar">
        </form>
        <br><br>
      </div>
    </div>
  </div>
  <footer style="display:block">
    <div class="container">
      <div class="row text-center contact">
        <div class="col-md-4">
          <h2>Telefone</h2>
          <p>
            +55 (51) 3516 2367<br>
            +55 (51) 998 485 888
          </p>
        </div>
        <div class="col-md-4">
          <h2>Endereço</h2>
          <p>
            Rua Vigário José Inácio, 399/702<br>
            Centro Histórico - Porto Alegre/RS
          </p>
        </div>
        <div class="col-md-4">
          <h2>E-mail</h2>
          <a href="mailto:ola@efforia.io">ola@efforia.io</a>
        </div>
      </div>
      <div class="row text-center social">
        <div class="col-md-6 offset-md-3">
          <div class="row">
            <div class="col"><a target=_blank href="https://www.facebook.com/efforiaio"><i class="fab fa-3x fa-facebook-f"></i></a></div>
            <div class="col"><a target=_blank href="https://www.twitter.com/efforiaio"><i class="fab fa-3x fa-twitter"></i></a></div>
            <div class="col"><a target=_blank href="https://www.linkedin.com/company/efforia-tecnologia/"><i class="fab fa-3x fa-linkedin-in"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

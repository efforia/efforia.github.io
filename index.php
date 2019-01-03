<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if(isset($_POST['submit'])){
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  $mail->isSMTP();
  // $mail->SMTPDebug = 2;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = "ola@efforia.io";
  $mail->Password = "mk28to#$";
  $mail->setFrom($_POST['e_mail'], $_POST['first_name'] . ' ' . $_POST['last_name']);
  $mail->addAddress('ola@efforia.io', 'Efforia');
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Contato pelo site da Efforia';
  $mail->Body    = $_POST['message'];
  $mail->AltBody = $_POST['message'];
  $mail->send();
  /* if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Message sent!";
  } */
}
?>

<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" rel="stylesheet" crossorigin="anonymous">
  <link href="./static/invent_white.png" rel="shortcut icon">
  <link href="./style.css" rel="stylesheet">
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
    <div class="row text-center">
      <div class="col-md-12">
        <br><br>
        <h1 class="text-center">Gostou? Saiba mais se inscrevendo em nossa newsletter.</h1>
        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="https://efforia.us15.list-manage.com/subscribe/post?u=05c870f4c948a5f5b75f65c4c&amp;id=58cc28237a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group input-group input-group-lg px-sm-5 my-3">
                <!-- <label for="mce-EMAIL">Email Address </label> -->
                <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
              </div>
          	  <div id="mce-responses" class="clear">
          		  <div class="response" id="mce-error-response" style="display:none"></div>
          		  <div class="response" id="mce-success-response" style="display:none"></div>
          	  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_05c870f4c948a5f5b75f65c4c_58cc28237a" tabindex="-1" value="">
              </div>
              <div class="clear pt-3">
                <input class="btn btn-outline-dark btn-lg" type="submit" value="Inscrever" name="subscribe" id="mc-embedded-subscribe">
              </div>
            </div>
          </form>
        </div>
        <!--End mc_embed_signup-->
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

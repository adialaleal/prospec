<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Prospec - Obrigado!</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <meta name="format-detection" content="telephone=no">

  <link rel="stylesheet" href="../static/css/style.css">

</head>
<body style="overflow: hidden;padding-top: calc(50vh - 184px);">


<div style="display: block;margin: auto;">
    <img style="max-width: 232px;display: block;margin: auto;" id="img-marca2" src="../static/images/logo1.png" alt="">
</div>

<?php
/* Recebe os dados do cliente ajax via POST */
$nome = $_GET['name'];
$email = $_GET['email'];
$msg = $_GET['message'];

/* CORPO DO E-MAIL */
$body = "";
$body .= "<h2>Mensagem recebida - Formulário de Contato - prospecconstrucoes.com.br</h2>";
$body .= "Nome: $nome <br>";
$body .= "E-mail: $email <br>";
$body .= "Telefone: $msg <br>";
$body .= "<br>";
$body .= "----------------------------";
$body .= "<br>";
$body .= "Enviado em <strong>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</strong>"; //mostra a data e o IP
$body .= "<br>";
$body .= "----------------------------";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: Prospec <vendasprospec@gmail.com>' . "\r\n";
$headers .= 'From: Postmaster <postmaster@prospecconstrucoes.com.br>' . "\r\n";
$headers .= 'Cc:' . "\r\n";
$headers .= 'Bcc:' . "\r\n";

if (mail("vendasprospec@gmail.com", "Prospec - Contato do Site", $body, $headers)): ?>
<div style="text-align: center;width: 100%;">
        <h2 style="
    font-size: 27px;
    line-height: 10px;
    margin-top: 50px;
">Obrigado!</h2>
        <h4 style="
    font-weight: lighter;
">A sua mensagem foi enviada.</h4>
    </div>
<?php
else: ?>
    <div style="width: 100%;">
        <h2>Sentimentos muito</h2>
        <h4>Ocorreu um erro ao enviar sua mensagem. Tente novamente.</h4>
    </div>

<?php endif;
?>

<script src="../static/js/jquery-2-2.0.min.js" type="text/javascript"></script>
<script src="../static/js/bootstrap.min.js"></script>
<script src="../static/js/slick.js"></script>
<script src="../static/js/owl.carousel.min.js"></script>


</body>
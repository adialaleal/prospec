<?php
/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */
//Import the PHPMailer class into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if (array_key_exists('to', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'Nenhum Assunto foi inserido';
    }
    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'Nenhuma query provisionada!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
    //Apply some basic validation and filtering to the phone
    if (array_key_exists('phone', $_POST)) {
        //Limit length and strip HTML tags
        $phone = substr(strip_tags($_POST['phone']), 0, 255);
    } else {
        $phone = '';
    }
    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    //if (array_key_exists('to', $_POST) and in_array($_POST['to'], ['clark', 'ari'])) {
    //    $to = $_POST['to'] . '@cumespublicidade.com.br';
    //} else {
        $to = 'lealadiala@gmail.com';
    //}
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Erro: Email incorreto";
        $err = true;
    }
    if (!$err) {

      //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'desenvolvimento.cumes@gmail.com';  // SMTP username
        $mail->Password = '58227Le@l';                       // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('postmaster@prospecconstrucoes.com.br', (empty($name) ? 'Fomulário de Contato' : $name));
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Novo contato: ' . $name;
        $mail->Body = "Dados para contato"."\n\n"."- ".$name."\n"."- ".$email."\n"."- ".$phone."\n\nMensagem: ".$query;
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Mensagem enviada!";
        }
    }
} ?>

<?php if (empty($msg)) { ?>
    <form method="post" style="padding: 0px" action="phpmailer.php">
      <h3>Fale Conosco</h3>
        <input placeholder="Nome" type="text" name="name" id="name" maxlength="255" class="inputcontact">
        <br>
        <input placeholder="Email" type="email" name="email" id="email" maxlength="255" class="inputcontact">
        <br>
        <input placeholder="Telefone" type="phone" name="phone" id="phone" maxlength="255" class="inputcontact">
        <br>
        <textarea cols="19" rows="8" name="query" id="query" placeholder="Sua mensagem..." style="background-color: transparent"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
<?php } else {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
} ?>

<!-- <div class="col-sm-6 col-md-4 item">
    <h3>Fale Conosco</h3>
    <form action="email.php" id="contactform" method="post">
        <label for="Nome">Nome</label><br>
        <input id="name" name="Nome" type="text"><br>
        <label for="">Email</label><br>
        <input id="email" type="email" name="Email" ><br>
        <label for="Fone">Telefone</label><br>
        <input id="message" name="Fone" type="tel"><br>
        <input id="enviar" name="Enviar" type="submit" value="Enviar">
    </form>
</div> -->

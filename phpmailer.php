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
    if (array_key_exists('to', $_POST) and in_array($_POST['to'], ['clark', 'ari'])) {
        $to = $_POST['to'] . '@cumespublicidade.com.br';
    } else {
        $to = 'lealadiala@gmail.com';
    }
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
        $mail->Body = "Dados para contato"."\n\n"."- <strong>".$name."</strong>\n"."- <strong>".$email."\n"."- ".$phone."\n\nMensagem: ".$query;
        if (!$mail->send()) {
            $msg = "Mailer Error: ";
        } else {
            $msg = "Mensagm enviada!";
        }
    }
} ?>

<?php include_once "assets/includes/header.html" ?>
<h1>Fale Conosco</h1>
<?php if (empty($msg)) { ?>
    <form method="post" action="phpmailer.php">
        <label for="to">Enviar para:</label>
        <select name="to" id="to">
            <option value="lealadiala">Lucas Leal</option>
            <option value="lealadiala" selected="selected">Clark Paiva</option>
            <option value="ari">Ari Neto</option>
        </select><br>
        <label for="subject">Assunto: <input type="text" name="subject" id="subject" maxlength="255"></label><br>
        <label for="name">Seu Nome: <input type="text" name="name" id="name" maxlength="255"></label><br>
        <label for="email">Seu endereço de email: <input type="email" name="email" id="email" maxlength="255"></label><br>
        <label for="email">Seu telefone: <input type="phone" name="phone" id="phone" maxlength="255"></label><br>
        <label for="query">Sua mensagem:</label><br>
        <textarea cols="30" rows="8" name="query" id="query" placeholder="Sua mensagem..."></textarea><br>
        <input type="submit" value="Submit">
    </form>
<?php } else {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
} ?>
</body>
</html>

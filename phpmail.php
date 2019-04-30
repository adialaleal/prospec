<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);




if(isset($_POST['submit'])){
    $to = "lealadiala@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Inscrição de Formulário";
    $subject2 = "Cópia da sua inscrição no formulário";
    $message = $first_name . " " . $last_name . " escreveu:" . "\n\n" . $_POST['message'];
    $message2 = "Aqui está uma cópia da sua mensagem " . $first_name . "\n\n" . $_POST['message'];

    $headers = "De:" . $from;
    $headers2 = "De:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Email enviado. Obrigado!" . $first_name . ", Entraremos em contato em breve!";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>

<head>
  <title>Inscrição de Formulário</title>
</head>
<body>
  <form action="" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>

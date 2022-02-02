<?php
if($_POST['email']!="") {
    $headers = "From: Braga IoT Challenge <no-reply@bragaiot.com>\r\n";
    $headers .= "Organization: Atouch\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$message = "<html>
<h3>Contacto via website</h3>
<b>Nome:</b> ".$_POST['nome']."
<br/><b>Email:</b> ".$_POST['email']."
<br/><b>Assunto:</b> ".$_POST['assunto']."
<br/><b>Mensagem:</b> ".nl2br($_POST['mensagem'])."
</html>";
$sendTo = "lmarso3@gmail.com";
$subject = "Contacto através do website";
mail($sendTo, $subject, $message, $headers);
header('Location: ../../index.php?e=1');
}else {
header('Location: ../../index.php?er=1');
}
?>
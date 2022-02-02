<?php
if($_POST['email']!="") {
$headers = "MIME-Version: 1.0\n";
$headers.= utf8_decode("From: zsbxcb xc  <henriqueguimaraes@designstation.com>\r\n");
$headers.= 'Content-type: text/html; charset=UTF-8'."\r\n";
$headers.= "$boundary\n";
$message = "<html>
<h3>Contacto via website</h3>
<b>Nome:</b> ".$_POST['nome']."
<br/><b>Email:</b> ".$_POST['email']."
<b>Assunto:</b> ".$_POST['assunto']."
<br/><b>Mensagem:</b> ".nl2br($_POST['mensagem'])."
</html>";
$sendTo = "henriqueguimaraes@designstation.com";
$subject = "Contacto através do website";
mail($sendTo, $subject, $message, $headers);
header('Location: index.php?e=1');
}else {
header('Location: index.php?er=1');
}
?>
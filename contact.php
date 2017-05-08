<?php
require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

// Define que a mensagem será SMTP

$mail->IsSMTP();

// Host do servidor SMTP

$mail->Host = "smtp.gmail.com";

// Autenticação | True

$mail->SMTPAuth = true;

// Usuário do servidor SMTP

$mail->Username = 'almeidatabita@gmail.com';

// Senha da caixa postal utilizada

$mail->Password = 'mac4rra0';

$mail->From = "email@dominio.com.br";
$mail->FromName = "Nome do Remetente ";
$mail->AddAddress('almeidatabita@gmail.com', 'Tábita');

// Define que o e-mail será enviado como HTML | True

$mail->IsHTML(true);

// Charset da mensagem (opcional)

$mail->CharSet = 'iso-8859-1';

// Assunto da mensagem

$mail->Subject = "Mensagem Teste";

// Conteúdo no corpo da mensagem

$mail->Body = 'Conteudo da mensagem';

// Conteúdo no corpo da mensagem(texto plano)

$mail->AltBody = 'Conteudo da mensagem em texto plano';

//Envio da Mensagem

$enviado = $mail->Send();

$mail->ClearAllRecipients();

if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "Motivo do erro: " . $mail->ErrorInfo;
}
?>
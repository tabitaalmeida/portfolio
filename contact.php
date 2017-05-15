<?php
$name = $_POST['name'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$subject = $_POST['subject'];
//pega os dados que foi digitado no ID sebject.

$tel = $_POST['tel'];

$message = $_POST['message'];
//pega os dados que foi digitado no ID message.

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Assunto: " . $subject . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Mensagem: " . $message . "\n";
$corpo .= "Telefone: " . $tel . "\n";


$email_to = 'contato@tabitaalmeida.com';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> alert('Formulário enviado com sucesso!'); </script>";
  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tábita Almeida \ Web Designer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Portfólio da Tábita Almeida. Web Designer Freelancer" />
	<meta name="keywords" content="tabita, almeida, portfolio, web, design, freelancer, " />
	<meta name="author" content="Tábita Almeida" />

	<!-- CSS STYLES -->
	<link rel="stylesheet" href="css/flexboxgrid.min.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chonburi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/slippry.css">

	<!-- PLUGINS -->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script src="js/slippry.min.js"></script>



</head>

<body>
	
 <header>
  <div class="row">
  
  <div class="col-xs-offset-3 col-xs-3">
  	<input type='checkbox' id='toggle' style='display:none;' />
  <label class='toggle-btn toggle-btn__cross' for='toggle'>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </label>
    <nav>
    <ul class="ftr menu">
     <li><a rel="nofollow" rel="noreferrer" href="http://tabitaalmeida.com/index.php#page1">Home</a></li>
      <li><a rel="nofollow" rel="noreferrer" href="http://tabitaalmeida.com/index.php#page2">Work</a></li>
      <li><a rel="nofollow" rel="noreferrer" href="http://tabitaalmeida.com/index.php#page5">Contact</a></li>
    </ul>
     <ul class="social">
    	<li><a href="https://www.facebook.com/TabitaAlmeida" target="_blank"><i class="fa fa-facebook"></i></a></li>
    	<li><a href="https://www.instagram.com/chatapracomr/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    	<li><a href="https://www.linkedin.com/in/tabitaalmeida" target="_blank"><i class="fa fa-linkedin"></i></a></li>
    	<li><a href="https://www.behance.net/tabitaalmeida" target="_blank"><i class="fa fa-behance"></i></a></li>
    </ul>
  </nav>
  </div>
  
  </div>

</header>

<section class="container" id="contact">
	<div class="row">
		<h2 class="ftr">Thanks for reach out! I'm going to reply you as soon as possible. </h2>
	</div>
</section>

</body>

</html>
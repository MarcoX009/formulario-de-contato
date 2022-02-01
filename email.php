<?php 
//verefica se o valor nao e vazio
	if(isset($_POST["email"]) && !empty(isset($_POST["email"]))){

	$nome = addslashes($_POST["name"]);
	$email = addslashes($_POST["email"]);
	$mensagem = addslashes($_POST["message"]);

//cabeçario
	$to = "contratomarcofernandes@gmail.com";
	$subject = "Contato - Marco  BR";
	$body = "Nome: ".$nome. "\r\n".
		 	"Email: ".$email. "\r\n".
		 	"Mensagem: ".$mensagem;
	$header = "contratomarcofernandes@gmail.com"."\r\n"."Replay-To:".$email."\r\n"
		."X-Mailer:PHP".phpversion();

if(mail($to,$subject,$body,$header)){
	echo ("Email enviado com sucesso!");
}else{
	echo ("Email não pode ser enviado");
}
}

 ?>
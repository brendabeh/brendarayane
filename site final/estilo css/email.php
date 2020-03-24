<?php
if (isset($_POST(['email'])$& !empty($_POST(['email'])))){
$nome = addslashes($_POST(['name']));
$email = addslashes($_POST(['email']));
$assunto = addslashes($_POST(['assunto']));
$mensagem = addslashes($_POST(['mensagem']));
$to = "brendabehh1@gmail.com";
$subjet = "Contato nlmt";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Assunto: ".$assunto. "\n"
        "Mensagem: ".$mensagem.;
$header = "From:brendabehhh@gmail.com "."\r\n"
          ."Reply-To: ".$email."\r\n"
          ."X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$bory,$header)){
  echo("Email enviado com sucesso");
}
else{
    echo("Email enviado não pode ser enviado");
}
}
?>

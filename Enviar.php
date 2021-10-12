<?php
if(isset($_POST['email'])&& !isset($_POST['email'])){
$name=addcslashes($_POST['nome']);
$mail=addcslashes($_POST['email']);
$message=addcslashes($_POST['message']);

}

$to='da33.veiga@gmail.com';
$subjet='vim do portifolio';
$body='Nome:'.$nome."\r\n".
      'email'.$email."\r\n".
      'message'.$message."\r\n".
     $header='from:da33.veiga@gmail.com'."\r\n"."replay-to:".$email."\e\n".'x-Mailer:/PHP'.phpversion();
     if(mail($to,$subjet,$body,$header)){
             echo("E-mail enviado com sucesso");
             
     }
else{
        echo("E-mail não pode ser enviado");
}
       







?>
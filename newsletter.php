<?php 

include("class.phpmailer.php");

function email($para_email, $para_nome, $assunto, $html) {
  $mail2 = new PHPMailer;
  $mail2->IsSMTP();
  $mail2->From = "seu_email@seudominio.com";
  $mail2->FromName = "DSOUZA Consultoria e Servicos em TI - Site";
  $mail2->Host = "smtp.gmail.com";
  $mail2->Port = 465;
  $mail2->SMTPAuth = true;
  $mail2->SMTPSecure = "ssl";
  $mail2->Username = "seu_email@seudominio.com";
  $mail2->Password = "senha_email";
    
  $mail2->AddAddress($para_email, $para_nome);
  $mail2->Subject = $assunto;
    
  $mail2->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";
    
  $mail2->MsgHTML($html);
  if ($mail2->Send()) {
    echo "<script>window.alert('Agradecemos seu contato. Seu cadastro foi realizado com sucesso, em breve entraremos em contato.'); javascript:history.back()</script>";
  } else {
    echo "$mail2->ErrorInfo";
  }
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];

$dados_newsletter = "<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>NewsLetter</title>
</head>
<body>
  <h1>Dados da NewsLetter:<h1><br><br>
  <table border='1px' cellpadding='5px' cellspacing='0' style='font-family: 'Montserrat', sans-serif;'>
    <tr>
      <th>Nome:</th>
      <td>$nome</td>
    </tr>
    <tr>
      <th>WhatsApp:</th>
      <td>$whatsapp</td>
    </tr>
    <tr>
      <th>E-mail:</th>
      <td>$email</td>
    </tr>
  </table>
</body>
</html>";

email("seu_email@seudominio.com", $nome, "NewsLetter - Site", $dados_newsletter);

?>
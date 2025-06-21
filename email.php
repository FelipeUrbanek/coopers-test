<?php

$nome = $_GET['nome'];
$whatsapp = $_GET['whatsapp'];
$email = $_GET['email'];
$mensagem = $_GET['mensagem'];

$mensagemHTML = '
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<style>

body {
font-family: sans-serif;
-webkit-font-smoothing: antialiased;
text-align: center;
}

h3 {
color: #5C75B0;
font-size: 30px;
text-align: center;
}

p {
color: rgb(111, 111, 111);
font-weight: 600;
}

table {
margin-right: auto;
margin-left: auto;
}

.example-table {
width: auto;
overflow: auto;
}

.example-table td {
background-color: rgb(238, 238, 238);
padding: 20px 30px;
color: rgb(111, 111, 111);
}
</style>
</head>
<body>

<h3>Contato | Formulario do Site</h3>

<table class="example-table">
<tbody>

<tr>
<td><strong>NOME</strong></td>
<td>' . $nome . '</td>
</tr>

<tr>
<td><strong>WHATSAPP</strong></td>
<td>' . $whatsapp . '</td>
</tr>

<tr>
<td><strong>E-MAIL</strong></td>
<td>' . $email . '</td>
</tr>

<tr>
<td><strong>MENSAGEM</strong></td>
<td>' . $mensagem . '</td>
</tr>

</tbody>
</table>
</body>
</html>
';
$assuntoemail = 'Contato | Formulario do Site';

$from = 'comercial@wdk.com.br';
$to = 'comercial@wdk.com.br';
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: Agência WDK <$from>";

mail($to, $assuntoemail, $mensagemHTML, $headers);

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>G-MEI</title>
<style>
* {
  box-sizing: border-box; 
 
}
body{
 padding:0px;
 margin:0px;
}
li  {
  display: inline;
  
}


.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #24292e;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #0066ff;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #0066ff;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #24292e;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
form{

max-width: 400px;
margin-left:300px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.registerbtn {
  background-color: #0066ff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
</style>
</head>
<body>

<div class="header">
  <h1 style="margin-left:50px;">G-MEI</h1>
  <li>Sobre</li>
  <li>Funcionalidades</li>
  <li>Contato</li>
  
</div>

<div class="row" style="background-color: #2b3137;" >
  <div class="col-3 col-s-3 menu" style="padding:20px; margin-left:200px;">
   <h1>O que é Lorem Ipsum?</h1>
	<p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
  </div>

  <div class="col-6 col-s-9">
    
   <form action="login.php" method="POST" style="background-color: white; padding:20px;">
 
    <h1>Logar</h1>
	
	<?php 
		if (isset($_SESSION['nao_autenticado'])):
	?>
	<h4>Usuário ou senha inválidos!</h4>
	<?php 
	  endif;
	  unset($_SESSION['nao_autenticado']);
	?>
    <p>Por favor, preencha este formulário para criar uma conta</p>
    <hr>
	
	

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Digite o E-mail" name=email required ><br>

    <label for="psw"><b>Senha</b></label><br>
    <input type="password" placeholder="Digite a senha" name=senha required><br>
  	
    <button type="submit" class="registerbtn" >Entrar </button>
	<br>
	<a href="cadastro.php"> Não é cadastrado? Cadastre-se</a>
</form>

  </div>
  
  
</div>

<h1>O que é Lorem Ipsum?</h1>
	<p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
	
	<h1>O que é Lorem Ipsum?</h1>
	<p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>

 <h1>O que é Lorem Ipsum?</h1>
	<p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>

 <div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>

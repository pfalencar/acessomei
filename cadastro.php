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
h1{
margin-left:50px;
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

max-width: 500px;
  margin: auto;
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
  <h1>G-MEI</h1>
</div>

<?php
	    if ($_SESSION['status_cadastro']):
	  ?>
	  
	    <div class = "notification is-success">
		  <p>Cadastro efetuado!<br>
		  Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
		</div>	
		
	  <?php
	    endif;
		unset($_SESSION['status_cadastro']);
	  ?> 	
	  
	  <?php
	    if ($_SESSION['usuario_existe']):
	  ?>
	  
		<div class="notification is-info">
		  <p> O usuário escolhido já existe. Informe outro e tente novamente.</p>
		</div>
	  <?php
	    endif;
		unset($_SESSION['usuario_existe']);
	  ?>	
		<br><br>



 
   <form action="cadastrar.php" method="POST">
 
    <h1>Cadastre-se</h1>
    <p>Por favor, preencha este formulário para criar uma conta</p>
    <hr>
	
	

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Digite o E-mail" name="email" required autofocus><br><br>

	
	<label for="email"><b>Nome</b></label><br>		  
	<input type="text" name="nome" class="input is-large" placeholder="Nome">
			<div>
	
    <label for="psw"><b>Senha</b></label><br>
    <input type="password" placeholder="Digite a senha" name="senha" required><br><br>

    <label for="psw-repeat"><b>Repita a Senha</b></label><br>
    <input type="password" placeholder="Repita a Senha" name="psw-repeat" required><br><br>
    <hr>
    <p>Ao criar uma conta, você concorda com nossos <a href="#">Termos e Privacidade</a>.</p>
	
    <button type="submit" class="registerbtn" >Cadastrar</button>
  
  

    <p style="text-align:center;">já tem uma conta?<a href="#">Login</a>.</p>
 
</form>



<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>

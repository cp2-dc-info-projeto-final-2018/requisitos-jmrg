<?php
	session_start();
  if(empty($_SESSION['erroLogin']) == false)
	{
		$erro = $_SESSION['erroLogin'];
		unset($_SESSION['erroLogin']);
	}
	else {
		$erro = null;
	}
	if (empty($_SESSION['emailUsuarioLogado']) == false){
		header('Location: conteudo.php');
	}
?>
<!DOCTYPE HTML lang="pt-br">
<style>
  body, html {
    height: 100%;
  }
  body {
    height: 100%;
    background: #3846DC;
    background: -webkit-linear-gradient(#3846DC, #00EAAC);
    background: -o-linear-gradient(#3846DC, #00EAAC);
    background: -moz-linear-gradient(#3846DC, #00EAAC);
    background: linear-gradient(#3846DC, #00EAAC);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .cadastrinho{
    background-color: white;
    border-radius: 10px;
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
    text-align: center;
    font-size:20px;
    width: 32%;
    height: 32%;
    top: 50%;
    right: 34%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .a{
    border: 0;
    width: 62%;
  }
  .imgm{
    height: 50%;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
</style>
<head> <title>Login-Adm</title> </head>
<HTML>
  <body>
    <div class="div_sup" class="content" style="transform: translateY(0px); opacity: 1;">
      <a href="paginainicial.php"><img class="imgm"  src="../imagens/b.png"/></a>
    </div>
    <div class="cadastrinho">
      <?php if ($erro != null) { ?>
        <div class="alert alert-warning">
					<ul>
						<script> alert("<?= $erro ?>"); </script>
					</ul>
				</div>
      <?php } ?>
      <br>
      <form action="Control/User/loginadm.php"  method="post">
        <label><b>LOGIN - ADM</b></label><br><br>
        <label>E-mail: </label><input type="text"  name="usuario" required  placeholder="Digite seu e-mail." class="a"><br>
        <label>Senha: </label><input type="password"  required  name="senha" placeholder="Digite sua senha." class="a"><br><br>
        <input type="submit" value="Entrar"><br>
      </form>
    </div>
    <br><br>
  </body>
</HTML>

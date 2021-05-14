<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>Form - PHP</title>
</head>
<body>
<form method="post" action="recebe.php" autocomplete="off">
<fieldset>
  <legend>Formulário</legend>
<label for="txt_nome">Nome: </label><input type="text" name="txt_nome" id="txt_nome" placeholder="Digite o nome" autofocus="" required><br>
<label for="num_ra">RA: </label><input type="number" name="num_ra" id="num_ra" placeholder="Digite o RA" required><br>
<label for="txt_senha">Senha: </label> <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite a senha"required><br>
<input type="submit" name="Enviar"><input type="reset" value="Limpar">
</fieldset>
</form>
</body>
</html>

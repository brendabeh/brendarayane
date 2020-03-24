<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário</title>
  </head>
  <body>
    <fieldset>
      <legend> <h3> Formulário de Contato</h3></legend>
      <form class="" action="processaForm.php" method="post">
        <label for="nome">Nome: </label><br>
        <input id="nome" name="nome" type="text" required><br>
        <label for="telefone">Telefone: </label><br>
        <input id="telefone" name="telefone" type="tel" required><br>
        <label for="email">Email: </label><br>
        <input id="email" name="email" type="email" required><br>
        <label for="assunto">Assunto: </label><br>
        <textarea name="assunto" id="assunto"></textarea><br>
        <input type="submit">
      </form>
    </fieldset>
    
  </body>
</html>

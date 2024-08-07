<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <p></p>
    
</head>
<body>
    <form action="autenticacao.php"method="post">
    
            <fieldset>
                <legend>Login</legend>
                <p></p>
            <label for="email">Email:</label>
        
            <input type="text" id="email" name="email" value=""><br>
       
        <p></p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="">
        <p>        </p>

<label>
    <input type="checkbox" name="lembrarme" value="lembrarme">
    Lembrarme
</label>
        
        </fieldset>
      <p></p>

        <button type="submit">entrar</button>
    </form>
</body>
</html>

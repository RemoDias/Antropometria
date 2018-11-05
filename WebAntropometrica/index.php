
<!DOCTYPE html>
<!--
Fazer a página de seleção de usuário e fazer a inserção com o pdo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>Web Antropométrica</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="cabeçadiv2">
            <center><h1>Web Antropométrica</h1></center>
        </div>
    </header>
<center>
    <div class="register-t">Cadastro</div>
    <div class="register-c">
        <form method="post" action="sistema/ru.php">
            <p>Nome</p>
            <input class="inputo" type="text" name="nome">
            <p>Idade</p>
            <input class="inputo" type="number">
            <p>Sexo</p>
            <div class="radio radio1">
                Masculino <input value="m" type="radio" name="sexo">
            </div>
            <div class="radio radio2">
                Feminino <input value="f" type="radio" name="sexo">
            </div>
        </form>
        <div class="register-e">
            <div class="button">
                <a href="Class/ConexãoDB.php">Slaughter</a>
            </div>
            <div class="button">
                <a href="Pollock.php">Pollock</a>
            </div>
        </div>
    </div>
    <br><br>
</center>
</div>

</body>
</html>

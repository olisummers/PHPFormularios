<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Página de Autenticação</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-primary">
            <a class="navbar-brand text-white" href="#">
                <img src="lHZUirRj_400x400.jpg" width="30" height="30" class="d-inline-block align-top" alt="Logo ETECIA Rosa">
                ETEC Irmã Agostina - Programação Web 2
            </a>
        </nav>
    </div>

    <div class="container-md my-md-3">
        <div class="w-50 mx-auto bg-light">
            <h1 class="p-2">Login - ETECIA</h1>
            <form name="formulario" action="autenticacao.php" method="POST">
                <div class="form-group p-2">
                    <label for="usuario">Nome de Usuário:</label>
                    <input class="form-control" name="usuario" id="usuario" type="text" placeholder="exemplo"><br/>
                    <label for="senha">Senha:</label>
                    <input class="form-control" name="senha" id="senha" type="password" placeholder="********"><br/>
                    <input class="btn btn-secondary" id="enviar" type="submit" value="Enviar">
                </div>
            </form>
            <span class="p-2"><button class="btn btn-secondary" onclick="document.formulario.reset();">Limpar caixas</button></span>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
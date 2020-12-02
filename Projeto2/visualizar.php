<!DOCTYPE html>
<!-- saved from url=(0060)https://getbootstrap.com/docs/4.5/examples/starter-template/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CRUD com Front</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="arquivos_files/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png"
          sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32"
          type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16"
          type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg"
          color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="arquivos_files/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Empresa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visualizar.php">Visualizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="atualizar.php">Atualizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deletar.php">Deletar</a>
            </li>
    </div>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="pesquisar.php">
        <input class="form-control mr-sm-2" name="consulta" type="text" placeholder="Buscar cadastro..."
               aria-label="Pesquisar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1 align="center">Clientes cadastrados</h1>
        <?
        include_once "controllers/connect.php";

        $sql = mysqli_query($link, "select * from cliente;");

        while ($vetor = mysqli_fetch_array($sql))
        {
        $id = $vetor['cliente_id'];
        $nome = $vetor['nome'];
        $email = $vetor['email'];
        $senha = $vetor['senha'];
        $enderecoid = $vetor['entrega_endereco_id'];
        $numero = $vetor['entrega_numero'];

        ?>
        <div class="row">
            <div class="col-sm-
                    <?
            if ($rua != null || $numero != null || $bairro != null || $nomecidade != null || $cep != null)
            {
                echo "12";
            }
            else
            {
                echo "6";
            }
            ?>
">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cliente id <? echo "$id"; ?> </h5>
                        <p class="card-text">Nome: <? echo "$nome"; ?></p>
                        <p class="card-text">Email: <? echo "$email"; ?></p>
                        <p class="card-text">Senha: <? echo "$senha"; ?></p>
                        <p class="card-text">EnderecoID: <? echo "$enderecoid"; ?></p>
                        <form action="controllers/deletarController.php" method="POST">
                            <input type="hidden" name="id" value="<? echo $id ?>">
                            <input type="hidden" name="deletar" value="0">
                            <input type="submit" class="btn btn-danger" value="Excluir">
                        </form>
                    </div>
                </div>
            </div>
            <?
            $sql2 = mysqli_query($link, "select * from endereco where endereco_id = '$enderecoid';");

            while ($vetor2 = mysqli_fetch_array($sql2))
            {
            $enderecoid = $vetor2['endereco_id'];
            $rua = $vetor2['rua'];
            $bairro = $vetor2['bairro'];
            $cidadeid = $vetor2['cidade_id'];
            $cep = $vetor2['cep'];


            $sql3 = mysqli_query($link, "select * from cidade where cidade_id = '$cidadeid';");

            while ($vetor3 = mysqli_fetch_array($sql3))
            {
            $cidade_id = $vetor3['endereco_id'];
            $nomecidade = $vetor3['nome'];
            ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Endereco id <? echo "$enderecoid"; ?> </h5>
                        <p class="card-text">Rua: <? echo "$rua"; ?></p>
                        <p class="card-text">Numero: <? echo "$numero"; ?></p>
                        <p class="card-text">Bairro: <? echo "$bairro"; ?></p>
                        <p class="card-text">Cidade: <? echo "$nomecidade"; ?></p>
                        <p class="card-text">Cep: <? echo "$cep"; ?></p>
                        <form action="controllers/deletarController.php" method="POST">
                            <input type="hidden" name="id" value="<? echo $enderecoid ?>">
                            <input type="hidden" name="deletar" value="1">
                            <input type="submit" class="btn btn-danger" value="Excluir">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?
    }


    }

    }
    ?>


</main><!-- /.container -->
<script src="arquivos_files/jquery-3.5.1.slim.min.js.download"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="arquivos_files/bootstrap.bundle.min.js.download"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<aside style="z-index: 2147483647;"></aside>
</body>
</html>
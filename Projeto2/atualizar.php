<!DOCTYPE html>
<!-- saved from url=(0060)https://getbootstrap.com/docs/4.5/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CRUD com Front</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="arquivos_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
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
            <!--<li class="nav-item">
                <a class="nav-link" href="atualizar.php">Atualizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deletar.php">Deletar</a>
            </li>-->
    </div>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="pesquisar.php">
        <input class="form-control mr-sm-2" name="consulta" type="text" placeholder="Buscar cadastro..." aria-label="Pesquisar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1 align="center">Atualizar cadastros</h1>
<?
$exibir = $_GET['exibir'];
$cad = $_GET['cad'];
$id = $_GET['id'];
    if($cad == 1)
    {
        ?>
        <p>CADASTRO DE CLIENTE</p>

        <form method="POST" action="controllers/atualizarController.php?cad=0">
            <?

            if ($id != null)
            {
                ?>
                <h3>Atualizando cliente ID <? echo $id ?></h3>
                <br>
                <input type="hidden" value="<? echo $id ?>" name="id">
                    <?
            }
            else
            {?>
                <label>ID a Atualizar</label>
                <input type="text" class="form-control" name="id" placeholder="Digite o id">
            <?
            }?>

            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o novo nome">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Digite o novo email">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite a nova senha">
            <!--
            <label>Endereco Id</label>
            <input type="password" class="form-control" name="idendereco" placeholder="Digite o novo id do endereco">
            <label>Numero Entrega</label>
            <input type="password" class="form-control" name="numero" placeholder="Digite o novo numero de entrega ndereco">-->
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
            <?
    }
    else if($cad == 2)
    {
        ?>
        <p>CADASTRO DE ENDERECO</p>
        <form method="POST" action="controllers/atualizarController.php?cad=1">
            <?
            if ($id != null)
            {
            ?>
                <h3>Atualizando endereço ID <? echo $id ?></h3>
                <br>
            <input type="hidden" value="<? echo $id ?>" name="id">
            <?
            }
            else
            {?>
                <label>ID a Atualizar</label>
                <input type="text" class="form-control" name="id" placeholder="Digite o id">
                <?
            }?>
            <label>Rua</label>
            <input type="text" class="form-control" name="rua" placeholder="Digite a nova rua">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="Digite o novo bairro">
            <label>Cep</label>
            <input type="text" class="form-control" name="cep" placeholder="Digite o novo cep">
            <!--
            <label>Endereco Id</label>
            <input type="password" class="form-control" name="idendereco" placeholder="Digite o novo id do endereco">
            <label>Numero Entrega</label>
            <input type="password" class="form-control" name="numero" placeholder="Digite o novo numero de entrega ndereco">-->
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <?
    }

    if($exibir == 0)
        {
            ?>
            <p> Qual cadastro deseja alterar?</p>
            <form method="POST" action="?cad=1&exibir=1">
                <input class="btn btn-primary" type="submit" value="Cliente">
            </form>
            <br>
            <form method="POST" action="?cad=2&exibir=1">
                <input class="btn btn-primary" type="submit" value="Endereco">
            </form>
        <?
        }
?>


    </div>

</main><!-- /.container -->
<script src="arquivos_files/jquery-3.5.1.slim.min.js.download" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="arquivos_files/bootstrap.bundle.min.js.download" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<aside style="z-index: 2147483647;"></aside></body></html>
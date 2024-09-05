<?php

if(isset($_POST['submit']))
    {

        include_once('config.php');
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $venda = $_POST['disponivel'];

        $result = mysqli_query($conexao, "INSERT INTO tb_cadastro (produto, valor, descricao, disponivel) 
        VALUES ('$produto', '$valor','$descricao','$venda')");

        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h3> INICIO </h3>
            </a>
        </div>
    </nav>


    <div class="container mt-5">
        <div>
            <form action="#" method="POST">
                <div class="card text-center">

                    <div class="card-header">
                        <h5> CADASTRO DE PRODUTO </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title"></h5>

                            <div class="col">
                                <label for=""><b>Nome do Produto</b></label>
                                <input type="text" class="form-control" placeholder="Produto" aria-label="Produto"
                                    id="produto" name="produto">
                            </div>
                            <div class="col">
                                <label for=""><b>Valor do Produto</b></label>
                                <input type="text" class="form-control" placeholder="Valor (R$)" aria-label="Valor"
                                    id="valor" name="valor">
                            </div>
                        </div>

                        <div class="col mt-4">
                            <label for=""><b>Descrição do Produto</b></label>
                            <input type="text" class="form-control" placeholder="Descrição do Produto"
                                aria-label="descricao" id="descricao" name="descricao">
                        </div>

                        <div class="mt-4">
                            <div>
                                <label for=""> <b> Disponivel para Venda? </b></label>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="disponivel"
                                        id="sim" value="1">
                                    <label class="form-check-label" for="inlineRadio1">SIM</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disponivel"
                                        id="nao" value="0">
                                    <label class="form-check-label" for="inlineRadio2">NÃO</label>
                                </div>
                            </div>
                        </div>


                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary mt-3">
                </div>





            </form>
        </div>
    </div>


</body>

</html>
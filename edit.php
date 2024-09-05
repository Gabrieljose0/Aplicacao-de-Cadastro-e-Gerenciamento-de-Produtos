<?php
    include_once('config.php');

if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM tb_cadastro WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['id'];
                $produto = $user_data['produto'];
                $valor = $user_data['valor'];
                $descricao = $user_data['descricao'];
                $venda = $user_data['disponivel'];
            }    
        }
        else{
            header('Location: index.php');
        }

    }
    else
    {
        header('Location: index.php');
    }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIÇÃO</title>

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
            <form action="saveEdit.php" method="POST">
                <div class="card text-center">

                    <div class="card-header">
                        <h5> EDITAR PRODUTO </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title"></h5>

                            <div class="col">
                                <label for="produto"><b>Nome do Produto</b></label>
                                <input type="text" class="form-control" placeholder="Produto" aria-label="Produto"
                                    id="produto" name="produto" value="<?php echo $produto ?>">
                            </div>
                            <div class="col">
                                <label for="valor"><b>Valor do Produto</b></label>
                                <input type="text" class="form-control" placeholder="Valor (R$)" aria-label="Valor"
                                    id="valor" name="valor" value="<?php echo $valor ?>">
                            </div>
                        </div>

                        <div class="col mt-4">
                            <label for="descricao"><b>Descrição do Produto</b></label>
                            <input type="text" class="form-control" placeholder="Descrição do Produto"
                                aria-label="descricao" id="descricao" name="descricao" value="<?php echo $descricao ?>">
                        </div>

                        <div class="mt-4">
                            <div>
                                <label for=""> <b> Disponivel para Venda? </b></label>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="disponivel"
                                        id="disponivel_sim" value="1" <?php if ($venda == '1') echo 'checked'; ?>>
                                    <label class="form-check-label" for="disponivel_sim">SIM</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disponivel"
                                        id="disponivel_nao" value="0" <?php if ($venda == '0') echo 'checked'; ?>>
                                    <label class="form-check-label" for="disponivel_nao">NÃO</label>
                                </div>
                            </div>
                        </div>


                    </div>

                    <input type="hidden" name="id" value=<?php echo $id;?>>
                    <input type="submit" name="update" id="submit" class="btn btn-primary mt-3">
                </div>





            </form>
        </div>
    </div>


</body>

</html>
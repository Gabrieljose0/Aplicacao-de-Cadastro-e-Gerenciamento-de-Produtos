<?php

include_once('config.php');
if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM tb_cadastro WHERE id LIKE '%$data%' or produto LIKE '%$data%' ORDER BY valor DESC";
}
else
{
    $sql = "SELECT * FROM tb_cadastro WHERE disponivel = 1 ORDER BY valor ASC";
}
$result = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" id="pesquisar">
                <!-- <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar"> -->
                <button class="btn btn-outline-success" onclick="searchData()">Search</button>
            </div>
        </div>
    </nav>



    <!-- LISTAGEM -->
    <div class="container mt-5">
        <div class="position-absolute end-50">

            <a type="buttom" href="cadastro.php" style="border: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">VALOR</th>
                    </tr>
                </thead>
    
                
                    
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                    echo   "<tbody>
                                            <tr>
                                                <th> <a href='edit.php?id=$user_data[id]'>". $user_data['produto'] ."</a></th>
                                                <td> R$". str_replace(",",".",$user_data['valor']) . "</td>
                                            </tr>
                                        </tbody>";
                                }
                                
                        ?>
                    
                
    
            </table>
        <div>
    </div>


<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'index.php?search='+search.value;
    }
</script>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício24</title>
</head>

<body>

    <h2>Pesquisa entre Habitantes</h2>

    <?php include('funcoes.php')?>
    
    <form class ="form-control" method ="POST">

        <h4>Primeiro Habitante</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="Salário" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de Filhos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="filhos" placeholder="Número de filhos" required> 
        </div>

        <h4>Segundo Habitante</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario2" placeholder="Salário" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de Filhos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="filhos2" placeholder="Número de filhos" required>
        </div>

        <h4>Terceiro Habitante</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario3" placeholder="Salário" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de Filhos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="filhos3" placeholder="Número de filhos" required>
        </div>
 

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                //coletando os numeros dos campos
                if(isset($_POST['salario']) && isset($_POST['filhos']) && isset($_POST['salario2']) && isset($_POST['salario3']) && isset($_POST['filhos3'])  && $_POST['salario'] != "" && $_POST['filhos'] != "" && $_POST['salario2'] != "" && $_POST['filhos2'] != "" && $_POST['salario3'] != "" && $_POST['filhos3'] != ""){
                    $salario = $_POST['salario'];
                    $filhos = $_POST['filhos'];
                    $salario2 = $_POST['salario2'];
                    $filhos2 = $_POST['filhos2'];
                    $salario3 = $_POST['salario3'];
                    $filhos3 = $_POST['filhos3'];
                }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            
            if(isset($_POST['salario']) && isset($_POST['filhos']) && isset($_POST['salario2']) && isset($_POST['salario3']) && isset($_POST['filhos3'])  && $_POST['salario'] != "" && $_POST['filhos'] != "" && $_POST['salario2'] != "" && $_POST['filhos2'] != "" && $_POST['salario3'] != "" && $_POST['filhos3'] != ""){                  
                if($salario < 0 || $salario2 < 0 || $salario3 < 0){
                    echo "Digite um salário possitivo!";
                }else{
                    echo "\n A média salárial dos habitantes é: " . mediaAritmetica($salario,$salario2,$salario3);
                    echo "\n A média de filhos dos habitantes é: " . mediaFilhos($filhos,$filhos2,$filhos3);
                    echo "\n" . habitantesMaiorSalario($salario,$salario2,$salario3);
                    echo "\n" . habitantesSalario($salario,$salario2,$salario3,$num1);
                }
            }

            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>
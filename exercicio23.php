<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício23</title>
</head>

<body>

    <h2>Reajuste de Funcionários</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="Salário" required>
        </div>

 

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                //coletando os numeros dos campos
                if(isset($_POST['salario']) && $_POST['salario'] != ""){
                    $num1 = $_POST['salario'];
                }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            
                if(isset($_POST['salario']) && $_POST['salario'] != ""){
                    if($num1 < 4554){
                        echo "\n Seu reajuste é de 50%";
                        echo "\nO reajuste é: " . reajuste($num1);
                    }else if($num1 >= 4554 && $num1 <= 15180){
                        echo "\n Seu reajuste é de 20%";
                        echo "\nO reajuste é: " . reajuste($num1);
                    }else if($num1 >= 15180 && $num1 <= 30360){
                        echo "\n Seu reajuste é de 15%";
                        echo "\nO reajuste é: " . reajuste($num1);
                    }else{
                        echo "\n Seu reajuste é de 10%";
                        echo "\nO reajuste é: " . reajuste($num1);
                    }
                }
            
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercício 02</title>
</head>

<body>
    <h2>De a média de duas notas digitadas:</h2>
    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeira Nota:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="primeiraNota" placeholder="Primeira Nota" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segunda Nota:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="segundaNota" placeholder="Segunda Nota" required>
        </div>
    

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos 
                if(isset($_POST['primeiraNota']) && isset($_POST['segundaNota']) && $_POST['primeiraNota'] != "" && $_POST['segundaNota'] != ""){
                $num1 = $_POST['primeiraNota'];
                $num2 = $_POST['segundaNota'];
            }
            ?>
        </button>
        <br><br>
    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
                if(isset($_POST['primeiraNota']) && isset($_POST['segundaNota']) && $_POST['primeiraNota'] != "" && $_POST['segundaNota'] != ""){
                    if(($num1 >= 0 && $num1 < 10) && ($num2 >= 0 && $num2 < 10)){
                        echo "A media é: ".media($num1,$num2);
                    
                    }else{
                        echo "Preencha os campos com valores entre 0 à 10!";
                    }
                }
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>
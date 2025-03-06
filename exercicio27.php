<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício27</title>
</head>

<body>

    <h2>Converção de graus Celsius em Fahrenheit</h2>

    <?php include('funcoes.php')?>
    
    <form class ="form-control" method ="POST">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Temperatura em Graus Celsius:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="celsius" placeholder="Temperatura em Graus Celsius">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                //coletando os numeros dos campos
                if(isset($_POST['celsius'])  && $_POST['celsius'] != ""){
                    $celsius = $_POST['celsius'];

                }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            
            if(isset($_POST['celsius'])  && $_POST['celsius'] != ""){                    
                if($celsius == ""){
                    echo "Preencha os campos!";
                }else{
                    echo "A temperatura em graus Fahrenheit é: " . graus($celsius,$fahrenheit) . "F";
                
                }
            }

            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>
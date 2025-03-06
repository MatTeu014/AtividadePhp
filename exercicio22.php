<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício22</title>
</head>

<body>

    <h2>Média das Notas de uma Sala de 20 Alunos</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero1" placeholder="Primeiro Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero2" placeholder="Segundo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Terceiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero3" placeholder="Terceiro Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quarto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero4" placeholder="Quarto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quinto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero5" placeholder="Quinto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sexto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero6" placeholder="Sexto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sétimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero7" placeholder="Sétimo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Oitavo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero8" placeholder="Oitavo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nono Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero9" placeholder="Nono Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero10" placeholder="Décimo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Primeiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero11" placeholder="Décimo Primeiro Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Segundo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero12" placeholder="Décimo Segundo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Terceiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero13" placeholder="Décimo Terceiro Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Quarto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero14" placeholder="Décimo Quarto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Quinto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero15" placeholder="Décimo Quinto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Sexto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero16" placeholder="Décimo Sexto Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Sétimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero17" placeholder="Décimo Sétimo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Oitavo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero18" placeholder="Décimo Oitavo Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Nono Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero19" placeholder="Décimo Nono Número" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Vigésimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero20" placeholder="Vigésimo  Número" required>
        </div>
 

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                //coletando os numeros dos campos
                if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]) && isset($_POST["numero4"]) && isset($_POST["numero5"]) && isset($_POST["numero6"]) && isset($_POST["numero7"]) && isset($_POST["numero8"]) && isset($_POST["numero9"]) && isset($_POST["numero10"]) && isset($_POST["numero11"]) && isset($_POST["numero12"]) && isset($_POST["numero13"]) && isset($_POST["numero14"]) && isset($_POST["numero15"]) && isset($_POST["numero16"]) && isset($_POST["numero17"]) && isset($_POST["numero18"]) && isset($_POST["numero19"]) && isset($_POST["numero20"]) 
                && $_POST["numero1"] != "" && $_POST["numero2"] != "" && $_POST["numero3"] != "" && $_POST["numero4"] != "" && $_POST["numero5"] != "" && $_POST["numero6"] != "" && $_POST["numero7"] != "" && $_POST["numero8"] != "" && $_POST["numero9"] != "" && $_POST["numero10"] != "" && $_POST["numero11"] != "" && $_POST["numero12"] != "" && $_POST["numero13"] != "" && $_POST["numero14"] != "" && $_POST["numero15"] != "" && $_POST["numero16"] != "" && $_POST["numero17"] != "" && $_POST["numero18"] != "" && $_POST["numero19"] != "" && $_POST["numero20"] != ""){
                    $num1 = $_POST['numero1'];
                    $num2 = $_POST['numero2'];
                    $num3 = $_POST['numero3'];
                    $num4 = $_POST['numero4'];
                    $num5 = $_POST['numero5'];
                    $num6 = $_POST['numero6'];
                    $num7 = $_POST['numero7'];
                    $num8 = $_POST['numero8'];
                    $num9 = $_POST['numero9'];
                    $num10 = $_POST['numero10'];
                    $num11 = $_POST['numero11'];
                    $num12 = $_POST['numero12'];
                    $num13 = $_POST['numero13'];
                    $num14 = $_POST['numero14'];
                    $num15 = $_POST['numero15'];
                    $num16 = $_POST['numero16'];
                    $num17 = $_POST['numero17'];
                    $num18 = $_POST['numero18'];
                    $num19 = $_POST['numero19'];
                    $num20 = $_POST['numero20'];
                }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            
            if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]) && isset($_POST["numero4"]) && isset($_POST["numero5"]) && isset($_POST["numero6"]) && isset($_POST["numero7"]) && isset($_POST["numero8"]) && isset($_POST["numero9"]) && isset($_POST["numero10"]) && isset($_POST["numero11"]) && isset($_POST["numero12"]) && isset($_POST["numero13"]) && isset($_POST["numero14"]) && isset($_POST["numero15"]) && isset($_POST["numero16"]) && isset($_POST["numero17"]) && isset($_POST["numero18"]) && isset($_POST["numero19"]) && isset($_POST["numero20"]) 
            && $_POST["numero1"] != "" && $_POST["numero2"] != "" && $_POST["numero3"] != "" && $_POST["numero4"] != "" && $_POST["numero5"] != "" && $_POST["numero6"] != "" && $_POST["numero7"] != "" && $_POST["numero8"] != "" && $_POST["numero9"] != "" && $_POST["numero10"] != "" && $_POST["numero11"] != "" && $_POST["numero12"] != "" && $_POST["numero13"] != "" && $_POST["numero14"] != "" && $_POST["numero15"] != "" && $_POST["numero16"] != "" && $_POST["numero17"] != "" && $_POST["numero18"] != "" && $_POST["numero19"] != "" && $_POST["numero20"] != ""){
                    echo "\n" . mediaSala($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12,$num13,$num14,$num15,$num16,$num17,$num18,$num19,$num20,$total);
                }         
            
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>
<?php //tag php

    //ide compila comandos das linguagens em linguagem de maquina(0 ou 1)
    //linguagem de alto nivel sao linguagens que sao mais proxima do ser humano como esta
    //linguagens de baixo nivel sao linguagens mais proximas da linguagem de maquina


    $num1 = 0; //Instanciar uma variavel
    $num2 = 0;
    $num3 = 0;
    $num4 = 0;
    $num5 = 0;
    $num6 = 0;
    $num7 = 0;
    $num8 = 0;
    $num9 = 0;
    $num10 = 0;
    $num11 = 0;
    $num12 = 0;
    $num13 = 0;
    $num14 = 0;
    $num15 = 0;
    $num16 = 0;
    $num17 = 0;
    $num18 = 0;
    $num19 = 0;
    $num20 = 0;
    $total = 0;
    $cor = "";

    $eleitores = 0;
    $brancos = 0;
    $nulos = 0;
    $validos = 0;

    $salario = 0;
    $reajuste = 0;

    $custoFabrica = 0;

    $numeroCarros = 0;
    $valorTotal = 0;
    $salarioFixo = 0;
    $valorVenda = 0;

    $anos = 0;
    $meses = 0;
    $dias = 0;
    
    $macas = 0;

    $conta = 0;
    $saldo = 0;
    $debito = 0;
    $credito = 0;

    $valorN;   

    $soma = 0;
    $resposta = "";

    $filhos = 0;
    $filhos2 = 0;
    $filhos3 = 0;
    $salario2 = 0;
    $salario3 = 0;

    $area = 0;
    $raio = 0;

    $desconto = 0;
    $valorHora = 0;
    $horas = 0;

    $celsius = 0;
    $fahrenheit = 0;

    $altura = 0;
    
    $tempos = 0;
    $velocidade = 0;

    function somar($num1,$num2){ //$num1 e $num2 são parametros e function é um metodo
        return $num1 + $num2;

    } //fim do metodo

    function subtrair($num1,$num2){
        return $num1 - $num2;
    } //fim do metodo

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim de metodo
    
    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }//fim de metodo    


    function media($num1,$num2){
        return ($num1 + $num2) / 2;
    }

    function maiorNumero($num1,$num2){
        if($num1 > $num2){
            return "O maior número é: " . $num1;
        }else if($num1 == $num2){
            return "Os números são iguais";
        }else{
            return "O maior número é: " . $num2;
        }
    }

    function mediaAritmetica($num1,$num2,$num3){
        return($num1 + $num2 + $num3)/3;   
    }

    function antecessor($num1){
        return($num1 - 1);
    }

    function areaRetangulo($num1,$num2){
        return $num1 * $num2;
    }

    function porcentagem($num1,$num2){        
        return ($num2 * 100) / $num1;       

    }
    

    function salario($salario,$reajuste){
        return (($reajuste / 100) * $salario + $salario);
    }

    //para descobrir o calculo: primeiramente eu descobri qual era o resultado de 28% e 45% de um valor inicial qualquer como por exemplo 100, independentemente da ordem, o resultado sera o mesmo, no caso 185.6, entao se eu quiser descobrir quanto é 28% e 45% de outro valor eu tenho que descobrir quanto que vale 85.6% daquele valor e somar com ele.
    function custoCarro($custoFabrica){
        return (($custoFabrica * 0.856) + $custoFabrica);
    }

    function salarioVendedor($numeroCarros,$valorTotal,$salarioFixo,$valorVenda){
        return ($valorTotal * 0.05) + $salarioFixo + ($numeroCarros * $valorVenda);
    }               

    function idade($anos,$meses,$dias){
        return ($anos * 365) + ($meses * 30) + $dias;
    }

    function macas($macas){
        if($macas <= 11){
            return $macas * 1.3;
        }else if($macas >= 12){
            return $macas * 1;
        }
    }

    function salariofinal($salarioFixo,$valorVenda){
        if($valorVenda <= 1500){
            return $valorVenda * 0.03 + $salarioFixo;
        }else{
            return $valorVenda * 0.0815 + $salarioFixo;
        }
    }

    function saldo($conta,$saldo,$debito,$credito){
        return $saldo - $debito + $credito;
        
    }

    function tabuada($num1,$num2){
        for($i = 1; $i <= 10; $i++){
            $num2 .= "-" . $num1 * $i;
        }
        return $num2;
    }


    function valorN($num1,$valorN){
        
        for($i = 2; $i < $num1; $i++){  
            $valorN .= $i . " ";
        }
        return $valorN;
    }

    function numeroNegativo($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$total){
       if($num1 < 0){
        $total .= "/" . $num1;
       }
       if($num2 < 0){
        $total .= $num2;
       }
       if($num3 < 0){
        $total .= $num3;
       }
       if($num4 < 0){
        $total .= $num4;
       }
       if($num5 < 0){
        $total .= $num5;
       }
       if($num6 < 0){
        $total .= $num6;
       }
       if($num7 < 0){
        $total .= $num7;
       }
       if($num8 < 0){
        $total .= $num8;
       }
       if($num9 < 0){
        $total .= $num9;
       }
       if($num10 < 0){
        $total .= $num10;
       }
       return $total;
    }
    

    function menorquarenta($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$total){
        if($num1 < 40){
            $total += $num1;            
        }
        if($num2 < 40){
            $total += $num2;
        }
        if($num3 < 40){
            $total += $num3;
        }
        if($num4 < 40){
            $total += $num4;
        }
        if($num5 < 40){
            $total += $num5;
        }
        if($num6 < 40){
            $total += $num6;
        }
        if($num7 < 40){
            $total += $num7;
        }
        if($num8 < 40){
            $total += $num8;
        }
        if($num9 < 40){
            $total += $num9;
        }
        if($num10 < 40){
            $total += $num10;
        }
        return $total;
    }
  
    function quinzeCem($soma){
        for($i = 16; $i < 100; $i++){
            $soma += $i;
        }
        return $soma / 84;
    }
    
    function maiorNumero2($num1,$num2,$num3){
        if($num1 > $num2 && $num1 > $num3){
            return "O maior número é o: " . $num1;
        }else if($num2 > $num1 && $num2 > $num3){   
            return "O maior número é o: " . $num2;
        }else if($num3 > $num1 && $num3 > $num2){
            return "O maior número é o: " . $num3;
        }else if($num1 == $num2 && $num1 == $num3){
            return "Os números são iguais";

        }
        
    }

    function mediaSala($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12,$num13,$num14,$num15,$num16,$num17,$num18,$num19,$num20,$total){
        if($num1 > 10 || $num2 > 10 ||  $num3 > 10 || $num4 > 10 || $num5 > 10 || $num6 > 10 || $num7 > 10 || $num8 > 10 || $num9 > 10 || $num10 > 10 || $num11 > 10 || $num12 > 10 || $num13 > 10 || $num14 > 10 || $num15 > 10 || $num16 > 10 || $num17 > 10 || $num18 > 10 || $num19 > 10 || $num20 > 10){
            return "Digite números iguais ou menores que 10";
        }else{
            $total += $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12 + $num13 + $num14 + $num15 + $num16 + $num17 + $num18 + $num19 + $num20;
            return "A média da sala de 20 alunos é: " . $total / 20;
        }
    }

    function reajuste($num1){
        if($num1 < 4554){
            return $num1 * 0.5 + $num1;
        }else if($num1 >= 4554 && $num1 <= 15180){
            return $num1 * 0.2 + $num1;
        }else if($num1 >= 15180 && $num1 <= 30360){
            return $num1 * 0.15 + $num1;
        }else{
            return $num1 * 0.1 + $num1;
        }
    }

    function mediaFilhos($filhos,$filhos2,$filhos3){
        return ($filhos + $filhos2 + $filhos3) / 3;

    }

    function habitantesSalario($salario,$salario2,$salario3,$num1){
        if($salario < 150){
            $num1 += 1;
        }
        if($salario2 < 150){
            $num1 += 1;
        }
        if($salario3 < 150){
            $num1 += 1;
        }

        if($num1 == 1){
            return "O percentual de habitantes com salário menor que 150 é de: " . 100 / 3 . "% do total de habitantes";
        }else if($num1 == 2){
            return "O percentual de habitantes com salário menor que 150 é de: " . 200 / 3 . "% do total de habitantes";
        }else if($num1 == 3){
            return "O percentual de habitantes com salário menor que 150 é de: 100% do total de habitantes";
        }
        
    }

    function habitantesMaiorSalario($salario,$salario2,$salario3){
        if($salario > $salario2 && $salario > $salario3){
            return "O maior salário é: " . $salario;
        }else if($salario2 > $salario && $salario2 > $salario3){   
            return "O maior salário é: " . $salario2;
        }else if($salario3 > $salario && $salario3 > $salario2){
            return "O maior salário é: " . $salario3;
        }else if($salario == $salario2 && $salario == $salario3){
            return "Os salários são iguais";
        }        
    }

    function circunferencia($raio,$area){
        $area = ($raio * $raio) * 3.14159;
        return $area;
    }

    function salarioBruto($horas,$valorHora){
        return $horas * $valorHora;
    }

    function totalDesconto($desconto,$horas,$valorHora){
        return ($desconto/100)  * $horas * $valorHora;
    }

    function salarioLiquido($desconto,$horas,$valorHora){
        return ($horas * $valorHora - ($desconto/100)  * $horas * $valorHora);
    }             

    function graus($celsius,$fahrenheit){
        return ($fahrenheit = 9 * $celsius + 160) / 5;
    }

    function lataOleo($raio,$altura){
        return 3.14159 * ($raio * $raio) * $altura;
    }

    function distancia($tempo,$velocidade){
        return $tempo * $velocidade;
    }

    function combustivel($tempo,$velocidade){
        return ($tempo * $velocidade) / 12;
    }

    function maiorNumero3($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10){
        if($num1 > $num2 && $num1 > $num3 && $num1 > $num4 && $num1 > $num5 && $num1 > $num6 && $num1 > $num7 && $num1 > $num8 && $num1 > $num9 && $num1 > $num10){
            return "O maior número é o: " . $num1;
        }else if($num2 > $num1 && $num2 > $num3 && $num2 > $num4 && $num2 > $num5 && $num2 > $num6 && $num2 > $num7 && $num2 > $num8 && $num2 > $num9 && $num2 > $num10){   
            return "O maior número é o: " . $num2;
        }else if($num3 > $num1 && $num3 > $num2 && $num3 > $num4 && $num3 > $num5 && $num3 > $num6 && $num3 > $num7 && $num3 > $num8 && $num3 > $num9 && $num3 > $num10){
            return "O maior número é o: " . $num3;
        }else if($num4 > $num1 && $num4 > $num2 && $num4 > $num3 && $num4 > $num5 && $num4 > $num6 && $num4 > $num7 && $num4 > $num8 && $num4 > $num9 && $num4 > $num10){
            return "O maior número é o: " . $num4;
        }else if($num5 > $num1 && $num5 > $num2 && $num5 > $num3 && $num5 > $num4 && $num5 > $num6 && $num5 > $num7 && $num5 > $num8 && $num5 > $num9 && $num5 > $num10){
            return "O maior número é o: " . $num5;
        }else if($num6 > $num1 && $num6 > $num2 && $num6 > $num3 && $num6 > $num4 && $num6 > $num5 && $num6 > $num7 && $num6 > $num8 && $num6 > $num9 && $num6 > $num10){
            return "O maior número é o: " . $num6;
        }else if($num7 > $num1 && $num7 > $num2 && $num7 > $num3 && $num7 > $num4 && $num7 > $num5 && $num7 > $num6 && $num7 > $num8 && $num7 > $num9 && $num7 > $num10){
            return "O maior número é o: " . $num7;
        }else if($num8 > $num1 && $num8 > $num2 && $num8 > $num3 && $num8 > $num4 && $num8 > $num5 && $num8 > $num6 && $num8 > $num7 && $num8 > $num9 && $num8 > $num10){
            return "O maior número é o: " . $num8;
        }else if($num9 > $num1 && $num9 > $num2 && $num9 > $num3 && $num9 > $num4 && $num9 > $num5 && $num9 > $num6 && $num9 > $num7 && $num9 > $num8 && $num9 > $num10){
            return "O maior número é o: " . $num9;
        }else if($num10 > $num1 && $num10 > $num2 && $num10 > $num3 && $num10 > $num4 && $num10 > $num5 && $num10 > $num6 && $num10 > $num7 && $num10 > $num8 && $num10 > $num9){
            return "O maior número é o: " . $num10;
        }else if($num1 == $num2 && $num1 == $num3 && $num1 == $num4 && $num1 == $num5 && $num1 == $num6 && $num1 == $num7 && $num1 == $num8 && $num1 == $num9 && $num1 == $num10){
            return "Os números são iguais";
            
        }
        
    }

    function mediaAritmetica2($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10){
        return($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7+ $num8 + $num9 + $num10)/10;   
    }

?>


<?php
    // Objetivo: arquivo com funções de separação de números pares e import_request_variables
    // Autor: Danilo
    // Data: 24/02/2022
    // Versão: 1.0


    $resultado = numerosParesImpares(1,100);
    echo('<pre>');
    print_r($resultado);
    echo('</pre>');


    function numerosPares($numeroInicial, $numeroFinal){
        
        //Recebendo dados de argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;

        $pares = array();
        $contPar = (int) 0;

        //Repetição para separar os numeros pares
        while($numInicial <= $numFinal){

            //Valida se o numero corrente é par
            if($numInicial % 2 == 0){
                $pares[$contPar] = $numInicial;
                $contPar++;
            }
            $numInicial++;
        }
        return $pares;
    }

    function numerosImpares($numeroInicial, $numeroFinal){
        
        //Recebendo dados de argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;

        $impares = array();
        $contImpar = (int) 0;

        while($numInicial <= $numFinal){
            if($numInicial % 2 != 0){
                $impares[$contImpar] = $numInicial;
                $contImpar++;
            }
            $numInicial++;
        }
        return $impares;
    }

    function numerosParesImpares($numeroInicial, $numeroFinal){
        //recebendo argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;
        
        //Declarações dos arrays(pares e impares) e seus contadores (indices)
        $pares = array();
        $impares = array();

        //chamando as funçoes de pares e impares para separar os números
        $pares = numerosPares($numInicial, $numFinal);
        $impares = numerosImpares($numInicial, $numFinal);

        //Criamos uma array contendo dois arrays (numeros pares e impares)
        $paresImpares = array(
            "listaPares" => $pares,
            "listaImpares" => $impares
        );

        return $paresImpares;
    }
?>
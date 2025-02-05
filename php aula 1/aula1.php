<?php
/'Esse programa é para sortear as frutas de um vetor que armazena um conjunto de frutas.'/
$frutas = ['Abacate',"Abacaxi","Banana","Caqui","Goiba","Kiwi","Manga","Maça","Pera","Acerola","Tomate","Morango","Tangerina","Uva","Limão","Melão","Melancia","Mamão."];

//Um subprograma como uma função.

function gerar_seq_aleatorio($qtd,$frutas){
    echo "As frutas sorteadas: <br> ";
    for($i = 1; $iqtq; $i++){
        //GERAR UM NÚMERO ALEATÓRIO DE 1 A 19
        $indice = rand(0,sizeof($frutas)-1); 
        $frutasSorteadas[] = $frutas[$indice];
        echo $frutas[$indice]."   ";
    }

    echo"<br>";
    sort($frutasSorteadas); //Ordenar as frutas sorteadas.
    echo "As frutas sorteadas ordenadas: <br> ";
    foreach($frutasSorteadas as $frutas){
        echo $fruta. "   ";
        }
}

//Chamar subprograma para executar
gerar_seq_aleatorio(10,$frutas);

<?php
// 'Esse programa é para sortear as frutas de um vetor que armazena um conjunto de frutas.'
$frutas = ['Abacate', 'Abacaxi', 'Banana', 'Caqui', 'Goiba', 'Kiwi', 'Manga', 'Maçã', 'Pera', 'Acerola', 'Tomate', 'Morango', 'Tangerina', 'Uva', 'Limão', 'Melão', 'Melancia', 'Mamão'];

// Um subprograma como uma função
function gerar_seq_aleatorio($qtd, $frutas) {
    echo "As frutas sorteadas: <br>";
    
    $frutasSorteadas = [];  // Definir a variável para armazenar as frutas sorteadas
    for($i = 0; $i < $qtd; $i++){  // Corrigir a condição do loop (i < qtd)
        // Gerar um número aleatório de 0 a 18
        $indice = rand(0, count($frutas) - 1);  
        $frutasSorteadas[] = $frutas[$indice];  // Armazenar a fruta sorteada
        echo $frutas[$indice] . "   ";  // Exibir a fruta sorteada
    }

    echo "<br>";

    sort($frutasSorteadas);  // Ordenar as frutas sorteadas
    echo "As frutas sorteadas ordenadas: <br>";
    foreach($frutasSorteadas as $fruta) {  // Corrigir a variável do loop
        echo $fruta . "   ";  // Exibir cada fruta ordenada
    }
}

// Chamar subprograma para executar
gerar_seq_aleatorio(10, $frutas);
?>


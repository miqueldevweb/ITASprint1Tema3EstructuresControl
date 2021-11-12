<?php
//Este ejercicio lo venía haciendo de otra manera, he encontrado esta solución en internet y no la había visto, me parece más eficiente que la mia asi que la he estudiado y puesto en práctica. Se parte de la base de que los numeros buscados son los indices de un array booleano, true/false indicaran si el indice es primo o no.
//Mi consulta por internet viene de la necesidad de algún tipo de lista doblemente enlazada, el array visto hasta ahora no lo es. En la documentación encontrada he visto que se utiliza una BBDD como lista, cuestión que queda para temas posteriores.
$userNumber = 800;

for($i = 0; $i < $userNumber; $i++){    //Inicializa el array, se necesita que todos los valores sean TRUE para que mas adelante se comprueben uno por uno.
  $numbers[$i] = true;
}


for ($n = 2; $n < $userNumber; $n++){   //El primer numero primo es el 2 asi que empezamos a recorrer el array desde el indice 2.
  if ($numbers[$n]){    //Si el numero esta marcado como primo recorremos los múltiplos hasta el numero objetivo. Por eso hemos inicializado todos los elementos con TRUE.
    for ($i = $n * $n ;$i < $userNumber; $i += $n){ //Recorre todos los multiplos del numero primo hasta el objetivo. Idea base de la criba de Eratostenes.
       $numbers[$i] = false;
    }
  }
}

for ($n = 2; $n < $userNumber; $n++){
  if ($numbers[$n]){    //En mi algoritimo manipulaba los elementos del array asignado 0 a los elementos no primos. Este metodo es claramente mejor.
    echo $n." ";
  }
}
?>
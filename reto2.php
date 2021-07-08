<?php
    $numero = $_POST['Numero'];
?>
<table border="1">
    <?php
        createTableMultiplier($numero);
        calcFactorial($numero);
    ?>
    <tr>
        <td><?php printResult($numero); ?></td>
        <td><?php printResult($factorial); ?></td>
    </tr>
</table>

<?php

function createTableMultiplier($numero){
    for ($i = 0; $i <= 10; $i++):
        echo "<tr>";
        $resultado = $numero * $i;
        echo "<td>$numero x $i: </td>";
        echo "<td>$resultado</td>";
        </tr>
    endfor;
}

function calcFactorial($numero){
    $factorial = 1;
    for ($numero; $numero >= 1; $numero--) { 
        $factorial *= $numero;
    }
}

function printResult($resultado){
    echo "$resultado!";
}

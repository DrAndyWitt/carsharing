<!DOCTYPE html> 
<html>
<head>
    <title> Potenzieren von Zahlen </title>
</head>
<body>
    <table border= "1">
    <caption> Potenzieren von Zahlen</caption>
    <tr>
            <th>Zahlen</th>
            <th>Quadratzahl</th>
            <th>Kubikzahl</th>
    </tr>
    <?php
    $x = 1;
    while ($x < 11){
        echo "<tr>";
        echo"<td>". $x . "</td>";
        echo"<td>". $x*$x . "</td>";
        echo"<td>". pow($x, 3) . "</td>";
        echo "</tr>";
        $x++;
    }
    ?>
</table>
<br>
<br>
Hello World

<?php
for($i = 1; $i <= 3; $i++) {
    $number = rand(-5,5);
    echo "The original number is: " . $number . " ";
    myAbs($number);
}
function myAbs($number) {
    if ($number < 0) {
        $number = $number * (-1);
    }
    echo "The new number is: " . $number . "<br>";
}
?>
</body>
</html>
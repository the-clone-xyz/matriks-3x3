<?php

if (isset($_POST['input-matriks'])) {
    $a11 = $_POST["a11"];
    $a12 = $_POST["a12"];
    $a13 = $_POST["a13"];
    $a21 = $_POST["a21"];
    $a22 = $_POST["a22"];
    $a23 = $_POST["a23"];
    $a31 = $_POST["a31"];
    $a32 = $_POST["a32"];
    $a33 = $_POST["a33"];

    //sisi positif
    $plus1 = $a11 * $a22 * $a33;
    $plus3 = $a13 * $a21 * $a32;
    $plus2 = $a12 * $a23 * $a31;

    $min1 = $a13 * $a22 * $a31;
    $min2 = $a11 * $a23 * $a32;
    $min3 = $a12 * $a21 * $a33;

    echo "
        <h1>determinan matriks 3x3</h1>
        <table border='1'>
            <tr>
                <td>" . $a11 ."</td>
                <td>" . $a12 ."</td>
                <td>" . $a13 ."</td>
                <td>...</td>
                <td>" . $a11 ."</td>
                <td>" . $a12 ."</td>
            </tr>
            <tr>
                <td>" . $a21 ."</td>
                <td>" . $a22 ."</td>
                <td>" . $a23 ."</td>
                <td>...</td>
                <td>" . $a21 ."</td>
                <td>" . $a22 ."</td>
            </tr>

            <tr>
                <td>" . $a31 ."</td>
                <td>" . $a32 ."</td>
                <td>" . $a33 ."</td>

                <td>..</td>

                <td>" . $a31 ."</td>
                <td>" . $a32 ."</td>
            </tr>

            

        </table>
    ";
    echo "<br>";
    echo "= ($a11.$a22.$a33) + ($a12.$a23.$a31) + ($a13.$a21.$a32) + ($a13.$a22.$a31) - ($a11.$a23.$a32) - ($a12.$a21.$a33)"; 
    echo "<br>";
    echo "= ($plus1 + $plus2 + $plus3) + ($min1 - $min2 - $min3)";
    echo "<br>";
    echo "= " . $plus1 + $plus2 + $plus3  ." + ". $min1 - $min2 - $min3;
    echo "<br>";
    echo "= " . ($plus1 + $plus2 + $plus3) + ($min1 - $min2 - $min3) ;
}
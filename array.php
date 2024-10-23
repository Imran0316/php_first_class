<?php
$fruits = array("mango","banana","orange","apple");
$fruits[3]="pineappale";
$fruits[4]="grapes";

// echo $fruits;

foreach ($fruits as $key => $value) {
    // echo "<ul>";
    // echo "<li>$value</li>";
    // echo "</ul>";

    echo "<ul>";
    echo "<li>$value</li>";
    echo "</ul>";
}
?>
<?php
$color = "red";

echo "my book is" . $color . "<br>";
echo "my cloths are " . $color . "<br>";

$name = "mildred";
$age = "30";
 echo "$name, is $age years old" . "<br>";


//  using the var_dump to know the data type and it's value
 $words = 30;
 var_dump($words);


//  variables have 3 faces, the global scoope, the local scoope and static scoope

$value = 10000000;

function me( ) {
    echo "<p> I am weight more than: $value </p>";
}
me();
?>

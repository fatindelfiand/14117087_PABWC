<!DOCTYPE html>
<html>
<head>
    <title>Swapping</title>
</head>

<body>
<?php
function swap (&$a,&$b){
    // $temp;
    $temp=$a;
    $a=$b;
    $b=$temp;
}
$a=2;
$b=3;
echo "Sebelum di swap : ";
echo "$a",",","$b";
echo "<br>";
swap($a,$b);
echo "Sesudah di swap : ";
echo "$a",",","$b";
?>
</body>
</html>
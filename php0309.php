<html>
<head>
</head>
<meta charset= "UTF-8">

<?php
@include "hi.inc";
?>

<body>
<form action = " " method = "post" >
m=<input type = "text" name = "m"></br>
n=<input type = "text" name = "n"></br>
<input type="submit">
<input type="reset">
</form>

</body>
</html>

<?php
$m = $_POST["m"];
$n = $_POST["n"];

echo "<table border ='1'>";
for($i = 1; $i <= $m; $i++){
    echo "<tr>";
    for($j = 1 ; $j<= $n; $j++){
        echo "<td>";
        echo $i ."*". $j ."=". $i*$j ."\t";
        echo "</td>";
    }
    echo "</tr>";
}
echo "<table>";

$xd = array(233, 888, 877);
echo $xd[0];
echo "<br>";
$xdd = array("pp" => 77 , "ww" =>88, "gg" => 2333);
echo $xdd["ww"];

foreach($xd as $kusa=>$value){
    echo $kusa;
    echo "->";
    echo $value;
}

$test = "yes,no.ng,my";
$arr1= explode(",", $test);
print_r($arr1);

$newstring = implode("#", $xd);
echo $newstring;

?>

<?php
require "87.inc";
?>

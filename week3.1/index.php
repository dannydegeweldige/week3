<?php
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$myArray[]= 'boot';

echo $myArray[0].'<br>';
echo $myArray[1].'<br>';
echo $myArray[2].'<br>';
echo $myArray[3].'<br>';
echo $myArray[4].'<br>';
echo $myArray[5].'<br>';
echo $myArray[6].'<br>';
?>



<?php
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
echo 'deze array heeft ';
echo count($myArray);
echo ' elementen '.'<br>';
$myArray[]= 'boot';
echo 'deze arry heeft '; 
echo count($myArray);
echo ' elementen'.'<br>';
?>
// bar 4 toyota 3 5 -1.0.1.2.3
<br>
<?php
$sum1 = 4.4;
$sum2 = 4.6;
$sum3 = 5.6;
$sum4 = 6.1;
$sum5 = 7.6;
$sum6 = 7.2;
$sum = ($sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6) / 6;
echo "Sum = $sum".'<br>';
echo (round($sum));
// ik vind apart beter want dan heb ik meer overzicht;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
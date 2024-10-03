<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
    $date="14062016";
    $year= (int)($date % 10000);
    $monthandday = $date / 10000;
    $month= (int)($date / 10000);
    $month= (int)($date % 10);
    $day= (int)($monthandday / 100);


echo "Year:". $year . "<br>" ; 
echo  "Month:". $month . "<br>";
echo "Day:" . $day . "<br>";
    ?>
    
</body>
</html>
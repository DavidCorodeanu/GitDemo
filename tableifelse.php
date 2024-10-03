<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>

<?php
    $grade= 10;

    if($grade <1 )
    {
        echo "Invalid figure";
    }
    elseif($grade >= 1 && $grade <= 3 )
    {
        echo "Very bad";
    }
    elseif($grade >= 4 && $grade <=5)
    {
        echo "Insufficient";
    }
    elseif($grade >= 6 && $grade <=7)
    {
        echo "Sufficient";
    }
    elseif($grade == 8)
    {
        echo "Good";
    }
    elseif($grade == 9)
    {
        echo "Very good";
    }
    elseif($grade == 10)
    {
        echo "Excellent";
    }
    elseif($grade >10 )
    {
        echo "Invalid figure";
    }
?>


    
</body>
</html>
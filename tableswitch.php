<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableswitch</title>
</head>
<body>
    <?php

    $grade= "10";

    switch($grade)
    {
        case "1":
        case "2":
        case "3":
            echo "Very bad";
            break;
        case "4":
        case "5":
            echo "Insufficient";
            break;
        case "6":
        case "7":
            echo "Sufficient";
            break;
        case "8":
            echo "Good";
            break;
        case "9":
            echo "Very good";
            break;
        case "10":
            echo "Excellent";
            break;
        default:
            echo "Invalid figure";
        
    }

    ?>
    
</body>
</html>
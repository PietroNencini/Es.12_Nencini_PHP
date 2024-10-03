<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 12</title>
</head>
<body>
    
    <?php

        function chooseColor($colorLetter) {
            switch($colorLetter) {
                case 'r':
                    return "red";
                case 'y':
                    return "yellow";
                case 'g':
                    return "green";
                case 'b':
                    return "blue";
                case 'p':
                    return "purple";
                case 'w':
                    return "white";
                default:
                    return "black";
            }
        }

        $par_color = chooseColor('g');

        echo "<p style='color:$par_color'> Questo paragrafo ha proprietò 'color' con valore $par_color</p>";
    ?>


</body>
</html>
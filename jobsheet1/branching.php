<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brancing</title>
</head>
<body>
    <form method="post" >
        Masukkan Nilai X:
        <input type="number" name="nilai_x"><button type="submit">Submit</button>
    </form>
    
    <?php
 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $y = $_POST ["nilai_y"];              
        echo "Nilai y = $x </br>";
        if($y > 0) {
            echo "$y adalah Bilangan Positif";
        }
        elseif($y < 0) {
            echo "$y adalah Bilangan Negatif";
        }else{
            echo "$y adalah Bilangan Nol";
        }

    }

    ?>
</body>
</html>


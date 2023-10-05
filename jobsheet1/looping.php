<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x=2; $x<=10;$x+=2)
        echo " $x </br>";

    echo "</br> Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y+=2;


    }
    echo "</br> Perulangan do..While bilangan prima kurang dari 20 </br>";
    
    $z = 2;

    do {
        $bilanganprima = true;     //bilangan prima merupakan variabel yang berfungsi menyimpan dan menentukan nilai,
                             //apakah nilai tersebut berupa blangan prima atau bukan
        
        for ($i = 2; $i < $z; $i++) {
            if ($z % $i == 0) {
                $bilanganprima = false;
                break;
            }
        }
        
        if ($bilanganprima) {
            echo $z . " <br>";
        }
        
        $z++;
    } while ($z < 20);
    ?>
</body>
</html>


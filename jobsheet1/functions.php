<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Panjang:</td>
                <td><input type="number" name="panjang" required></td>
            </tr>
            <tr>
                <td>Lebar:</td>
                <td><input type="number" name="lebar" required></td>
            </tr>
            <tr>
                <td>Jari-jari Lingkaran:</td>
                <td><input type="number" name="jari" required></td>
            </tr>
        </table>
        <button type="submit">Hitung</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];
            $jari = $_POST["jari"];

            function persegi_panjang($p, $l)
            {
                return $p * $l;
            }

            function lingkaran($r)
            {
                return 3.14 * $r * $r;
            }

            echo "Luas Persegi Panjang: " . persegi_panjang($panjang, $lebar) . "<br>";
            echo "Luas Lingkaran: " . lingkaran($jari) . "<br>";
        }
    ?>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <title>KALKULATOR IPK</title>
</head>
<body>

    <h2>Menghitung IPK </h2>

    <form method="POST" action="">
        Nilai Angka (0-100): <input type="number" name="nilai_mk" min="0" max="100" step="0.01" required><br><br>
        Jumlah SKS: <input type="number" name="sks_mk" min="1" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = (float)$_POST['nilai_mk'];
        $sks = (int)$_POST['sks_mk'];

        $bobot_nilai = 0; 
        if ($nilai >= 80) {
            $bobot_nilai = 4.0; 
        } elseif ($nilai >= 65) {
            $bobot_nilai = 3.0; 
        } elseif ($nilai >= 50) {
            $bobot_nilai = 2.0; 
        } elseif ($nilai >= 40) {
            $bobot_nilai = 1.0; 
        } else {
            $bobot_nilai = 0.0; 
        }
        $ipk_final = $bobot_nilai; 

        echo "<p><strong>Hasilnya:</strong></p>";
        echo "<p><strong>IPK Anda: " . number_format($ipk_final, 2) . "</strong></p>";
    }
    ?>

</body>
</html>
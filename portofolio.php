<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
</head>
<body>
    <?php
        $name = "Dzidan Aditya";
        $profile = "Saya seorang mahasiswa Universitas Sriwijaya jurusan Sistem Informasi.";
        $pengalaman_organisasi = "Duta SMA Negeri (2021-2022)";
        $pendidikan = "SD Al-Adli (2011-2017)<br>SMP Negeri 46 (2017-2020)<br>SMA Negeri 21 (2020-2023)";
    ?>
        
        <?php
        echo "<table border ='1' width ='600px' align='center'>";
        echo "<tr>";
        echo "<td>";
        echo "<marquee width='100%' behavior='slide'>";
        echo "<div style='text-align: center;'>";
        echo "<img src = 'profil.jpg' width='250px' align='center'></div>";
        echo "<p><font size='12'>$name</font></p>"; 
        echo "<h1>Profile</h1>";
        echo "<p>$profile</p>";
        echo "<h1>Pengalaman Organisasi</h1>";
        echo "<p>$pengalaman_organisasi</p>";
        echo "<h1>Pendidikan</h1>";
        echo "<p>$pendidikan</p>";
        echo "</marquee>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>

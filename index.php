<?php
// Tentukan halaman yang aktif
$page = isset($_GET['page']) ? $_GET['page'] : "home";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Website DEDIN SYAUQI</title>
</head>
<body>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.header {
    background: rgb(6, 6, 65);
    color :aliceblue;
    padding: 15px;
    margin-left: 230px;
    text-align: center;
}

.logo {
    width: 110px;
    height: 110px;
    position:absolute;
     border-radius: 30%;
    left: 2px;
    top: 50px;
    transform: translateY(-50%);
}

.menu {
    width: 200px;
    background: #3a94b3;
    padding: 15px;
    float: left;
    height: 400px;
}

.menu h3 {
    background: #3a94b3;
    padding: 5px;
    text-align: center;
}

.menu ul {
    list-style: none;
    padding: 0;
}

.menu ul li {
    margin: 10px 0;
}

.menu ul li a {
    text-decoration: none;
    color: black;
}

.konten {
    margin-left: 220px;
    padding: 20px;
    min-height: 400px;
}

.konten img {
    width: 200px;
    float: left;
    margin-right: 20px;
}

.footer {
    clear: both;
    background: rgb(6, 6, 65);
    color: aliceblue;
    text-align: center;
    padding: 10px;
}
</style>
    <!-- Header -->
    <div class="header">
        <h2>SELAMAT DATANG DI WEBSITE DEDIN SYAUQI !!!</h2>
         </div>
   <div class ="logo">
    <img src ="nyet.png" class="logo">
</div>


    <!-- Sidebar Menu -->
    <div class="menu">
        <h3>MENU</h3>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=profile">Profile</a></li>
            <li><a href="index.php?page=media">Media Sosial</a></li>
            <li><a href="index.php?page=kubus">Hitung Kubus</a></li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="konten">
        <?php
        if ($page == "home") {
            echo "<center><h2>Deskripsi Web</h2></center>";
            echo '<img src="websit.png" alt="gambar">';
            echo "<p>Website ini bernama Website Dedin Syauqi!!</p><p>Tampilannya sederhana dengan menu navigasi di sebelah kiri
            (Home,Profile,Media Sosial,Hitung Kubus) dan area<br>konten di sebelah kanan yang menampilkan deskripsi web.Bagian Header menampilkan
            <br>sambutan SELAMAT DATANG DI WEBSITE DEDIN SYAUQII!!!, Desainnya menggunakan kombinasi warna hitam, biru, dan putih sehingga
            terlihat bersih dan mudah dibaca
            </p>";


        } elseif ($page == "profile") {
            echo "<center><h2>Biodata</h2></center>";
            echo '<img src="dedinganteng.png" alt="gambar">';
            echo "<ul>
                 <ul>
                  <li>Nama              :Dedin Syauqi Al-Fahri</li>
                  <li>Tanggal Lahir     :Bandung, 25 April 2009</li>
                  <li>Jenis Kelamin     :Laki-Laki
                  <li>Alamat            :Jl.Panyawungan RT.03 RW.03 Cileunyi wetan</li>
                  <li>No.Telepon        :088-6299-545 </li>
                  <li>Email             :ddnsyqi@gmail.com</li>
                  <li>Kewarganegaraan   :Republik Indonesia </li>
                  <li>Agama             :Islam </li>
                  <li>Cita-cita         :Pengusaha Sukses </li>
            </ul>";

        } elseif ($page == "media") {
            echo "<center><h2>Media Sosial</h2></center>";
            echo '<img src="images.png" alt="gambar">';
            echo "<ul>
                    <li>Instagram: @ddnsyauqie_</li>
                  </ul>";


        } elseif ($page == 'kubus'){ 
            echo "<center><h2>Hitung Volume Kubus</h2></center>";
             echo '<img src="kubus.png" alt="gambar">';
            echo "<form method='post'>
                <label>Masukan Panjang rusuk(cm):</label><br>
                <input type='text' name='rusuk' required>
                <button type='submit' name='hitung'>Hitung</button>
                <form>";
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rusuk = $_POST["rusuk"];
        $volume = pow($rusuk, 3); 

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Panjang sisi: " . $rusuk . "<br>";
        echo "Volume kubus: " . $volume . "cm3";
    }
        ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Copyright@Masdennnzz</p>
    </div>

</body>
</html>
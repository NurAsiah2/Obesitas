<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />


    <title>Obesitas</title>
  </head>
  <body>
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(158, 42, 34, 0.678)">
        <div class="container">
          <a class="navbar-brand" href="index.php">Home</a>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="DataMakanan.php">Data Makanan</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="Algoritma Genetika.php">Algorima Genetika</a>
            </li>
  
            
          </ul>
        </div>
      </nav>
      <!-- akhir navbar -->

    <!-- Jumbutron -->
    <section class="jumbotron text-center" >
        
        <img src="img/IMG-20211129-WA0062.jpg" alt="asiah" width="300" >
        <h1 class="fs-5">Implementasi Algoritma Genetika dalam Rekomendasi Makanan Untuk Penderita Obesitas</h1>
        <h1 class="fw-bold"></h1>
        <p class="lead">-----------------------------------------------------------------------------------------------------------</p>
    </section>
    <!-- Akhir Jumbutron -->

     <!-- Pehitungan gizi -->
  </body>
  </html>
  <?php


    $Amb = 0;
    $KE;
    $KK;
    $KP;
    $KL;
    // input berat badan
    $Bb = "Inputs";
    // input tinggi badan
    $Tb = "Inputs";
    // input umur
    $Umur = "Inputs";
   
    //JK
    $JenisKelamin = "Inputs";
    
    // jenis aktivitas
    $Ja = "Inputs";
    
    $input = "Inputs";
    
    $input1 = "Inputs";
    
    $input2 = "Inputs";
    
    // perhitungan imt
    $meter = $_POST[Tb / 100];
    $imt = $_POST[Bb / ($meter * $meter)];
    if (($JenisKelamin == "Laki-Laki") && ($imt >= 25 && $imt <= 29.9) && ($umur >= 18))
    {
      $Amb = (float)(66.0 + (13.7 * $Bb) + (5.0 * $Tb) - (6.8 * $umur));
      echo "IMT anda adalah : ".strval($imt).
      " - Anda termasuk dalam Obesitas I", "\n";
      echo "AMB anda adalah : ".strval($Amb), "\n";
    }
    else if (($JenisKelamin == "Perempuan") && ($imt >= 25 && $imt <= 29.9) && ($umur >= 18))
    {
      $Amb = (float)(65.5 + (9.6 * $Bb) + (1.8 * $Tb) - (4.7 * $umur));
      echo "IMT anda adalah : ".strval($imt).
      " - Anda termasuk dalam Obesitas I", "\n";
      echo "AMB anda adalah : ".strval($Amb), "\n";
    }
    else if (($JenisKelamin == "Laki-Laki") && ($imt >= 30) && ($umur >= 18))
    {
      $Amb = (float)(66.0 + (13.7 * $Bb) + (5.0 * $Tb) - (6.8 * $umur));
      echo "IMT anda adalah : ".strval($imt).
      " - Anda termasuk dalam Obesitas II", "\n";
      echo "AMB anda adalah : ".strval($Amb), "\n";
    }
    else if (($JenisKelamin == "Perempuan") && ($imt >= 30) && ($umur >= 18))
    {
      $Amb = (float)(65.5 + (9.6 * $Bb) + (1.8 * $Tb) - (4.7 * $umur));
      echo "IMT anda adalah : ".($imt).
      " - Anda termasuk dalam Obesitas II", "\n";
      echo "AMB anda adalah : ".strval($Amb), "\n";
    }
    else
    {
      echo "Harap masukkan pilihan dengan benar", "\n";
    }


   if ($Ja == Ringan) 
    {
      $Ja =  "Ringan = Berjalan santai di rumah, kantor, atau pusat perbelanjaan, Duduk bekerja di depan komputer, membaca, menulis, menyetir, mengoperasikan mesin dengan posisi duduk atau berdiri, Berdiri melakukan pekerjaan
    rumah tangga ringan seperti mencuci piring, setrika, memasak, menyapu, mengepel lantai, menjahit, Latihan peregangan dan pemanasan dengan lambat, Membuat prakarya, bermain kartu, bermain video game, menggambar, melukis, bermain musik,
    Bermain billyard, memancing, memanah, menembak, golf, naik kuda";

    }
    else if ($Ja == 2)
    {
      $Ja = "sedang = Berjalan cepat (kecepatan 5 km/jam) pada permukaan rata di dalam atau di luar rumah, di kelas, ke tempat kerja atau ke toko; dan jalan
    santai, jalan sewaktu istirahat kerja, Pekerjaan tukang kayu, membawa dan menyusun balok kayu, membersihkan rumput dengan mesin pemotong rumput Memindahkan perabot ringan, berkebun, menanam pohon, mencuci mobil, Bulutangkis
    rekreasional, bermain rangkap bola, dansa, tenis meja, bowling, bersepeda pada lintasan datar, volley non kompetitif, bermain skate board, ski air, berlayar";
    }

    else if ($Ja == 3)
    {
      $Ja = "berat = Berjalan dengan sangat cepat (kecepatan lebih
    dari 5 km/jam), berjalan mendaki bukit, berjalan dengan membawa beban di punggung, naik gunung, jogging (kecepatan 8 km/jam) dan berlari, Pekerjaan seperti mengangkut beban berat, menyekop pasir, memindahkan batu bata, menggali selokan,
    mencangkul, Pekerjaan rumah seperti memindahkan perabot yang berat, menggendong anak, bermain aktif dengan anak, Bersepeda lebih dari 15 Km per jam dengan lintasan mendaki, bermain basket, cross country, badminton kompetitif, volley
    kompetitif, sepak bola, tenis single, tinju";
    
    }
    else
    {
      echo "Harap masukkan pilihan dengan benar", "\n";


    if (($Ja == 1) && ($JenisKelamin == 1))
    {
      $Ja = (float) 1.56;
    }
    else if (($Ja == 1) && ($JenisKelamin == 2))
    {
      $Ja = (float) 1.55;
    }
    else if (($Ja == 2) && ($JenisKelamin == 1))
    {
      $Ja = (float) 1.76;
    }
    else if (($Ja == 2) && ($JenisKelamin == 2))
    {
      $Ja = (float) 1.7;
    }
    else if (($Ja == 3) && ($JenisKelamin == 1))
    {
      $Ja = (float) 2.1;
    }
    else if (($Ja == 3) && ($JenisKelamin == 2))
    {
      $Ja = (float) 2.0;
    }
    else
    {
      echo "Harap masukkan pilihan dengan benar", "\n";
    }
    //perhitungan Kebutuhan energi
    $KE = (float)($Amb * $Ja);
    
    //perhitungan Kebutuhan karbihidrat
    $KK = (float)($_POST[Karbohidrat * $KE / 4])
    
    //perhitungan Kebutuhan Protein
    $_KP = (float)($_POST[Protein * $KE / 4])
    
    //perhitungan Kebutuhan Lemak
    $KL = (float)($_POST[Lemak * $KE / 9])

php?>

    <!-- Akhir Perhitungan Gizi -->

    <!-- Footer data -->
    <footer class="text-white" style="background-color: rgba(158, 42, 34, 0.678)">
      <div class="p-3">
        <div class="text-center">
          <h7>@Nur Asiah</h7>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer data -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

    

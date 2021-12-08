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
  
            <li class="nav-item">
              <a class="nav-link" href="Hasil.php">Hasil</a>
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

   
    $meter = $_POST(Tb / 100);
    $imt = [$_POST(Bb / ($meter * $meter))];
    if ($imt >= 25 && $imt <= 29.9)
    {
      echo "IMT anda adalah : ".($imt). " - Anda termasuk dalam Obesitas I", "\n";
      
    }
    else if ($imt >= 30)
    {
      echo "IMT anda adalah : ".($imt). " - Anda termasuk dalam Obesitas II", "\n";
      
    }
    
    else
    {
      echo "Harap masukkan pilihan dengan benar", "\n";
    }
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

    
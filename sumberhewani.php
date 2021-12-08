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
    <section class="jumbotron text-center">
      <img src="img/IMG-20211129-WA0062.jpg" alt="asiah" width="300" />
      <h1 class="fs-5">Implementasi Algoritma Genetika dalam Rekomendasi Makanan Untuk Penderita Obesitas</h1>
      <h1 class="fw-bold"></h1>
      <p class="lead">-----------------------------------------------------------------------------------------------------------</p>
    </section>
    <!-- Akhir Jumbutron -->

    <!-- Data Makanan -->

    <div class="container">
            <div class="text-center mb-3">

    <h5>Data Makanan</h5>
     <table class ="table-bordered border-primary  table table-striped">
     <div class="text-center mb-2">
    <h7 class="fw-bold">2. Sumber Hewani</h7>

          <th><center>No</center></th>
          <th><center>Nama Pangan</center></th>
          <th><center>URT</center></center></th>
          <th><center>Gr</center></th>
          <th><center>Karbohidrat</center></th>
          <th><center>Protein</center></th>
          <th><center>Lemak</center></th>


    <?php
include "koneksi.php";
$no=0;
$ambildata = mysqli_query($koneksi, "select * from sumberhewani");
while ($tampildata = mysqli_fetch_array($ambildata)){
    echo "
    <tr>

        <td><center>$no</center></td>
        <td><center>$tampildata[Nama_Pangan]</center></td>
        <td><center>$tampildata[URT]</center></td>
        <td><center>$tampildata[Gr]</center></td>
        <td><center>$tampildata[Karbohidrat]</center></td>
        <td><center>$tampildata[Protein]</center></td>
        <td><center>$tampildata[Lemak]</center></td>
    </tr>";

$no++;

}

?> 

</tr>
 </table>
 

  <tr>

 
   


  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="DataMakanan.php">SP</a></li>
    <li class="page-item"><a class="page-link" href="sumberhewani.php">SH</a></li>
    <li class="page-item"><a class="page-link" href="sumbernabati.php">SN</a></li>
    <li class="page-item"><a class="page-link" href="buah.php">B</a></li>
    <li class="page-item"><a class="page-link" href="sayur.php">S</a></li>
  </ul>
</nav>

 </div>
    </div>
    </div>
    </div>
   

 </div>
    </div>
    </div>
    </div>
   
    

    <!-- Akhir Data Makanan -->

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


    

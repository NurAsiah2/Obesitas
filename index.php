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


     <!-- Input data -->
     <section id="Gizi">
         <div class="container">
            <div class="text-center mb-3">
                  <h6>Silahkan Input Data Anda Terlebih Dahulu</h6>  
                </div>
            </div>
                
                  <form action="Algoritma Genetika.php" method="post">
                <div class="row mb-2 justify-content-center">
                  <label for="Tb" class="col-sm-3 col-form-label">Masukkan Tinggi Badan Anda : </label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Berdasarkan Cm">
                  </div>
                  </div>
                
                <div class="row mb-2 justify-content-center">
                <label for="Tb" class="col-sm-3 col-form-label">Masukkan Berat Badan Anda : </label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Berdasarkan Kg">
                  </div>
                </div>

                <div class="row mb-2 justify-content-center">
                    <label for="umur" class="col-sm-3 col-form-label">Masukkan Umur Anda : </label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Berdasarkan Tahun">
                  </div>
                </div>

                <div class="row mb-2 justify-content-center">
                        <label for="JenisAktivitas" class="col-sm-3 col-form-label">Pilih Jenis Aktivitas Anda : </label>
                      <div class="col-sm-3">
                    <select class="form-select" id="autoSizingSelect">
                      <option value="1">Ringan</option>
                      <option value="2">Sedang</option>
                      <option value="3">Berat</option>
                    </select>
                  </div>
                </div>

                    <div class="row mb-2 justify-content-center">
                        <label for="JenisKelamin" class="col-sm-3 col-form-label">Pilih Jenis Kelamin Anda : </label>
                      <div class="col-sm-3">
                    <select class="form-select" id="autoSizingSelect">
                    <option value="2">Laki-laki</option>
                      <option value="1">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-2 justify-content-center">
                        <label for="Karbohidrat" class="col-sm-3 col-form-label">Pilih Kebutuhan Karbohidrat : </label>
                      <div class="col-sm-3">
                    <select class="form-select" id="autoSizingSelect">
                      <option value="1">0.60</option>
                      <option value="2">0.61</option>
                      <option value="3">0.62</option>
                      <option value="4">0.63</option>
                      <option value="5">0.64</option>
                      <option value="6">0.65</option>
                      <option value="7">0.66</option>
                      <option value="8">0.67</option>
                      <option value="9">0.68</option>
                      <option value="10">0.69</option>
                      <option value="11">0.70</option>
                      <option value="12">0.71</option>
                      <option value="13">0.72</option>
                      <option value="14">0.73</option>
                      <option value="15">0.74</option>
                      <option value="16">0.75</option>

                    </select>
                  </div>
                </div>

                <div class="row mb-2 justify-content-center">
                        <label for="Protein" class="col-sm-3 col-form-label">Pilih Kebutuhan Protein : </label>
                      <div class="col-sm-3">
                    <select class="form-select" id="autoSizingSelect">
                      <option value="1">0.10</option>
                      <option value="2">0.11</option>
                      <option value="3">0.12</option>
                      <option value="4">0.13</option>
                      <option value="5">0.14</option>
                      <option value="6">0.15</option>

                    </select>
                  </div>
                </div>

                <div class="row mb-2 justify-content-center">
                        <label for="Lemak" class="col-sm-3 col-form-label">Pilih Kebutuhan Lemak : </label>
                      <div class="col-sm-3">
                    <select class="form-select" id="autoSizingSelect">
                      <option value="1">0.15</option>
                      <option value="2">0.16</option>
                      <option value="3">0.17</option>
                      <option value="4">0.18</option>
                      <option value="5">0.19</option>
                      <option value="6">0.20</option>

                    </select>
                  </div>
                </div>
                
                <div class="container">
                <div class="text-end">

                   
                <button class="btn btn-sm"  style= "background-color: rgba(158, 42, 34, 0.678)">
                    <a  class="nav-link text-white"  href="Algoritma Genetika.php">Hitung</a></button>
              
            </form>
            
        

        </div>
      </div>
                 
        </div>
        <p class="lead"></p>
    </form>
     </section>
     <!-- Akhir input data -->


     <!-- Footer data -->
     <footer class="text-white" style= "background-color: rgba(158, 42, 34, 0.678)">
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

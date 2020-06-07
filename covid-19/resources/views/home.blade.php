<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />

    <title>COVID-19</title>
  </head>
  <body background="bg.jpg">

    <!--navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        
          <a class="navbar-brand font-weight-bold navbar-light">
            <i class="fas fa-shield-virus text-light"></i> COVID-19</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-2">
              <li class="nav-item active">
                <a class="nav-link text-light" href="{{ url('/home') }}">
                  <i class="fas fa-home text-light"></i> Beranda</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-light" href="{{ url('/info') }}">
                  <i class="fas fa-file-alt text-light"></i> Info</a>
              </li>
               <li class="nav-item active">
                <a class="nav-link text-light" href="{{ url('/rumahsakit') }}">
                <i class="fas fa-hospital text-light"></i> Rumah Sakit</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
         </div>
     </nav>
     <!-- nav-->


     <!--jumbotron -->
  <div id="background">
   <div class="jumbotron">
      <div class="container text-center">
        <br><br>
        <h1 class="display-4">Hello, Selamat datang...</h1>
        <p class="lead">Ini adalah website mengenai Coronavirus Disease 2019 atau dikenal dengan Covid-19</p>
      </div>
   </div>
  </div>
     <!--jumbotron-->
  <div class="container alert alert-primary">
  <h5 class="mt-0"> Apa itu COVID-19? </h5>
    <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Walaupun lebih banyak menyerang lansia, virus ini sebenarnya bisa menyerang siapa saja, mulai dari bayi, anak-anak, hingga orang dewasa, termasuk ibu hamil dan ibu menyusui. Infeksi virus Corona disebut COVID-19 (Corona Virus Disease 2019) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p>
  </div>

   <div class="container alert alert-primary">
    <h5 class="mt-4">Gejala terinfeksi covid-19</h5>
    <p>
      Secara umum, ada 3 gejala umum yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:

      <li> Demam (suhu tubuh di atas 38 derajat Celsius) </li>
      <li> Batuk kering</li>
      <li> Sesak napas</li> 

      Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:

      <li> Diare</li>     
      <li> Sakit kepala</li>
      <li> Konjungtivitis</li>
      <li> Hilangnya kemampuan mengecap rasa atau mencium bau</li>
      <li>  Ruam di kulit</li>
    
    Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona.</p>
  </div>

    <div class="container alert alert-primary">
      <h5 class="mt-4">Pencegahan covid-19</h5>
      <p>
          <li> Terapkan physical distancing, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
          <li> Gunakan masker saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi berbelanja bahan makanan. </li>  
          <li> Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum. </li>
          <li> Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan. </li>
          <li> Tingkatkan daya tahan tubuh dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
          <li> Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</li>
          <li> Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
          <li> Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk kebersihan rumah.</li>
      </p>
    </div>


   
  </body>
</html>
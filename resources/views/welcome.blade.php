<!DOCTYPE html>
<html>
<head>
<title>KELOMPOK 7</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!------ Navigation ------>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
    <h3 class="navbar-brand"> KELOMPOK 7</h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#top">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">TENTANG KAMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">PELAYANAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">ANGGOTA TIM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#price">HARGA PAKET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#PesandanKesan">PESAN DAN KESAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">KONTAK</a>
        </li>
      </ul>
    </div>
  </nav>
  </section>
<!------ Slider ------>
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
      <li  data-target="#headerSlider" data-slide-to="1"></li>
      <li  data-target="#headerSlider" data-slide-to="2" ></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/banner1.png">
    </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/banner2.png">
    </div>
      <div class="carousel-item">
        <img class="d-block ing-fluid" src="img/banner3.png">
    </div>
    </div>
    <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a> 
    <a class="carousel-control-next" href="headerSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!------ About ------>
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>TENTANG KAMI</h2>
<div class="about-content">
  Website adalah kumpulan halaman dalam suatu domain yang memuat tentang berbagai informasi agar dapat dibaca dan dilihat oleh pengguna internet melalui sebuah mesin pencari. Informasi yang dapat dimuat dalam sebuah website umumnya berisi mengenai konten gambar, ilustrasi, video, dan teks untuk berbagai macam kepentingan.

  Biasanya untuk tampilan awal sebuah website dapat diakses melalui halaman utama (homepage) menggunakan browser dengan menuliskan URL yang tepat. Di dalam sebuah homepage, juga memuat beberapa halaman web turunan yang saling terhubung satu dengan yang lain.
</div>
<!------ Get in Touch ------>
<section id="contact">
 <div class="container">
    <h1>BERHUBUNGAN </h1>
    <div class="row">
    <div class="col-md-6">
    <form class="contact-form">
    <div class="form-groub">
    <input type="text" class="form-control" placeholder="Your Name"><br>
    </div>
    <div class="form-groub">
    <input type="number" class="form-control" placeholder="Phone no."><br>
    </div>
    <div class="form-groub">
    <input type="email" class="form-control" placeholder="Email id"><br>
    </div>
    <div class="form-groub">
    <textarea class="form-control"  row="4" placeholder="Your Massage"></textarea><br>
    </div>
        <button type="submit" class="btn-primary">MENGIRIM</button>
    </form>
    </div>
    <div class="col-md-6 contact-info">
        <div class="follow"><b>Address:</b><i class="fas fa-map-marker-alt"></i>XYZ Road, Bangalore, IN</div>
        <div class="follow"><b>Phone:</b><i class="fas fa-phone-alt"></i>XYZ Road, Bangalore, IN</div>
        <div class="follow"><b>Email:</b><i class="far fa-envelope"></i>example@website.com</div>
        <div class="follow"><label><b>Get Social:</b></label>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    </div> 
</section>
<!------ Footer ------>
<section id="footer">
<div class="container text-center">
  <p>Made with <i class="far fa-heart">byKelompok7</i></p>
</div>
</section>
<!------ footer End ------>
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>
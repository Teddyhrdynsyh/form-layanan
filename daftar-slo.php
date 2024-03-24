<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar SLO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/iconic.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Datepicker-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 
</head>

<body style="background-image: url(assets/img/baner.png);">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#kontak" style="text-decoration: none;">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="col-lg-12 text-center text-lg-start">
    <h1 data-aos="fade-right" style="text-align: center; font-size: 40px;"><strong>Pendaftaran SLO Baru</strong></h1>
    <p class="mb-3" data-aos="fade-right" data-aos-delay="100" style="text-align: center; color: white;">Dibutuhkan Surat Izin Lingkungan Untuk Pendaftaran SLO Baru</p>
  </div>

  <div class="sewa"> 
    <div class="card card-5" data-aos="fade-right" data-aos-delay="200" >
        <div class="card-heading">
            <h2 class="title">Form Pendaftaran SLO</h2>
        </div>
        <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
              <strong>Terimakasih!</strong> Pesan Anda sudah terkirim
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form method="POST" name="form-perizinan">
                <div class="form-floating mb-3">
                  <input type="nama" class="form-control" id="floatingInput" placeholder="Nama" name="nama">
                  <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="alamat" class="form-control" id="floatingInput" placeholder="Email" name="email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nomor WhatsApp" name="whatsapp">
                  <label for="floatingInput">Nomor WhatsApp</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nama Perusahaan" name="perusahaan">
                  <label for="floatingInput">Nama Perusahaan</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Lokasi AMP" name="lokasi">
                  <label for="floatingInput">Lokasi AMP</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Titik Koordinat" name="koordinat">
                  <label for="floatingInput">Titik Koordinat</label>
                </div>
                <div class="mb-3 ">
                    <label for="formFile" class="form-label">Upload Izin Lingkungan</label>
                    <input class="form-control" type="file" id="formFile" name="Surat">
                  </div>
                    <button class="btn btn-primary btn-kirim rounded-pill" type="submit">Kirim</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      Loading...
                    </button>
                </div>
            </form>
          </div>
    </div>
  </div>

  <!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo" id="kontak">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-5 mt-5" style="text-align: center;">
          <h3 style="color: black; ">Kontak Kami</h3>
          <p style="color: black;">BBPJN DKI Jakarta-Jawa Barat Direktorat Jenderal Bina Marga
            Jalan A.H Nasution No. 264 Kota Bandung-Jawa Barat</p>
          <p class="social">
            <a href="https://x.com/pupr_dkijabar?t=5UBOc9WA9imwgdXxa9ZT1w&s=09"><span class="bi bi-twitter"></span></a>
            <a href="https://www.instagram.com/pupr_jalan_dkijabar?igsh=aWV1azFtamhsMjd3"><span class="bi bi-instagram"></span></a>
            <a href="https://www.tiktok.com/@pupr_jalan_dkijabar?_t=8klhmO2cyF6&_r=1"><span class="bi bi-tiktok"></span></a>
          </p>
        </div>
      </div>
    </footer>
      <div class="row justify-content-center text-center" style="background-color: #344676;">
        <div class="col-md-7 mt-2">
          <p class="copyright" style="color: white;">&copy; Copyright 2024 BBPJN DKI Jakarta-Jawa Barat</p>
        </div>
      </div>

    </div>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--Datepicker-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
  $(function() {
      $('#datepicker').datepicker();
  });
</script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwm9J76tZMpG-EYkdvUOni-whrV0EtssKYCTQHAox8skLSPDM2RiKAscwPMpMiLRnMykg/exec'
  const form = document.forms['form-perizinan'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const Alert = document.querySelector('.alert');

  form.addEventListener('submit', e => {
    e.preventDefault();
    // ketika tombol submit dikilik
    // tampilkan tombol loading hilangkan tombol kririm
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
        // tampilkan tombol loading hilangkan tombol kririm
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tampilkan alert
        Alert.classList.toggle('d-none');
        //reset formnya
        form.reset();
        console.log('Success!', response);
    })
      .catch(error => console.error('Error!', error.message))
  });
</script>


</body>

</html>
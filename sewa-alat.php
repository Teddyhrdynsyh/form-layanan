<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sewa Alat</title>
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
    <h1 data-aos="fade-right" style="text-align: center; font-size: 40px;"><strong>Sewa Alat</strong></h1>
    <p class="mb-3" data-aos="fade-right" data-aos-delay="100" style="text-align: center; color: white;">Silahkan Download Terlebih Dahulu Surat Permohonan Sewa Sebelum Mengisi Form Penyewaan di Bawah Ini!</p>
    <a class="btn btn-outline-light rounded-pill m-1" data-aos="fade-right" data-aos-delay="200" href="assets/dok/Draft Permohonan Sewa Alat.docx" download="Draft Permohonan Sewa Alat" role="button">Unduh File Surat</a>
    <a class="btn btn-outline-light rounded-pill m-1" data-aos="fade-right" data-aos-delay="200" href="#Harga" role="button">Cek Daftar Harga</a>
  </div>

  <div class="sewa"> 
    <div class="card card-5" data-aos="fade-right" data-aos-delay="200" >
        <div class="card-heading">
            <h2 class="title">Form Sewa Alat</h2>
        </div>
        <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
              <strong>Terimakasih!</strong> Pesan Anda sudah terkirim
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form id="uploadForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" target="_self">
                <input type="hidden" value="" name="fileContent" id="fileContent">
                <input type="hidden" value="" name="filename" id="filename">
                <div class="form-floating mb-3">
                  <input type="nama" class="form-control" id="floatingInput" placeholder="Nama" name="Nama">
                  <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="alamat" class="form-control" id="floatingInput" placeholder="Alamat" name="Alamat">
                  <label for="floatingInput">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="Email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nomor WhatsApp" name="Whatsapp">
                  <label for="floatingInput">Nomor WhatsApp</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nama Perusahaan" name="Nama_perusahaan">
                  <label for="floatingInput">Nama Perusahaan</label>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Upload Surat Permohonan Anda</label>
                    <input class="form-control" type="file" id="attach" name="attach">
                  </div>
                    <button class="btn btn-primary btn-kirim rounded-pill" type="submit" id="btnKirim">Kirim</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" id="btnLoading" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      Loading...
                    </button>
                </div>
            </form>
          </div>
    </div>
  </div>

  <!-- katalog -->
      <div class="container" id="Harga">
        <h3 style="color: black; text-align: center;">Daftar Harga Sewa Alat</h3>
          <div class="row">
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/PAD FOOT ROLLER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">PAD FOOT ROLLER</h6>
              <p class="card-text">Rp.197.085</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/TYRE ROLLER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">TYRE ROLLER</h6>
              <p class="card-text">Rp.233.874</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/TYRE ROLLER2.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">TYRE ROLLER</h6>
              <p class="card-text">Rp.664.833</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/VIBRO ROLLER MB.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">VIBRO ROLLER MB </h6>
              <p class="card-text">Rp.1.103.676</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/COLD RECYCLER 2.4 M.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">COLD RECYCLER 2.4 M</h6>
              <p class="card-text">Rp.15.340.610</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/FLATBED TRUCK WITH CRANE.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">FLATBED TRUCK WITH CRANE</h6>
              <p class="card-text">Rp.277.496</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/WATERTANK TRUCK 16000.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">WATERTANK TRUCK 16000</h6>
              <p class="card-text">Rp.327.408</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/WATERTANK TRUCK 6000.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">WATERTANK TRUCK 6000</h6>
              <p class="card-text">Rp.110.900</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/TRAILLER HEAD HINO.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">TRAILLER HEAD HINO</h6>
              <p class="card-text">Rp.400.478</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/SYNCRONIZE CHIP SEALER TRUCK.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">SYNCRONIZE CHIP SEALER TRUCK</h6>
              <p class="card-text">Rp.1.127.326</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/SLURRY SEAL TRUCK.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">SLURRY SEAL TRUCK</h6>
              <p class="card-text">Rp.2.638.944</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/EXCAVATOR OT 0,9 DAN BARKER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">EXCAVATOR OT 0,9 DAN BARKER</h6>
              <p class="card-text">Rp.1.022.343</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/BULLDOZZER 1,5 M3.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">BULLDOZZER 1,5 M3</h6>
              <p class="card-text">Rp.665.498</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/HEAD TRAILER 40 T.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">HEAD TRAILER 40 T</h6>
              <p class="card-text">Rp.738.254</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/COLD PLANNER 2 M.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">COLD PLANNER 2 M</h6>
              <p class="card-text">Rp.2.742.372</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/ROAD SWEEPER MACHINE.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">ROAD SWEEPER MACHINE</h6>
              <p class="card-text">Rp.173.088</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/STONE FEEDER TRUCK.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">STONE FEEDER TRUCK</h6>
              <p class="card-text">Rp.294.839</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/COMPACTOR SMOOTH DRUM.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">COMPACTOR SMOOTH DRUM</h6>
              <p class="card-text">Rp.810.338</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/MOTORGRADER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">MOTORGRADER</h6>
              <p class="card-text">Rp.1.070.584</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/DUMP TRUK  5 TON.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">DUMP TRUK > 5 TON</h6>
              <p class="card-text">Rp.562.857</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/TRINTIN SELF LOADER TRUCK 08.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">TRINTIN SELF LOADER TRUCK 08</h6>
              <p class="card-text">Rp.1.556.363</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/TRINTIN SELF LOADER TRUCK 09.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">TRINTIN SELF LOADER TRUCK 09</h6>
              <p class="card-text">Rp.635.928</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/WHELL LOADER WA 180.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">WHELL LOADER WA 180</h6>
              <p class="card-text">Rp.1.414.875</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/ASPHALT FINISHER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">ASPHALT FINISHER</h6>
              <p class="card-text">Rp.1.233.182</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/EXCAVATOR VOLVO.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">EXCAVATOR VOLVO</h6>
              <p class="card-text">Rp.607.022</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/BACKHOE LOADER.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">BACKHOE LOADER</h6>
              <p class="card-text">Rp.450.930</p>
            </div>
            <div class="col-md-3 mt-3" style="text-align: center;">
              <img src="assets/img/COLD PLANNER 0,5 M.jpg" class="img-fluid img-thumbnail" alt="...">
              <h6 class="card-title mt-2">COLD PLANNER 0,5 M</h6>
              <p class="card-text">Rp.3.041.981</p>
            </div>
          </div>
        
        <br>
        <h6 style="color:black;">*Catatan:</h6>
        <h6 style="color:black;"><strong>Harga yang tertera belum termasuk biaya mobilisasi, asuransi dan operasional.</strong></h6>
      </div>
  <!-- katalog -->


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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
      e.preventDefault(); // Mencegah pengiriman formulir secara langsung

      // Validasi formulir
      if (!validateForm()) {
        return; // Jika validasi gagal, hentikan pengiriman formulir
      }

      // Tampilkan tombol loading
      document.getElementById('btnKirim').classList.add('d-none');
      document.getElementById('btnLoading').classList.remove('d-none');

      // Baca file menggunakan FileReader
      var reader = new FileReader();
      var file = document.getElementById('attach').files[0];
      reader.onload = function() {
        document.getElementById('fileContent').value = reader.result;
        document.getElementById('filename').value = file.name;

        // Mengambil data formulir
        const formData = new FormData(document.getElementById('uploadForm'));

        // Mengirim data formulir secara asinkron menggunakan fetch
        fetch('https://script.google.com/macros/s/AKfycbypvXUbbfNtLUWwFmHD_hiGkOstzSlArhp8fgoElpqDdP75nSXT9aikVepDoVa9y74P/exec', {
            method: 'POST',
            body: formData
          })
          .then(response => {
            if (response.ok) {
              // Jika pengiriman berhasil, tampilkan pesan sukses
              document.querySelector('.alert').classList.remove('d-none');
              // Reset formulir
              document.getElementById('uploadForm').reset();
            } else {
              // Jika terjadi kesalahan, tampilkan pesan kesalahan
              console.error('Gagal mengirim formulir');
            }
          })
          .catch(error => {
            // Jika terjadi kesalahan, tampilkan pesan kesalahan
            console.error('Error!', error);
          })

          .finally(() => {
            // Sembunyikan tombol loading dan tampilkan tombol Kirim
            document.getElementById('btnKirim').classList.remove('d-none');
            document.getElementById('btnLoading').classList.add('d-none');
          });
      }
      reader.readAsDataURL(file);
    });
  });

  function validateForm() {
    var nama = document.forms["uploadForm"]["Nama"].value;
    var alamat = document.forms["uploadForm"]["Alamat"].value;
    var email = document.forms["uploadForm"]["Email"].value;
    var whatsapp = document.forms["uploadForm"]["Whatsapp"].value;
    var namaPerusahaan = document.forms["uploadForm"]["Nama_perusahaan"].value;
    var attach = document.forms["uploadForm"]["attach"].value;

    if (nama == "") {
      alert("Nama harus diisi");
      document.forms["uploadForm"]["Nama"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (alamat == "") {
      alert("Alamat harus diisi");
      document.forms["uploadForm"]["Alamat"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (email == "") {
      alert("Email harus diisi");
      document.forms["uploadForm"]["Email"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (whatsapp == "") {
      alert("Nomor WhatsApp harus diisi");
      document.forms["uploadForm"]["Whatsapp"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (namaPerusahaan == "") {
      alert("Nama Perusahaan harus diisi");
      document.forms["uploadForm"]["Nama_perusahaan"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (attach == "") {
      alert("Surat Permohonan harus diupload");
      document.forms["uploadForm"]["attach"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    return true; // Return true jika semua validasi terpenuhi
  }
</script>

</body>
</html>
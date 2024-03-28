<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Permohonan Informasi Publik</title>
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
      <h1 data-aos="fade-right" style="text-align: center; font-size: 40px;"><strong>Permohonan Informasi Publik</strong></h1>
      <h5 class="mb-5" data-aos="fade-right" data-aos-delay="100" style="text-align: center;">Silahkan Kirim Permohonan Informasi Anda Kepada Kami!</h5>
  </div>

  <div class="form"> 
  <div class="card card-5" data-aos="fade-right" data-aos-delay="200" >
      <div class="card-heading">
          <h2 class="title">Form Permohonan Informasi</h2>
      </div>
      <div class="card-body">
          <div class="alert alert-success alert-dismissible fade show d-none" id="successMessage" role="alert">
            <strong>Terimakasih!</strong> Pesan Anda sudah terkirim
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            <form id="uploadForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
              <input type="hidden" value="" name="fileContent" id="fileContent">
              <input type="hidden" value="" name="filename" id="filename">
                  <h6 style="color: black;">Data Pemohon Informasi</h6>   
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="Nama">
                  <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="identitas" class="form-control" id="floatingInput" placeholder="Nomor Identitas (KTP/SIM)" name="No_identitas">
                  <label for="floatingInput">Nomor Identitas (KTP/SIM)*</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="paspor/kk" class="form-control" id="floatingInput" placeholder="Paspor/Kartu Keluarga*" name="Paspor/KK">
                  <label for="floatingInput">Paspor/Kartu Keluarga*</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="alamat" class="form-control" id="floatingInput" placeholder="Alamat Rumah" name="Alamat_rumah">
                  <label for="floatingInput">Alamat Rumah</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="telepon" class="form-control" id="floatingInput" placeholder="Nomor WhatsApp" name="No_whatsapp">
                  <label for="floatingInput">Nomor WhatsApp</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="Email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="pekerjaan" class="form-control" id="floatingInput" placeholder="Pekerjaan" name="Pekerjaan">
                  <label for="floatingInput">Pekerjaan</label>
                </div>
                <div class="form-floating mb-5">
                  <input type="kantor" class="form-control" id="floatingInput" placeholder="Alamat Kantor" name="Alamat_kantor">
                  <label for="floatingInput">Alamat Kantor</label>
                </div>
                <h6 style="color: black;">Pengajuan Permohonan Informasi</h6>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="Informasi" style="height: 100px" name="Kebutuhan_informasi"></textarea>
                  <label for="floatingTextarea1">Rincian Informasi yang Dibutuhkan</label>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="Tujuan" style="height: 100px" name="Tujuan_informasi"></textarea>
                  <label for="floatingTextarea2">Rincian Tujuan Penggunaan Informasi</label>
                </div>
                <select class="form-select mb-3" aria-label=".form-select-lg example" name="Via">
                  <option selected>Cara Mendapatkan Salinan Informasi</option>
                  <option value="Diambil Langsung">Diambil Langsung</option>
                  <option value="Kurir">Kurir</option>
                  <option value="Via Pos">Via Pos</option>
                  <option value="Email">Email</option>
                  <option value="Whatsapp">Whatsapp</option>
                </select>
                <div class="mb-3">
                  <label for="file" class="form-label">Upload KTP</label>
                  <input class="form-control" type="file" id="attach" name="attach">
                </div>
                  <button class="btn btn-primary btn-kirim rounded-pill" type="submit" id="btnKirim">Kirim</button>
                  <button class="btn btn-primary btn-loading d-none" type="button" id="btnLoading" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                  </button>
            </form>
        </div>
  </div>
  </div>


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
        fetch('https://script.google.com/macros/s/AKfycbxCPcEArBr2ILOkzCt--fxKGZtrc-vrZJFMkNQbTZExW16KPkse6eCa7hps6U8G-74/exec', {
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
    var noIdentitas = document.forms["uploadForm"]["No_identitas"].value;
    var pasporKK = document.forms["uploadForm"]["Paspor/KK"].value;
    var alamatRumah = document.forms["uploadForm"]["Alamat_rumah"].value;
    var noWhatsApp = document.forms["uploadForm"]["No_whatsapp"].value;
    var email = document.forms["uploadForm"]["Email"].value;
    var pekerjaan = document.forms["uploadForm"]["Pekerjaan"].value;
    var alamatKantor = document.forms["uploadForm"]["Alamat_kantor"].value;
    var kebutuhanInformasi = document.forms["uploadForm"]["Kebutuhan_informasi"].value;
    var tujuanInformasi = document.forms["uploadForm"]["Tujuan_informasi"].value;
    var via = document.forms["uploadForm"]["Via"].value;
    var attach = document.forms["uploadForm"]["attach"].value;

    if (nama == "") {
      alert("Nama harus diisi");
      document.forms["uploadForm"]["Nama"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (noIdentitas == "") {
      alert("Nomor Identitas (KTP/SIM) harus diisi");
      document.forms["uploadForm"]["No_identitas"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (pasporKK == "") {
      alert("Paspor/Kartu Keluarga harus diisi");
      document.forms["uploadForm"]["Paspor/KK"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (alamatRumah == "") {
      alert("Alamat Rumah harus diisi");
      document.forms["uploadForm"]["Alamat_rumah"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (noWhatsApp == "") {
      alert("Nomor WhatsApp harus diisi");
      document.forms["uploadForm"]["No_whatsapp"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (email == "") {
      alert("Email harus diisi");
      document.forms["uploadForm"]["Email"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (pekerjaan == "") {
      alert("Pekerjaan harus diisi");
      document.forms["uploadForm"]["Pekerjaan"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (alamatKantor == "") {
      alert("Alamat Kantor harus diisi");
      document.forms["uploadForm"]["Alamat_kantor"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (kebutuhanInformasi == "") {
      alert("Kebutuhan informasi harus diisi");
      document.forms["uploadForm"]["Kebutuhan_informasi"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (tujuanInformasi == "") {
      alert("Tujuan informasi harus diisi");
      document.forms["uploadForm"]["Tujuan_informasi"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (via == "") {
      alert("Cara mendapatkan salinan informasi harus dipilih");
      document.forms["uploadForm"]["Via"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    if (attach == "") {
      alert("KTP harus diupload");
      document.forms["uploadForm"]["attach"].focus(); // Fokus kembali ke bidang input
      return false;
    }
    return true; // Return true jika semua validasi terpenuhi
}
</script>

</body>
</html>
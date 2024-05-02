<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu Utama</title>
  <!-- Link CSS Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Your Custom CSS -->
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
  <!-- Navbar for Logged-in Users -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Menu Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detail.php">Detail Informasi</a>
          </li>
          <!-- Add other menu items as needed -->
        </ul>
      </div>
      <div class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" id="profileLink">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="logoutLink">Keluar</a>
        </li>
      </div>
    </div>
  </nav>

  <!-- Main Menu Content -->
  <div class="container mt-4">
  <a class="navbar-brand" href="#">
  </li>
  <li class="nav-item">
  <a class="nav-link" href="login.php">Login</a>
  </li>
   <img src="logo.png" alt="Logo Honda" width="50" height="50" />
  </a>
    <div class="row">
      <div class="col-lg-8">
        <h1>Menu Utama</h1>
        <p>
          Honda Motor Co., Ltd. adalah perusahaan manufaktur multinasional
          asal Jepang yang terkenal dengan produksi kendaraan bermotor seperti
          mobil, motor, dan mesin. Didirikan pada tahun 1946 oleh Soichiro
          Honda dan Takeo Fujisawa, perusahaan ini telah menjadi salah satu
          merek terkemuka dalam industri otomotif global.
        </p>
        <p>
          Sejak pendiriannya, Honda terus mengembangkan produk inovatif dengan
          teknologi terkini. Perusahaan ini dikenal dengan keandalan,
          efisiensi bahan bakar, dan perhatian terhadap lingkungan.
        </p>
        <h3>Produk Honda</h3>
        <p>
          Honda memiliki beragam produk, mulai dari mobil seperti Civic,
          Accord, hingga SUV populer CR-V dan HR-V. Di sektor sepeda motor,
          Honda memiliki berbagai model termasuk Honda BeAT, Honda PCX, Honda
          CB, dan lainnya.
        </p>
        <!-- Menambahkan gambar produk Honda -->
        <img
          src="honda.jpeg"
          alt="Honda Products"
          style="width: 300px; height: auto"
        />
        <!-- Akhir dari informasi produk -->

        <h3>Keunggulan</h3>
        <p>
          Salah satu keunggulan Honda adalah fokusnya pada inovasi teknologi.
          Fitur-fitur canggih seperti Honda Sensing pada mobilnya dan
          teknologi eSP pada sepeda motornya menunjukkan komitmen perusahaan
          terhadap keselamatan, efisiensi, dan pengalaman berkendara yang
          nyaman.
        </p>
        <h3>Visi dan Misi</h3>
        <p>
          Visi Honda adalah menjadi perusahaan yang memberikan kegembiraan dan
          membangun kepercayaan bagi masyarakat global melalui produk-produk
          yang luar biasa. Misi mereka adalah untuk menghasilkan produk dengan
          teknologi canggih dan menyediakan solusi mobilitas terbaik yang
          memenuhi kebutuhan pelanggan.
        </p>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-light text-center py-3 mt-4">
    <div class="container">
      &copy; Hak Cipta oleh 21552011347_IRENIUS BONAN_221PB
    </div>
  </footer>

  <!-- JavaScript links -->
  <!-- Link JavaScript Bootstrap (if needed) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Your Custom JavaScript -->
  <script>
    document
      .getElementById("profileLink")
      .addEventListener("click", function (event) {
        event.preventDefault();
        // Menampilkan informasi profil Honda
        let profileInfo =
          "Profil Honda:\n\nHonda adalah perusahaan yang terkenal dalam industri otomotif dan motor. Misi kami adalah menyediakan produk berkualitas tinggi untuk kepuasan pelanggan.";
        alert(profileInfo);
      });

    document
      .getElementById("logoutLink")
      .addEventListener("click", function (event) {
        event.preventDefault();
        // Simulasi: Lakukan logout
        let confirmLogout = confirm("Anda yakin ingin logout?");
        if (confirmLogout) {
          alert("Anda telah logout");
          // Redirect ke halaman detail.php setelah logout
          window.location.href = "detail.php";
        }
      });
  </script>
</body>
</html>

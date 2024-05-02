<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Utama</title>
    <!-- Link CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Your Custom CSS -->
    <link href="styles.css" rel="stylesheet" />
    <style>
      /* CSS untuk efek hover pada logo */
      .navbar-brand img:hover {
        transform: scale(1.1); /* Perbesar ukuran logo saat dihover */
        transition: transform 0.3s ease; /* Animasi transisi */
      }
      /* CSS untuk styling konten perusahaan */
      .company-info {
        margin-top: 20px;
      }
      .company-info h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
      }
      .company-info h2 {
        font-size: 1.5rem;
        margin-top: 20px;
      }
      .company-info p {
        font-size: 1rem;
        line-height: 1.6;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="Logo Honda" width="50" height="50" />
        </a>
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
              <a class="nav-link active" aria-current="page" href="home.php"
                >Home</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu Utama</a>
            </li>
              <a class="nav-link" href="detail.php">Detail Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registrasi</a>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Content for Company Information -->
    <div class="container company-info">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Selamat Datang di Honda</h1>
          <h2>Visi</h2>
          <p>
            Menjadi perusahaan terkemuka dalam industri kami dengan memberikan
            solusi inovatif dan berkelanjutan kepada pelanggan kami.
          </p>
          <h2>Misi</h2>
          <p>
            Menghadirkan produk berkualitas tinggi dengan fokus pada kepuasan
            pelanggan, berinovasi secara berkelanjutan, dan berkontribusi pada
            masyarakat dan lingkungan.
          </p>
          <h2>Tentang Kami</h2>
          <p>
            Honda adalah perusahaan yang berkomitmen untuk menyediakan produk
            terbaik dalam industri ini. Kami memprioritaskan kepuasan pelanggan
            dengan memberikan solusi yang inovatif dan ramah lingkungan.
          </p>
          <p>
            Dengan tim yang berdedikasi, kami terus berupaya meningkatkan
            layanan dan produk kami guna mencapai tujuan bersama.
          </p>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-light text-center py-3 mt-4">
      <div class="container">
        &copy; Hak Cipta oleh 21552011347_IRENIUS BONAN_221PB
      </div>
    </footer>

    <!-- Link JavaScript Bootstrap (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your Custom JavaScript (if needed) -->
  </body>
</html>

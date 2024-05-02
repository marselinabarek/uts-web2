<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Informasi</title>
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Your Custom CSS -->
  <link href="styles.css" rel="stylesheet" />
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Detail Informasi</a>
          <li class="nav-item">
          <a class="nav-link" href="register.php">Registrasi</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Detailed Information Content -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="motor">
          <h2>Honda BeAT</h2>
          <p>
            Honda BeAT adalah motor matik yang populer dan terjangkau di Indonesia. Motor ini pertama kali diluncurkan pada tahun 2008 dan telah menjadi salah satu motor terlaris di Indonesia.
            <!-- Tambahkan tombol dropdown Bootstrap -->
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi Lengkap
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                  <p>
                    <strong>Spesifikasi:</strong><br />
                    Mesin: 108cc, 4-tak, SOHC, eSP<br />
                    Transmisi: CVT<br />
                    Kapasitas tangki: 4,2 liter<br />
                    Berat: 95 kg<br />
                    Harga: Rp18,05 juta - Rp18,9 juta
                  </p>
                  <img src="img.jpeg" alt="Honda Products" style="width: 300px; height: auto;">
                </li>
                <li>
                  <p>
                    <strong>Fitur:</strong><br />
                    Smart key system<br />
                    Digital display<br />
                    Underseat storage compartment<br />
                    LED Headlight
                  </p>
                  <img src="fitur.jpeg" alt="Honda Products" style="width: 300px; height: auto;">
                </li>
                <li>
                  <p>
                    <strong>Desain:</strong><br />
                    Honda BeAT memiliki desain yang modern dan stylish. Motor ini tersedia dalam berbagai pilihan warna yang menarik.
                  </p>
                  <img src="images.jpeg" alt="Honda Products" style="width: 300px; height: auto;">
                </li>
                <li>
                  <p>
                    <strong>Performa:</strong><br />
                    Honda BeAT memiliki performa yang cukup baik untuk ukuran motor matik 108cc. Motor ini mampu menghasilkan tenaga maksimal sebesar 8,85 PS dan torsi maksimal sebesar 9,53 Nm.<br />
                    Honda BeAT memiliki konsumsi bahan bakar yang cukup irit. Motor ini mampu menempuh jarak hingga 60 kilometer per liter.
                  </p>
                  <img src="performa.jpeg" alt="Honda Products" style="width: 300px; height: auto;">
                </li>
                <li>
                  <p>
                    <strong>Harga:</strong><br />
                    Honda BeAT adalah salah satu motor matik paling terjangkau di Indonesia. Harganya mulai dari Rp18,05 juta untuk varian CBS dan Rp18,9 juta untuk varian CBS-ISS.
                  </p>
                </li>
              </ul>
            </div>
          </p>
        </div>

        <!-- Tambahkan informasi lainnya tentang motor Honda disini -->

      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3 mt-4">
    <div class="container">
      &copy; Hak Cipta oleh 21552011347_IRENIUS BONAN_221PB
    </div>
  </footer>

  <!-- Link JavaScript Bootstrap (if needed) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

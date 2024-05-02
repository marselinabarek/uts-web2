<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi</title>
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Your Custom CSS -->
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
  <!-- Registration Form Content -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo Honda" width="50" height="50" />
      </a>
      <div class="col-lg-6">
        <h2 class="text-center mb-4">Registrasi</h2>
        <form id="registerForm">
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="registerEmail" name="email" required />
          </div>
          <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="registerPassword" name="password" required />
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required />
          </div>
          <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
        <p class="mt-3">
          Sudah memiliki akun? <a href="login.php">Login di sini</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simpan informasi pendaftaran
    let registeredUsers = [];

    // Get the registration form
    const registerForm = document.getElementById("registerForm");

    // Add event listener for form submission
    registerForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission

      // Get user input
      const email = document.getElementById("registerEmail").value;
      const password = document.getElementById("registerPassword").value;
      const confirmPassword = document.getElementById("confirmPassword").value;

      // Validasi password yang cocok
      if (password !== confirmPassword) {
        alert("Konfirmasi password tidak cocok.");
        return;
      }

      // Simpan informasi pendaftaran (sederhana, gunakan ini hanya untuk simulasi)
      registeredUsers.push({ email, password });

      // Redirect to index.php after successful registration
      window.location.href = "login.php";
    });

    // Login logic
    function login() {
      const email = document.getElementById("loginEmail").value;
      const password = document.getElementById("loginPassword").value;

      // Cek kecocokan email dan password dengan informasi yang telah terdaftar
      const user = registeredUsers.find(user => user.email === email && user.password === password);
      
      if (user) {
        alert("Login berhasil!");
        window.location.href = "login.php"; // Redirect to index.php after successful login
      } else {
        alert("Email atau password salah.");
      }
    }
  </script>
</body>
</html>

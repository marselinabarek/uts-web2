<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <!-- Login Form Content -->
  <div class="container mt-5">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo Honda" width="50" height="50" />
    </a>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2 class="text-center mb-4">Login</h2>
        <form id="loginForm">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="loginEmail"
              name="email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="loginPassword"
              name="password"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p class="mt-3">
          Belum punya akun? <a href="register.php">Daftar di sini</a>
        </p>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-light text-center py-3 mt-4">
    <div class="container">
      &copy; Hak Cipta oleh 21552011347_IRENIUS BONAN_221PB
    </div>
  </footer>

  <script>
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function(event) {
      event.preventDefault(); // Menghentikan pengiriman form

      // Alamat halaman yang ingin dituju setelah login
      const redirectURL = "index.php";

      // Mengarahkan ke halaman yang ditentukan
      window.location.href = redirectURL;
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Your Custom JavaScript (if needed) -->
</body>
</html>

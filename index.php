<?php
include "style.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Perpus UNIGA</title>
<style>
    body {

background-color : green;

}
</style>
  </head>
  <?php
  	if (isset($_GET['pesan'])){
  		if($_GET['pesan']=="gagal"){
  			echo "<div class='alert'>Username dan Password tidak sesuai ! </div>";
  		}
  	}
  ?>
  <body>
  	<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="LOGO-UNIGA-ONLY.png" style="width: 300px; height: 300px;">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Perpustakaan<br>
            <font color="green">Universitas Gajayana Malang</font><br>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="cek_login.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="username" name="username" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Login
                </button>

                <!-- Register buttons -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
  </body>
</html>
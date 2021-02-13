<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css?v=<?php echo time();?>">
    <title>SMK BHAKTI ANINDYA</title>
  </head>
  <body >

  <!--navigation bar-->
    <nav class="navbar shadow-sm p-2 mb-2 bg-white navbar-expand-lg navbar-light fixed-top">
      <div class="container ">
            <a class="navbar-brand" href="#"><img class="img-fluid img-page2" src="gambar/Group 17.png ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-link" href="login.php">Jobs</a>
              <a class="nav-link" href="https://bhaktianindya.sch.id/">About</a>
              <a class="nav-link" href="">Career Blog</a>
              <a class="nav-link" href="">Contact Us</a>
            </div>
        </div>
      </div>
    </nav>

    <div class="container " style="margin-top: 50px;">
      <div class="col form_sign">
          <h3 class="tulisan_signup">Login to your account </h3>

        <form action="proses_login.php" method="POST">
            <form action="" class="main-form needs-validation" novalidate>
                  <div class="form-group  ">
                      <label for="email">Email</label>
                      <input type="text" name="email" id="email" class="form-control shadow p-3 mb-2 bg-white" required>
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control shadow p-3 mb-2 bg-white" required>
                      <p><a href=forgot.php >Forgot password?</a></p>
                  </div>
                  <div class="col-12">
                      <button type="submit" name="submit" class="btn btn-primary biru-button">Submit</button>
                      <a href="signup.php"><button type="submit" name="submit" class="btn  btn-outline-primary biru-button">Sign up</button></a>
                  </div>
            </form>
                  <div class="row">
                      <div class="gambar_sign">
                        <img class="img-fluid mx-auto d-block" src="../skripsi/gambar/Group 18.png" />
                      </div>
                  </div>
        </form>
      </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
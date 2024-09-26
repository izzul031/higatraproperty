<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="loginbaru.png" class="img-fluid" alt="Phone image" height="300px" width="600px" style="margin-left: -41px">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="login.php" method="post">
              <p class="text-center h8 fw-bold mb-4 mx-1 mx-md-3 mt-3">WELCOME TO </p>

              <!-- logo -->
              <img src="../higatra/images/Group397.png" alt="Deskripsi gambar" width="250" height="auto" clas="img-fluid mb-4" style="display: block; margin:auto; margin-bottom:5px;">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <!-- <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label> -->
                <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="E-mail" style="border-radius:12px ;" />

              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <!-- <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label> -->
                <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="Password" style="border-radius:12px ;" />

              </div>

              <!-- Forgot Password -->
              <div class="d-flex justify-content-end">
                <div class="text-sm">
                  <a class="font-medium text-gray-600 hover:text-gray-500" style="color:gray; text-decoration: none; font-size:12px; margin: top -10px;" href="#">
                    Forgot Password?
                  </a>
                </div>
              </div>


              <!-- Submit button -->
              <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <input type="submit" value="LOGIN" name="login" class="btn btn-warning btn-block btn-lg text-light my-2 py-3 " style="width:100% ; border-radius: 12px; font-weight:600;" />
              </div>

            </form><br>
            <p align="center">i don't have any account <a href="register.php" class="text-warning" style="font-weight:600;text-decoration:none;">Register Here</a></p>
          </div>
        </div>
      </div>
    </section>

  </div>


 







  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
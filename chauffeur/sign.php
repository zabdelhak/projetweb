<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>sign up</title>
  <link rel="stylesheet" href="../bootsstrap/css/bootstrap.min.css">
  <script src="../bootsstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:#240a5e;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">SIGN UP<br></h5>
            <form action="..\fonction\fill.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" name="user_name" required>
                <label for="floatingPassword">NOM</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" name="user_fname" required>
                <label for="floatingPassword">PRENOM</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" name="cel_number" required>
                <label for="floatingPassword">PHONE NUMBER</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" name="matricule" required>
                <label for="floatingPassword">MATRICULE</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="user_email" required>
                <label for="floatingInput">EMAIL</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="mdp" required>
                <label for="floatingPassword">PASSWORD FOR YOUR ACCOUNT</label>
              </div>
              <div class="d-grid mb-3">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"style="background-color:#f22324; border:none;">SIGN UP</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

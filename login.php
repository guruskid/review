<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
  <?php include 'inc/header.php'; ?>

  <section>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Login</h2>
        <p class="lead">Fill all input</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="row justify-content-center my-4">
              <div class="col-md-6 mb-3">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
              </div>
            </div>

            <p class="text-center text-muted">OR</p>

            <div class="text-center">
              <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
              <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
              <button class="btn btn-danger btn-lg" type="submit"><i class="fa fa-google"></i> Google</button>
            </div>
        </div>
        </form>
      </div>
    </div>

  </section>
  <section>
    <?php include 'inc/footer.php'; ?>
  </section>
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
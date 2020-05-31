<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Review</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
  <?php include 'inc/header.php'; ?>

  <section class="container my-4">
    <div class="d-inline-block">
      <img src="img/url.png" height="" width="150">
    </div>
    <div class="d-inline-block my-3">
      <h4 class="card-text">Genesis Restaurant <sup class="fa fa-check-circle-o text-success"></sup>
      </h4>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
            <div class="border-right col-md-6 col-5">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star-half-o"></span>
              <span class="fa fa-star-o"></span>
            </div>
            <div class="col-md-6 col-5">
              <span class="fa fa-map-marker"> Lagos</span>
            </div>
            <div class="border-right col-md-5 col-5">
              <span class="fa fa-envelope"> info@genegis.com</span>
            </div>
            <div class="border-right col-md-2 col-5">
              <span>100 Years</span>
            </div>
            <div class="col-md-5 col-5">
              <span class="fa fa-globe"> www.genesis.com</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-9">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
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
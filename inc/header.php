<section>
    <nav class="navbar navbar-dark bg-danger shadow-sm">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="container">
        <a class="navbar-brand" href="./">
          <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          <span class="content-to-hide">Eateries</span>
        </a>
        <form class="mx-2 my-auto d-inline w-75">
          <div class="input-group">
            <input type="text" class="form-control border border-right-0" placeholder="Search...">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary border border-left-0" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>


        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button type="button" class="nav-link btn btn-outline-danger p-2" href="#" id="navbarDropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle-o"></i> <span class="content-to-hide">Account</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="register">Register</a>
              <a class="dropdown-item" href="login">Login</a>
            </div>
          </li>
        </ul>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>
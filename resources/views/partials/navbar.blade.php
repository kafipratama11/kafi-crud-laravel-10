
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">crud-laravel-10</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body p-4">
        <a href="posts/create" class="link-underline link-underline-opacity-0">
          <div class="row sidebar-link mt-2 ">
            <div class="col-2 icon mx-auto text-center">
              <i class="bi bi-clipboard2-plus"></i>
            </div>
            <div class="col link-text pt-3">
              <p>New</p>
            </div>
          </div>
        </a>
        <a href="index" class="link-underline link-underline-opacity-0">
          <div class="row sidebar-link mt-2 ">
            <div class="col-2 icon mx-auto text-center">
              <i class="bi bi-clipboard-data"></i>
            </div>
            <div class="col link-text pt-3">
              <p>Dashboard</p>
            </div>
          </div>
        </a>
        <a href="" class="link-underline link-underline-opacity-0">
          <div class="row sidebar-link mt-2 ">
            <div class="col-2 icon mx-auto text-center">
              <i class="bi bi-person-circle"></i>
            </div>
            <div class="col link-text pt-3">
              <p>Account</p>
            </div>
          </div>
        </a>
        <a href="" class="link-underline link-underline-opacity-0">
          <div class="row sidebar-link mt-2 logout-btn">
            <div class="col-2 icon mx-auto text-center">
              <i class="bi bi-box-arrow-in-right text-danger"></i>
            </div>
            <div class="col link-text pt-3 text-danger">
              <p>Logout</p>
            </div>
          </div>
        </a>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 30px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo routeIs('/') ? 'active' : '' ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo routeIs('/products') ? 'active' : '' ?>" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo routeIs('/account') ? 'active' : '' ?>" href="/account">Account</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0" style="margin-right: 15px">
        <li class="nav-item">
          <a class="nav-link active" href="/cart">
            Cart
            <span class="badge text-bg-danger">4</span>
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="/products" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
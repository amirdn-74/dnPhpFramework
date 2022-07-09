<?php partial('head') ?>

<?php partial('navbar') ?>

<div class="bg-info p-5 text-light" style="margin-bottom: 30px;">
  <h1>Welcome To My shop</h1>
  <h4>Discover what you need with ease</h4>
</div>

<h2>Last Products</h2>

<div class="w-100" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px;">
  <div class="card" style="height: auto;">
    <a href="/products/15"><img src="https://api.lorem.space/image/shoes?w=320&h=200" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="d-flex align-items-center justify-content-between">
        <span class="text-primary" style="font-size: 22px; font-weight: bold;">59$</span>
        <a href="#" class="btn btn-primary">Add Cart</a>
      </div>
    </div>
  </div>

  <div class="card" style="height: auto;">
    <a href="#"><img src="https://api.lorem.space/image/watch?w=320&h=200" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="d-flex align-items-center justify-content-between">
        <span class="text-primary" style="font-size: 22px; font-weight: bold;">59$</span>
        <a href="#" class="btn btn-primary">Add Cart</a>
      </div>
    </div>
  </div>

  <div class="card" style="height: auto;">
    <a href="#"><img src="https://api.lorem.space/image/fashion?w=320&h=200" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="d-flex align-items-center justify-content-between">
        <span class="text-primary" style="font-size: 22px; font-weight: bold;">59$</span>
        <a href="#" class="btn btn-primary">Add Cart</a>
      </div>
    </div>
  </div>

  <div class="card" style="height: auto;">
    <a href="#"><img src="https://api.lorem.space/image/fashion?w=320&h=200" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="d-flex align-items-center justify-content-between">
        <span class="text-primary" style="font-size: 22px; font-weight: bold;">59$</span>
        <a href="#" class="btn btn-primary">Add Cart</a>
      </div>
    </div>
  </div>
</div>

<?php partial('foot') ?>
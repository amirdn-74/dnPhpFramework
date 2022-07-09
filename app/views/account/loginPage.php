<?php partial('head') ?>

<?php partial('navbar') ?>

<h1 style="margin-bottom: 50px;">Login Page</h1>

<div class="col-4">
  <form action="#" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" id="email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="text" id="password" class="form-control">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>

<div class="col" style="margin-left: 30px;">
  Don't have account yet? <a href="/account/register">create one.</a>
</div>

<?php partial('foot') ?>
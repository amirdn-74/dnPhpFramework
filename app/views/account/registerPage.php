<?php partial('head') ?>

<?php partial('navbar') ?>

<h1 style="margin-bottom: 50px;">Register Page</h1>

<div class="col-4">
  <form action="/account/register" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" id="email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="text" id="password" class="form-control">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Confirm Password:</label>
      <input type="text" id="password" class="form-control">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
  </form>
</div>

<div class="col" style="margin-left: 30px;">
  Already have account? <a href="/account">login here.</a>
</div>

<?php partial('foot') ?>
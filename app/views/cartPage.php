<?php partial('head') ?>
<?php partial('navbar') ?>

<h1 style="margin-bottom: 50px;">Shopping Cart</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Product Name</th>
      <th style="width: 150px;">Quantity</th>
      <th style="width: 150px;">Price</th>
      <th style="width: 150px;">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>pname</td>
      <td>
        <select class="form-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </td>
      <td>$59</td>
      <td><button class="btn btn-danger">DELETE</button></td>
    </tr>
    <tr>
      <td>pname</td>
      <td>
        <select class="form-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </td>
      <td>$59</td>
      <td><button class="btn btn-danger">DELETE</button></td>
    </tr>
    <tr>
      <th colspan="2">Total</th>
      <th>$118</th>
      <td><button class="btn btn-primary">CHECKOUT</button></td>
    </tr>
  </tbody>
</table>

<?php partial('foot') ?>
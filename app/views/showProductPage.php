<?php partial('head') ?>

<?php partial('navbar') ?>

<div class="col-4" style="margin-left: 30px;">
  <img src="https://api.lorem.space/image/shoes?w=320&h=200" style="width: 100%; height: auto;">
</div>

<div class="col">
  <h2>Product with Id: <?= $productId ?></h2>
  <p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis nihil a hic quidem molestiae assumenda unde, tempore molestias beatae ducimus, reiciendis accusamus quibusdam, maxime ullam. Amet saepe blanditiis commodi quis. Quas voluptatem iste doloribus ducimus! Totam tempora atque illo ipsam officia! Ipsam quidem dolorum aliquam. Illum inventore modi hic nisi!
  </p>
  <div class="d-flex align-items-center">
    <span class="text-primary" style="font-size: 35px; margin-right: 30px;">$59</span>
    <button class="btn btn-primary">Add To Cart</button>
    <!-- <button class="btn btn-secondary">Remove From Cart</button> -->
  </div>
</div>

<?php partial('foot') ?>
<?php

function partial($path)
{
  require __DIR__ . "/../app/views/partials/_{$path}.php";
}

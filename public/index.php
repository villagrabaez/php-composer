<?php

require '../vendor/autoload.php';
require '../config/database.php';

use App\Entities\Product;

$products = Product::get();

include '../resources/views/lists.php';
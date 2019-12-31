<?php

require '../vendor/autoload.php';
require '../config/database.php';

ob_start();

use App\Entities\Product;
use Dompdf\Dompdf;

$products = Product::get();

include '../resources/views/lists.php';

$dompdf = new Dompdf();
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
$dompdf->stream();

<?php
// INCLUDE THE LIBRARY
require __DIR__ . DIRECTORY_SEPARATOR . "phpqrcode" . DIRECTORY_SEPARATOR . "qrlib.php";

// OR OUTPUT IN JPG
QRcode::jpg("https://code-boxx.com");

// OR OUTPUT IN SVG
// QRcode::svg("https://code-boxx.com");

// OR OUTPUT IN EPS
// QRcode::eps("https://code-boxx.com");
?>
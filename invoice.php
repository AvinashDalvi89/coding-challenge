<?php
$bbox = imagettfbbox($fontSize, 0, $font, $text);

// where $im is $im = imagecreate(512, 512);
$imageWidth = imagesx($im);
$imageHeight = imagesy($im);
$x = ceil(($imageWidth - $bbox[2]) / 2);
$y = ceil(($imageHeight - $bbox[7]) / 2);

?>
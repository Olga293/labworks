<?php
$image = imageCreateTrueColor(500, 400);
$blue = imageColorAllocate($image, 0, 0, 250);
$greyblue = imageColorAllocate($image, 0xDB, 0xE3, 0xEA);
imageFilledRectangle($image, 0, 0, 499, 399, $greyblue);
imageRectangle($image, 10, 10, 150, 90, $blue);

header("Content-type: image/png charset='utf-8'");
imagepng($image);
imageDestroy($image);
?>
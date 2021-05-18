<?php
$rootdir = $_SERVER['DOCUMENT_ROOT'];
function resize_image()
{
	$type = "jpg";
	$src = "testim.jpeg";

	$img = imagecreatefromjpeg($src);

	$img_width = imageSX($img);
	$img_height = imageSY($img);

	$width = 200;
	$k = round($img_width/$width , 3);

	$new_width = $img_width/$k;
	$new_height = 100;
	
	$new_img = imagecreatetruecolor($new_width, $new_height);
	$res = imagecopyresampled($new_img, $img, 0, 0, 0, 0, $new_width, $new_height, $img_width, $img_height);
	
	imagejpeg($new_img, $rootdir.'image/'.'test.jpeg');

	imagedestroy($new_img);
	imagedestroy($img);


}






?>



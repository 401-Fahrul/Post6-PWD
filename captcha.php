<?php
session_start();
// variabel untuk membuat random captha
$random_alpha = md5(rand());
// variabel untuk memunculkan kode captha dengan panjang karakter 6
$captcha_code = substr($random_alpha, 0, 6);
// berfungsi untuk menampung code captha
$_SESSION["captcha_code"] = $captcha_code;
// variabel untuk membuat tampilan captha menjadi gambar
$target_layer = imagecreatetruecolor(70, 30);
// variabel untuk memberi warna background pada captha
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
// berfungsi untuk mengisi gambar dari variabel target_layer dan captha_background
imagefill($target_layer, 0, 0, $captcha_background);
// variabel untuk memberi warna text pada captha
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
// berfungsi untuk menggambar string secara horizontal
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
// berfungsi untuk menyimpan gambar pada variabel target_layer
imagejpeg($target_layer);

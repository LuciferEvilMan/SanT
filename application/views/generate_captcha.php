<?php
session_start();

$captchaCode = substr(md5(rand()), 0, 6);


$_SESSION['captcha_code'] = $captchaCode;


$image = imagecreatetruecolor(100, 30);
$backgroundColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $backgroundColor);


for ($i = 0; $i < 50; $i++) {
    $dotColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($image, rand(0, 100), rand(0, 30), $dotColor);
}


$textColor = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 20, 8, $captchaCode, $textColor);


header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

?>

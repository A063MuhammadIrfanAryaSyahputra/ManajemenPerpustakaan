<?php
session_start();

// Generate random text for CAPTCHA
$captchaText = substr(md5(mt_rand()), 0, 6); // Change '6' to the desired length

// Store the text in session
$_SESSION['captcha'] = $captchaText;

// Create image
$captchaImg = imagecreate(68, 40); // Adjust dimensions as needed
$bgColor = imagecolorallocate($captchaImg, 0, 0, 0); // Background color (white) BLACK IS 0,0,0
$textColor = imagecolorallocate($captchaImg, 255, 255, 255); // Text color (black)

// Add text to image
imagestring($captchaImg, 5, 8, 10, $captchaText, $textColor); // Adjust font and position

// Output the image
header('Content-type: image/png');
imagepng($captchaImg);

// Clean up
imagedestroy($captchaImg);
?>

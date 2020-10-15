<?
	//header('content-Type: image/jpeg');
	$kep= imagecreatefromjpeg("kep.jpg");
	$font = dirname(__FILE__) . '/arialbd.ttf';
	$feher  = imagecolorallocate($kep, 0, 0, 0);
	$asd = 'THIS IS MY NOW 2';
	imagettftext($kep, 40, 10, 300, 300, $feher, $font, $asd);
	$x = imagesx($kep);
	$y = imagesy($kep);
	imagettftext($kep, 40, 0, 0,$y, $feher, $font, $asd);
	imagettftext($kep, 40, 0, $x/2-250 , $y/2, $feher, $font, $asd);
	$hely = './vizjelkep/' . date('ymdhis_') . 'kep.jpg';
	imagejpeg($kep, $hely);
?>
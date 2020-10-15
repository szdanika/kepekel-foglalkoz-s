<?
	$kep = './kepek/200928031649_.jpg';
	$forras =imagecreatefromjpeg($kep);
	
	$fx = imagesx($forras);
	$fy = imagesy($forras);
	$hova = imagecreateTruecolor(300,300);
if($fx < $fy)
	{
		$cx = 120;
		$cy = 120* ($fy/$fx);
	}
	else
	{
		$cy = 120;
		$cx = 120 * ($fx / $fy);
	}
imagecopyresampled($hova , $forras, 0, 0, 0, 0, $cx, $cy, $fx, $fy);
?>
<?
//header('content-Type: image/jpeg');


?>


<?
$fajl = $_FILES['fajl'];
if($fajl['type'] == "image/jpeg")
{
	$filename = $_FILES['fajl'];
	$idnev = $filename['tmp_name'];
	//$name = $filename + $idnev;
	$cel = './kepek/'. date('ymdhis_') . $filename['name'];
	$nev = './indexkep/'. date('ymdhis_') . 'index' . $filename['name'];
	move_uploaded_file($idnev, $cel); // kep letöltése és belerakása egy mappába
	
	
	
	
	
	//print"<script>parent.location.href=parent.location.href</script>";
	//és innentől meg az index képes marhaság
	$forras =imagecreatefromjpeg($cel);
	$fx = imagesx($forras);
	$fy = imagesy($forras);
	$hova = imagecreateTruecolor(120,120);
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
	//move_uploaded_file($hova, './indexkep/');
	//$helye = './indexkep/'. $;
	imagejpeg($forras, $nev);
	
	//print"<script>parent.location.href=parent.location.href</script>";
	
	
	
	
	
	
	$kep= imagecreatefromjpeg($cel);
	$font = dirname(__FILE__) . '/arialbd.ttf';
	$feher  = imagecolorallocate($kep, 0, 0, 0);
	$asd = 'THIS IS MY NOW 2';
	imagettftext($kep, 40, 10, 300, 300, $feher, $font, $asd);
	$x = imagesx($kep);
	$y = imagesy($kep);
	imagettftext($kep, 40, 0, 0,$y, $feher, $font, $asd);
	imagettftext($kep, 40, 0, $x/2-250 , $y/2, $feher, $font, $asd);
	$hely = './vizjeles/' . date('ymdhis_'). 'vizjel_' . 'kep.jpg';
	imagejpeg($kep, $hely);
	
	
	
	
	
	
	
	
}
else
{
	print"<script>alert('Hibás képformátum')</script>";
}
?>
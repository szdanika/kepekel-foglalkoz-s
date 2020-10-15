
<!DOCTYPE html>
<form method = 'post' action='mentes.php' target ='kisablak' enctype='multipart/form-data'>
<style>
	div.kiskep
	{
		width            : 120px    ;
		height           : 120px    ;
		margin           :  16px    ;
		background-color : #DFD     ;
		text-align       : center   ;
		float            : left     ;

		line-height      : 120px    ;
	}

	div.kiskep img
	{
		max-width        : 100px    ;
		max-height       : 100px    ;

		vertical-align   : middle   ;
	}
</style>

<?
    $mappanev = "kepek" ;

    $mappa = opendir($mappanev) ;
    while( $fajl = readdir($mappa) )
    {
	$t = strtolower(substr( $fajl , -4 )) ;

	if( $t==".jpg" || $t=="jpeg" || $t==".png" || $t==".gif" )
	{
	   print "
	      <div class='kiskep'>
	         <a href='$mappanev/$fajl'><img src='$mappanev/$fajl'></a>
	      </div>
	   " ;
	}
    }
    closedir($mappa) ;
	//echo"<hr>";
	//echo"File:";
	echo"<input type='file' name='fajl'> <input type='submit' value='feltöltés'> <br>";
?>
<iframe name='kisablak' width='400px'></iframe>
</form>

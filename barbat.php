<?php
if(!isset($da)){
	$da="";
}

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
$nr=trim($_POST['nr']);
$i=0;
$file = fopen("2.csv","r");

while(! feof($file))
  {
		$array[$i] = fgetcsv($file);
		$i++;
  }


$da .= $array[$nr][1].'<br>';

fclose($file);
}



?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="number" name="nr" min="1" max="80">
  <input type="submit" name="submit" value="trimite">
</form>
<br>
<h1 style="color: red;"><?php if(isset($da)){echo $da;} ?></h1>


</body>
</html>

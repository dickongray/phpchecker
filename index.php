<?php date_default_timezone_set('NZ'); 

function myName()
{
return 'Dickon';
}
//This is another function with a pg_parameter_status()
// never have a function with just an echo. function should always be return not echo.
function newName($name)
{
return ' My name is' .$name;
}

function precent($score,$total)
{
return 100*$score/$total.'%';
}
function makeHeader($title,$description)
{
return $title.$description;
'Function'
$description = 'my very first attempt at writing some php code';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo myName();
	echo newName(' bob');
	?></h1>
	<p><?php echo precent(33,50);
	?>
	</p>
	<p><?php echo makeHeader($title,$description);
	 ?>
	</p>

	


	<p><?php echo date('l');?></p>

	<footer>&copyCopyright 2009 - <?php echo date("Y : H:i:s", time());?></footer>
</body>
</html>
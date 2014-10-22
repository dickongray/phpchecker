<?php 
//check image
//rioceives a filename
//Returns true or false depending on whether it is a certain type
// hint: in_array()

//option A
$filename = "thisimage.jpg";



//function checkImage($filename) {
//	$filenamez = array("jpg", "png", "gif");
//	$mini = array("jpg")

//	$value = substr($filename, -3);

//	if (in_array($value, $mini){
//		echo "Green light";
//	} else {
//		echo "Red light"; 
//	}
//}

//	echo checkImage($filename);

//The function below checks the array for the last 3 digits (-3)
//option B

	function checkImage($filename) {
		$filenamez = array("jpg", "png", "gif");
		$mini = $filenamez[0];
		$value = substr($filename, -3);

		if ($value == $mini){
		echo "Green light";
	} 	else {
		echo "Red light"; 
	}
}
	echo checkImage($filename);

?> 
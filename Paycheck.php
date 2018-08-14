<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Paycheck</title>
</head>
<body>
<?php
$Hours = $_POST['Hours'];
$Wage = $_POST['Wage'];
function calculatePay($Hours, $Wage){
	if(is_numeric($Hours)) && (is_numeric($Wage)) {
		if($Hours <= 40){
			$totalHours = $Hours * $Wage;
			echo $totalHours;
		} else {
			$totalHours = ($Hours * 1.5) * $Wage;
			echo $totalHours;
		}
	} else {
		echo "Please enter the number of hours worked and the hourly wage.";
	}
}
?>
</body>
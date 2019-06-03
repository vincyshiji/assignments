<?php

$percentMark = 50;


echo "The Percentage Of Mark Obtained By The Student : $percentMark . <br>";

switch ($percentMark) {
	case 50:
		echo "B.A";
		break;

	case 60:
		echo "B.Sc";
		break;	
	
	case 70:
		echo "Civil Engineering";
		break;

	case 80:
		echo "Mechanical Engineering";
		break;

	case 90:
		echo "Computer Science and Engineering";
		break;

	default:
		echo "Sorry you are not eligible for admission in any streams";
		break;
}



?>
<?php

$value = 50;

echo "The Mark You Entered Is : $value. <br>";

if ($value >= 80 && $value <= 100) {
	echo "The Student Has got A Grade.";
}
elseif ($value >= 60 && $value <= 79) {
	echo "The Student Has got B Grade.";
}
elseif ($value >= 40 && $value <= 59) {
	echo "The Student Has got C Grade.";
}
elseif ($value >= 20 && $value <= 39) {
	echo "The Student Has got D Grade.";
}
elseif ($value >= 10 && $value <= 19) {
	echo "The Student Has got E Grade.";
}

else{
	echo "Invalid Grade";
}

?>
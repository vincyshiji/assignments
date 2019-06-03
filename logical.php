<?php

$email = "info@baabtra.com";
$password = 321;

if ($email === "info@baabtra.com" && $password === 321) {
	echo "login Successful";
}
elseif ($email === "info@baabtra.com" && $password !== 321) {
	echo "Invalid password";
}
else{
	echo "Invalid username and password";
}

?>
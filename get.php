<?php

$books = [
["bookId" => "1",
"bookTitle" => "Wings Of Fire",
"bookAuthor" => "APJ Abdul Kalam",
"bookDescription" => "The book begins with the childhood of Kalam's life. In the beginning, he introduces us to his family and tries to familiarize us with his birthplace Rameswaram. In the childhood, he was a great admirer of his father, Jainulabdeen. He was a man of great wisdom and kindness, and Pakshi Lakshmana Sastry, a close friend of his father and the head priest of the Rameswaram Temple. He had an ideal helpmate in his mother, Ashiamma. He was also influenced by his close friend, Ahmed Jallaluddin; he was about 15 years older than Kalam. With his friend, he talked about spiritual matters. This shows that he believed in spirituality and also believed in God or Khudah. He always went to Lord Shiva's temple with his friends."
],
["bookId" => "2",
"bookTitle" => " In Search of Lost Time",
"bookAuthor" => "Marcel Proust",
"bookDescription" => "Swann's Way, the first part of A la recherche de temps perdu, Marcel Proust's seven-part cycle, was published in 1913. In it, Proust introduces the themes that run through the entire work"],



["bookId" => "3",
"bookTitle" => " Don Quixote",
"bookAuthor" => "Miguel de Cervantes",
"bookDescription" => "Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed section of La Mancha with his niece and a housekeeper"],


["bookId" => "4",
"bookTitle" => " Ulysses",
"bookAuthor" => "James Joyce",
"bookDescription" => "Ulysses chronicles the passage of Leopold Bloom through Dublin during an ordinary day, June 16, 1904"]
];

if($_GET["bookId"]){
foreach ($books as $key => $value) {
	

	if ( $value["bookId"] ===  $_GET["bookId"]) {
		echo "<h2>" . $value["bookTitle"] . " </h2>";
		echo "<h3>" . $value["bookAuthor"] . " </h3>";
		echo $value["bookDescription"] . "<br>";

	}
}

}


?>
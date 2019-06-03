<?php
$student =[

["Id" => 1, "Name" => "Arun" , "Marks" => 98],
["Id" => 2, "Name" => "Ajay" , "Marks" => 89],
["Id" => 3, "Name" => "Arjun" , "Marks" => 78],
["Id" => 4, "Name" => "Amritha" , "Marks" => 92],
["Id" => 5, "Name" => "Akila" , "Marks" => 100],

];


echo "<table>
	<tr>
	<th>
	ID
	</th>
	<th>
	Name
	</th>
	<th>
	Marks
	</th>
	</tr>";

foreach ($student as $key => $value) {


	
	echo "<tr>";
	echo "<td>".$value["Id"]."</td>";
	echo "<td>" . $value["Name"] . "</td>";
	echo "<td>" . $value["Marks"] . "</td>";
	echo "</tr>";


}
	echo "</table>";



?>
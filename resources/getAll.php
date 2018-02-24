<?php
require 'db.php';

$getAll = $db->persons->find();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>myApp</title>

	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}

		td, th {
			padding: 5px;
		}
	</style>
</head>

<body>
	<h3>Data from db</h3>

	<?php
		$dateTime = new DateTime();
		echo 'Server time: ' . $dateTime->format('Y-m-d H:i:s');
	?>

	<table>

	<tr>
		<th>ID</th>
		<th>Firstname</th> 
		<th>Lastname</th>
		<th>Insert date</th>
  	</tr>

    <?php
        foreach($getAll as $element){
            echo '<tr>';
            echo '<td>' . $element['id'] . '</td>';
            echo '<td>' . $element['firstname'] . '</td>';
            echo '<td>' . $element['lastname'] . '</td>';
            echo '<td>' . $element['insert_date']->toDateTime()->format('Y-m-d H:i:s') . '</td>';
            echo '</tr>';
        }
    ?>

	</table>
</body>

</html>


<html> <head>

<title>Очередь</title> </head>

<body>
<p>
<?php
	$db_host='localhost';
	$db_name='id18176150_clients';
	$db_user='id18176150_root';
	$db_pass='WK6g$^3A(SDKC!/s';
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
	$mysqli->set_charset("utf8mb4");
	
	$html = 
	'
	<style type="text/css">
		TABLE {
			border-collapse: collapse;
			border: 3px solid black; 
		}
		TD, TH {
			padding: 5px; 
			border: 3px solid black; 
		}
	</style>
		<table>
			<tr>
				<th>Дата</th>
				<th>Имя</th>
				<th>Телефон</th>
			</tr>
	';


	
	$result = $mysqli->query('SELECT * FROM queue_registr');
	while($row = $result->fetch_assoc())
	{
		$dat = '<tr>'.
					'<td>'.$row['dat_and_time_reg'].'</td>'.
					'<td>'.$row['name'].'</td>'.
					'<td>'.$row['telephone'].'</td>'.
				'</tr>';
		$html = $html.$dat;
	}

	$html = $html.
	'	
	</table>
	';
	
	echo $html;
?>
</p>
</body> 
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

<table class="pure-table">
	<tbody>
		<tr>
		<?php
			$file = fopen("finalData.txt", "r") or exit("Unable to open file!");
			while(!feof($file))
			  {
			  	$line = fgets($file);
			  	$arr[] = explode(",", $line);

			  }
			fclose($file);
			/*print"<pre>";
			print_r($arr);*/
		?>
			<td id = 'module ID'>Packet No.</td>
			<td id = 'packetnumber'>Flight State</td>
			<td id = 'time'>Temperature</td>
			<td id = 'state'>Barometric Altitude</td>
			<td id = 'Latitude'>Pressure</td>
			<td id = 'longitude'>Carrier Voltage</td>
			<td id = 'altitude'>Lander Voltage</td>
			<td id = 'velocity'>Latitude</td>
			<td id = 'date'>Longitude</td>
			<td id = 'accelx'>Vertical Velocity</td>
			<td id = 'accely'>GPS Speed</td>
			<td id = 'accelz'>AccelerometerX</td>
			<td id = 'pressure'>AccelerometerY</td>
			<td id = 'temperature'>AccelerometerZ</td>
			<td id = 'relative altitude'>LDR</td>
			<td id = 'lightintensity'>Force</td>
			<td id = 'battery voltage'>Ack Packets</td>
			<td id = 'na'>Magnetometer</td>
			<td id = 'na'> </td>
			<td id = 'na'> </td>
			<td id = '0'> </td>
		</tr>

<?php
	$count = 0;
	foreach($arr as $k=>$val){
		$count++;
		if($count % 2 != 0){
			echo "<tr class='pure-table-odd'>
				<td>".$val[0]."</td><td>".$val[1]."</td><td>".$val[2]."</td>
				<td>".$val[3]."</td><td>".$val[4]."</td><td>".$val[5]."</td>
				<td>".$val[6]."</td><td>".$val[7]."</td><td>".$val[8]."</td>
				<td>".$val[9]."</td><td>".$val[10]."</td><td>".$val[11]."</td>
				<td>".$val[12]."</td><td>".$val[12]."</td><td>".$val[14]."</td>
				<td>".$val[15]."</td><td>".$val[16]."</td><td>".$val[17]."</td>
				<td>".$val[18]."</td><td>".$val[19]."</td><td>".$val[20]."</td>
			</tr>";
		}else{
			echo "<tr >
				<td>".$val[0]."</td><td>".$val[1]."</td><td>".$val[2]."</td>
				<td>".$val[3]."</td><td>".$val[4]."</td><td>".$val[5]."</td>
				<td>".$val[6]."</td><td>".$val[7]."</td><td>".$val[8]."</td>
				<td>".$val[9]."</td><td>".$val[10]."</td><td>".$val[11]."</td>
				<td>".$val[12]."</td><td>".$val[12]."</td><td>".$val[14]."</td>
				<td>".$val[15]."</td><td>".$val[16]."</td><td>".$val[17]."</td>
				<td>".$val[18]."</td><td>".$val[19]."</td><td>".$val[20]."</td>
			</tr>";
		}
		
	}
?>
    </tbody>
</table>
</body>
</html>
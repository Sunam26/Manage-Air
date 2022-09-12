<html>
	<head><title>Oracle demo</title></head>
<body>
      <?php
	$conn=oci_connect("ID_53","sunamrcc49b","localhost/XE");
	// if(!$conn)
	// 	echo 'Failed to connect to Oracle';
	// else 
	// 	echo 'Successfully connected with Oracle';

	// $query = 'SELECT * FROM staff';
	// $stid = oci_parse($conn,$query);
	// $r = oci_execute($stid);
	// echo '<table border="1">';
	// while($row = oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC)){
	// 	echo '<tr>';
	// 	foreach($row as $item){
	// 		print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	// 	}
	// 	echo '</tr>';
	// }
//oci_close($conn);
?>
</body>
</html>
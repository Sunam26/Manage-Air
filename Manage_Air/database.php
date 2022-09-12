<?php
 $conn = oci_connect('ID_53', 'sunamrcc49b', 'localhost/XE');
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


?>
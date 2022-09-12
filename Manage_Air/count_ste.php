<?php

include 'database.php';

//echo 'hello';

$ajke;
$kalke;

$query = "ALTER SESSION SET NLS_DATE_FORMAT = 'mm/dd/yyyy'";
	$stid = oci_parse($conn,$query);
	$result = oci_execute($stid);

$query = "SELECT COUNT(SERIAL) FROM SORTIE WHERE SORTIE_DATE = TO_DATE(SYSDATE,'MM/DD/YYYY')";
$stid = oci_parse($conn,$query);
$result = oci_execute($stid);
if($result){
    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        //print '<tr>';
        foreach ($row as $item) {
            $ajke = ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp');
        }
    }
}

$query = "SELECT COUNT(SERIAL) FROM SORTIE WHERE SORTIE_DATE = TO_DATE(SYSDATE-1,'MM/DD/YYYY')";
$stid = oci_parse($conn,$query);
$result = oci_execute($stid);
if($result){
    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        //print '<tr>';
        foreach ($row as $item) {
            $kalke = ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp');
        }
    }
}

$diff = $ajke - $kalke;

if($diff < 0){
    $kombeshi = "decrease";
    $diff = $diff * -1;
}

else{
    $kombeshi = "increase";
}
echo '<h6>' . $ajke . '</h6>';

if($kalke != 0){
    $per = ($diff/$kalke)*100;
    echo '<span class="text-success small pt-1 fw-bold">' . round($per) . '%</span> <span class="text-muted small pt-2 ps-1">' . $kombeshi . '</span><br><br>';
}

else{
    echo 'No Flying Yesterday' . '<br>';
}

	

?>
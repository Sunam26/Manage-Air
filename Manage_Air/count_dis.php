<?php

include 'database.php';

//echo 'hello';

$ajke;
$kalke;
$diff;

$query = "ALTER SESSION SET NLS_DATE_FORMAT = 'mm/dd/yyyy'";
	$stid = oci_parse($conn,$query);
	$result = oci_execute($stid);

$query = "SELECT count(discripancies) FROM SORTIE WHERE SORTIE_DATE BETWEEN TO_DATE(SYSDATE-365,'MM/DD/YYYY') AND TO_DATE(SYSDATE,'MM/DD/YYYY') AND DISCRIPANCIES != 'NONE'" ;
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

$query = "SELECT count(discripancies) FROM SORTIE WHERE SORTIE_DATE BETWEEN TO_DATE(SYSDATE-720,'MM/DD/YYYY') AND TO_DATE(SYSDATE-366,'MM/DD/YYYY') AND DISCRIPANCIES != 'NONE'";
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
if($kalke != 0){
    $diff = $ajke - $kalke;
}
else
    goto jmp;

if($diff < 0){
    $kombeshi = "decrease";
    $diff = $diff * -1;
}

else{
    $kombeshi = "increase";
}

jmp:
echo '<h6>' . $ajke . '</h6>';

if($kalke != 0){
    $per = ($diff/$kalke)*100;
    echo '<span class="text-success small pt-1 fw-bold">' . round($per) . '%</span> <span class="text-muted small pt-2 ps-1">' . $kombeshi . '</span>';
}

else{
    echo 'Nothing from Last Year';
}

	

?>


<?php

include 'database.php';

//echo 'hello';

$activity = array();
$time = array();
$i = 0;
$j = 0;

$query = "ALTER SESSION SET NLS_DATE_FORMAT = 'mm/dd/yyyy'";
	$stid = oci_parse($conn,$query);
	$result = oci_execute($stid);

$query = "SELECT MODEL_NAME||' flown by ' || RANK || ' ' ||PILOT_NAME FROM SORTIE NATURAL JOIN AIRCRAFT NATURAL JOIN PILOT WHERE TAIL_NO = AC AND FLOWN_BY = PILOT_BD AND SORTIE_DATE = TO_DATE(SYSDATE,'MM/DD/YYYY') ORDER BY SORTIE_TIME DESC";
$stid = oci_parse($conn,$query);
$result = oci_execute($stid);
if($result){
    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        //print '<tr>';
        foreach ($row as $item) {
            $activity[$i] = ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp');
            $i++;
        }
    }
}

$query = "SELECT sortie_time FROM SORTIE NATURAL JOIN AIRCRAFT WHERE TAIL_NO = AC AND SORTIE_DATE = TO_DATE(SYSDATE,'MM/DD/YYYY')  ORDER BY SORTIE_TIME DESC";
$stid = oci_parse($conn,$query);
$result = oci_execute($stid);
if($result){
    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        //print '<tr>';
        foreach ($row as $item) {
            $time[$j] = ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp');
            $j++;
        }
    }
}

for($k=0; $k<$i; $k++){
    if($k>7)
        break;
    else{
        echo '<div class="activity-item d-flex">
                    <div class="activite-label">' . $time[$k] . '</div>
                    <i class=\'bi bi-circle-fill activity-badge text-success align-self-start\'></i>
                    <div class="activity-content">' . 
                    $activity[$k] . 
                    '</div>
            </div>';
    }

}

	

?>


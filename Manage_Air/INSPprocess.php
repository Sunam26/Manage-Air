

<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	$Inspection_Name = $_POST['Inspection_Name'];
	echo $Inspection_Name . '<br>';
	$Inspection_ID = $_POST['Inspection_ID'];
	echo $Inspection_ID . '<br>';
	$Tail_No = $_POST['Tail_No'];
	echo $Tail_No . '<br>';
	$Inspector_Name = $_POST['Inspector_Name'];
	$Inspector_BD = $_POST['Inspector_BD'];
	echo $Inspector_BD . '<br>';
	$INSP_DATE=$_POST['INSP_DATE'];
	//$INSP_DATE = 'to_date(\'' . $INSP_DATE . '\',\'yyyy-mm-dd\')';
	echo $INSP_DATE . '<br>';
	$AIRFRAME = $_POST['AIRFRAME'];
	echo $AIRFRAME . '<br>';
	$LANDING_GEARS = $_POST['LANDING_GEARS'];
	echo $LANDING_GEARS . '<br>';
	$EXHAUST = $_POST['EXHAUST'];
	$ENGINE = $_POST['ENGINE'];
	$AFTERBURNER = $_POST['AFTERBURNER'];
	$Remarks = $_POST['Remarks'];
	echo $Remarks . '<br>';

	//echo $INSP_DATE;

	$query = "ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD'";
	$stid = oci_parse($conn,$query);
	$result = oci_execute($stid);


	$query = "INSERT INTO INSPECTION values (:Inspection_ID, :Inspection_Name,  :INSP_DATE, :Tail_No , :AIRFRAME, :ENGINE, :LANDING_GEARS, :EXHAUST, :AFTERBURNER, :Inspector_BD, :Remarks)";
	$stid = oci_parse($conn,$query);
	oci_bind_by_name($stid, ':Inspection_ID', $Inspection_ID);
	oci_bind_by_name($stid, ':Inspection_Name', $Inspection_Name);
	oci_bind_by_name($stid, ':Tail_No', $Tail_No);
	oci_bind_by_name($stid, ':INSP_DATE', $INSP_DATE);
	oci_bind_by_name($stid, ':AIRFRAME', $AIRFRAME);
	oci_bind_by_name($stid, ':ENGINE', $ENGINE);
	oci_bind_by_name($stid, ':LANDING_GEARS', $LANDING_GEARS);
	oci_bind_by_name($stid, ':EXHAUST', $EXHAUST);
	oci_bind_by_name($stid, ':AFTERBURNER', $AFTERBURNER);
	oci_bind_by_name($stid, ':Inspector_BD', $Inspector_BD);
	oci_bind_by_name($stid, ':Remarks', $Remarks);
	$result = oci_execute($stid);
	if ($result) {
				//echo "Data added Successfully !";
				header("Location: ./sortie_inserted.html");
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

?>
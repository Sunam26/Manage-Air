<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	$Inspection_Name = $_POST['Inspection_Name'];
	$Inspection_ID = $_POST['Inspection_ID'];
	$Tail_No = $_POST['Tail_No'];
	$Inspector_Name = $_POST['Inspector_Name'];
	$Inspector_BD = $_POST['Inspector_BD'];
	$INSP_DATE=$_POST['INSP_DATE'];
	$AIRFRAME = $_POST['AIRFRAME'];
	$LANDING_GEARS = $_POST['LANDING_GEARS'];
	$EXHAUST = $_POST['EXHAUST'];
	$ENGINE = $_POST['ENGINE'];
	$AFTERBURNER = $_POST['AFTERBURNER'];
	$Remarks = $_POST['Remarks'];


	$query = oci_parse($conn, "INSERT INTO INSPECTION(INSPECTION_ID,INSP_NAME,INSP_DATE,SVC_AIRFRAME ,SVC_ENGINE ,SVC_LANDING_GEAR ,SVC_EXHAUST,SVC_AFTERBURNER , TAIL_NO , STAFF_BD ,STAFF_NAME,REMARKS ) 
	values ('$Inspection_ID ','$Inspection_Name',to_date('$INSP_DATE','yyyy-mm-dd'),'$AIRFRAME','$ENGINE','$LANDING_GEARS','$EXHAUST','$AFTERBURNER','$Tail_No','$Inspector_BD','$Inspector_Name','$Remarks')");
	$result = oci_execute($query);
	if ($result) {
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}
?>
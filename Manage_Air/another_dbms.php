<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	
    $SORTIE_DATE=$_POST['SORTIE_DATE'];
	/*function isValid($SORTIE_DATE, $format = 'Y-m-d'){
		$dt = DateTime::createFromFormat($format, $SORTIE_DATE);
		return $dt && $dt->format($format) === $SORTIE_DATE;
	  }
	  var_dump(isValid('2019-07-01'));
	  var_dump(isValid('2020-21-03'));
	  var_dump(isValid(7/13/2022));
	  var_dump(isValid('7/13/2022'));
	  var_dump(isValid('2022-07-13'));*/
	
	$serial = 1;
	$ser = oci_parse($conn,"select serial.nextval from dual");
	$result = oci_execute($ser);
	if($result){
		while ($row = oci_fetch_array($ser, OCI_RETURN_NULLS+OCI_ASSOC)) {
            //print '<tr>';
            foreach ($row as $item) {
              $serial = ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp');
			}
		}
	}
	echo $serial;
	  $SORTIE_TIME=$_POST['SORTIE_TIME'];
	$TAIL_NO=$_POST['TAIL_NO'];
	$PILOT_BD=$_POST['PILOT_BD'];
	$FLYING_HOUR = $_POST['FLYING_HOUR'];
	$ENGINE_HOUR = $_POST['ENGINE_HOUR'];
	$LANDING = $_POST['LANDING'];
	$DISCRIPANCIES=$_POST['DISCRIPANCIES'];
	$vehicle = $_POST['vehicle'];
	//echo $SORTIE_DATE;
	//echo $SORTIE_TIME;
    //$pilot_insert=oci_parse($conn,"INSERT INTO PILOT (PILOT_BD) VALUES('$PILOT_BD')");
	//$air_insert=oci_parse($conn,"INSERT INTO AIRCRAFT(TAIL_NO) VALUES('$TAIL_NO')");
	$insert = oci_parse($conn, "INSERT INTO SORTIE 
	values ('$serial',TO_DATE('$SORTIE_DATE','YYYY-MM-DD'),'$SORTIE_TIME','$TAIL_NO','$PILOT_BD','$FLYING_HOUR','$ENGINE_HOUR','$LANDING','$vehicle','$DISCRIPANCIES')");
	   /* oci_bind_by_name($insert, ":SORTIE_DATE", $SORTIE_DATE);
		oci_bind_by_name($insert, ":SORTIE_TIME", $SORTIE_TIME);
		oci_bind_by_name($insert, ":FLYING_HOUR", $FLYING_HOUR);
		oci_bind_by_name($insert, ":ENGINE_HOUR", $ENGINE_HOUR);
		oci_bind_by_name($insert, ":LANDING", $LANDING);
		oci_bind_by_name($insert, ":DISCRIPANCIES", $DISCRIPANCIES);*/
	
	//$res=oci_execute($pilot_insert);
	
	//$result=oci_execute($air_insert);
	$success = oci_execute($insert);
	if ($success) {
		header("Location: ./sortie_inserted.html");
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
	//$date=date_create("2013-03-15");
    //echo date_format($date,"Y/m/d H:i:s");
 

}
?>
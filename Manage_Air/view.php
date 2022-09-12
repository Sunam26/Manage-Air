<?php
include_once 'database.php';
session_start(); 
if($_SESSION["which"]=="Pilot") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM PILOT WHERE PILOT_BD='$username' AND PILOT_PASSWORD='$password'");
   $result=oci_execute($query);
  // $row = oci_fetch_all($query, $result);
  // $rows = oci_fetch_all($query, $result);
  // echo "ei porjonto ashche<br>";
 
     while (($rows = oci_fetch_row($query)) != false) {
      $PILOT_BD=$rows[0];
      $PILOT_NAME=$rows[1];
      $PILOT_FLYING_HOUR=$rows[2];
      $PILOT_ADDS=$rows[3];
      $PILOT_PHONE=$rows[4];
      $CAT=$rows[5];
      $email = $rows[7];
      $rank = $rows[8];
      //$PILOT_PASSWORD=$rows[6];
     // echo $rows[0] . " " . $rows[1] . "<br>\n";
     }
   
   

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}


elseif($_SESSION["which"]=="Staff") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM STAFF WHERE STAFF_BD='$username' AND STAFF_PASSWORD='$password'");
   $result=oci_execute($query);
  // $rows = oci_fetch_all($query, $result);
   echo "ei porjonto ashche<br>";
   while (($rows = oci_fetch_row($query)) != false) {
    $STAFF_BD=$rows[0];
    $STAFF_NAME=$rows[1];
    //$STAFF_BRANCH=$rows[2];
    ///$STAFF_ADDS=$rows[3];
    //$STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
  //  $STAFF_email=$rows[6];
    //$STAFF_rank=$rows[7];
   // echo $rows[0] . " " . $rows[1] . "<br>\n";
  }

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}


elseif($_SESSION["which"]=="Admin") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM STAFF WHERE STAFF_BD='$username' AND STAFF_PASSWORD='$password'");
   $result=oci_execute($query);
   $use="NA";
  // $rows = oci_fetch_all($query, $result);
   //echo "ei porjonto ashche<br>";
   while (($rows = oci_fetch_row($query)) != false) {
    $use="STAFF";
    $STAFF_BD=$rows[0];
    $STAFF_NAME=$rows[1];
   // $STAFF_BRANCH=$rows[2];
    //$STAFF_ADDS=$rows[3];
    //$STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
   // $STAFF_email=$rows[6];
    //$STAFF_rank=$rows[7];
   // echo $rows[0] . " " . $rows[1] . "<br>\n";
  }
  if ($use=="NA")
  {
    $q = oci_parse($conn, "SELECT * FROM PILOT WHERE PILOT_BD='$username' AND PILOT_PASSWORD='$password'");
   $r=oci_execute($q);
   $use="PILOT";

  // $row = oci_fetch_all($query, $result);
  // $rows = oci_fetch_all($query, $result);
  // echo "ei porjonto ashche<br>";
 
     while (($rows = oci_fetch_row($q)) != false) {
      $PILOT_BD=$rows[0];
      $PILOT_NAME=$rows[1];
      //$PILOT_FLYING_HOUR=$rows[2];
      //$PILOT_ADDS=$rows[3];
      //$PILOT_PHONE=$rows[4];
      //$CAT=$rows[5];
      $PILOT_PASSWORD=$rows[6];
      //$email = $rows[7];
      //$rank = $rows[8];
     // echo $rows[0] . " " . $rows[1] . "<br>\n";
     }

  }
  
  
   

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
    ?>
</head>
<body>
    <?php
        $conn = oci_connect("dbms","dbms","localhost/XE");
        $query='SELECT ';
        $tabs = ' FROM ';
        $sz = 0;
        //echo 'Hello world';
        //echo $_SESSION['use'][0];
        if(isset($_POST['viewData'])){


            if(!empty($_POST['color'])) {

                print '<table class="table datatable"><thead><tr>';
        
                foreach($_POST['color'] as $value){
                    //echo "Chosen colour : ".$value.'<br/>';
                    $query = $query . $value;
                    $sz++;
                    print '<th scope="col">' . $value . '</th>';
                    if($sz != sizeof($_POST['color'])){
                        $query = $query . ',';
                    }
                }
                print '</tr></thead>';
                //$query = $query . ' FROM AIRCRAFT';
                for($j=0; $j<sizeof($_SESSION['use']); $j++){
                    $tabs = $tabs . $_SESSION['use'][$j];
                    if($j != sizeof($_SESSION['use'])-1){
                        $tabs = $tabs . ' NATURAL JOIN ';
                    }
                }
                $query = $query . $tabs;
                //echo $_SESSION['use'][0];
                //echo 'Hello World22';
                $stid = oci_parse($conn, $query);
                $r = oci_execute($stid);

                // Fetch each row in an associative array
                print '<tbody>';
                while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                print '<tr>';
                foreach ($row as $item) {
                    print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
                }
                print '</tr>';
                }
                print '</tbody></table>';
                

            }
        
        }
    ?>
</body>
</html>
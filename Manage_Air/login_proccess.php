<?php
include_once 'database.php';
session_start();
if(isset($_POST['save']))
{
    
    $_SESSION["username"]= $_POST['username'];
    $_SESSION["password"]= $_POST['password'];

    // echo "Favorite animal is " . $_SESSION["username"] . ".";
    // echo "Favorite animal is " . $_SESSION["password"] . ".";
    $password =  $_SESSION["password"];
    $username = $_SESSION["username"];

    $flag = 0;
    echo ($username);
    echo ($password);
    
    if($_SESSION["which"]=="Pilot") {
       // echo "Favorite animal is " . $_SESSION["which"] . ".";
       // $conn = oci_connect('dbms', 'dbms', '//localhost/XE');
        $query = oci_parse($conn, "SELECT PILOT_BD,PILOT_PASSWORD FROM PILOT WHERE PILOT_BD='$username' AND PILOT_PASSWORD='$password'");
        $result=oci_execute($query);
        $rows = oci_fetch_all($query, $result);
         if ($rows) {
            $_SESSION["error"] = "";
            header("Location: ./dashboard.php");
             //echo "LOGIN SUCCESSFULL!";
             exit();
         }
         else{
            $_SESSION["error"] = "Incorrect Username or Password !";
           // header("Location: ./login.php");
             //echo "Incorrect Username or Password";
                     exit();
     }
    }

    elseif($_SESSION["which"]=="Staff") {
        // echo "Favorite animal is " . $_SESSION["which"] . ".";
         $query = oci_parse($conn, "SELECT STAFF_BD,STAFF_PASSWORD FROM STAFF WHERE STAFF_BD='$username' AND STAFF_PASSWORD='$password'");
         $result=oci_execute($query);
         $rows = oci_fetch_all($query, $result);
         if ($rows) {
            $_SESSION["error"] = "";
            header("Location: ./dashboard.php");
             //echo "LOGIN SUCCESSFULL!";
             exit();
         }
         else{
            $_SESSION["error"] = "Incorrect Username or Password !";
            header("Location: ./login.php");
             //echo "Incorrect Username or Password";
                     exit();
     }
     }
     elseif($_SESSION["which"]=="Admin") {
        // echo "Favorite animal is " . $_SESSION["which"] . ".";
         $query = oci_parse($conn, "SELECT ADMIN_BD,ADMIN_PASSWORD FROM ADMIN WHERE ADMIN_BD='$username' AND ADMIN_PASSWORD='$password'");
         $result=oci_execute($query);
         $rows = oci_fetch_all($query, $result);
         if ($rows) {
            $_SESSION["error"] = "";
            header("Location: ./dashboard.php");
             //echo "LOGIN SUCCESSFULL!";
             exit();
         }
         else{
            $_SESSION["error"] = "Incorrect Username or Password !";
            header("Location: ./login.php");
             //echo "Incorrect Username or Password";
                     exit();
     }
     }
	
}
?>
<?php
include_once 'database.php';
if(isset($_POST['save']))
{	
    session_start();
 
// Storing session data
    $_SESSION["error"] = "";
    $_SESSION["which"]= $_POST['pilotORstaff'] ;
    header("Location: ./login.php");
    
}
?>
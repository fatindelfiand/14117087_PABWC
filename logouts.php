<?php   
session_start();   
unset($_SESSION["user_id"]);   
unset($_SESSION["user_name"]);   
$url = "indexs.php";   
if(isset($_GET["session_expired"])) {   
    $url .= "?session_expired=" . $_GET["session_expired"];   
}   
header("Location:$url");   
?>
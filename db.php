<?php
$server ="localhost";
$user ="root";
$password ="";
$dbase ="asset";
$portNumber="3308";

$conn = mysqli_connect($server,$user,$password,$dbase,$portNumber);
/*
if($conn){

    echo '<div>';
        echo '<b>Connected to database '.$dbase.' Successfully. </b>';
    echo '</div>';

}else{
    die("Not connected" . mysqli_connect_error());

}
*/
?>
<?php

include '../db.php';
session_start();

if(isset($_POST['moveToEdit'])){



}

if(isset($_POST['getlaptop'])){
    $sql= "SELECT * FROM asset where catid=1";
    $runCat= mysqli_query($conn,$sql);
    if($runCat){
        while ($row=mysqli_fetch_array($runCat)){
            $catId=$row['catid'];
            $assetCode=$row['assetcode'];
            $ssName=$row['assetname'];
            $dateadd=$row['dateadded'];
            $img=$row['assetimage'];


        }
    }
}

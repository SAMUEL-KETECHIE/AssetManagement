<?php
 //include_once 'db.php';
/*session_start();

if(isset($_SESSION["uid"])){
	header("location: user.php");
}
 */
?>

<!DOCTYPE html>

<html>
<?php include "header.php"; ?>
<body >
<?php include "navbar.php"; ?>
<!-- END OF NAVIGATION BAR -->
<div id="wrapper">
<?php
include "sidebar.php";
?>
    <div  id="page-content-wrapper" class="main-container">

        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-3">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Computers</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalComp">200</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Furniture</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalFurniture">255</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Vehicles</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalVehicle">70</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-card">
                        <h4 class="card-beta"> Total Damages</h4>
                        <hr>
                        <span class="badge badge-dark badger" id="totalDamages">24</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="chart-card">
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="overlay"></div>-->
    </div>

    <!-- end of Main body -->
    <?php include "footer.php"; ?>
    <!-- end of footer -->
</div>
</body>
</html>
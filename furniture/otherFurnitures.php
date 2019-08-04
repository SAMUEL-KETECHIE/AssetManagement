
<!DOCTYPE html>

<html>
<?php
include "../db.php";
include "furnitureHeader.php";
?>
<body >
<?php
include "../navbar.php";
?>
<!-- END OF NAVIGATION BAR -->
<div id="wrapper">
    <?php
    include "../sidebar.php";
    ?>
    <!-- INCLUDE SIDE BAR HERE-->
    <div  id="page-content-wrapper">
        <div class="container-fluid main-card page-container">
            <h3 class="text-center text-primary panel panel-heading"> Hardwares </h3>

            <table class="table table-bordered" id="otherFurnTable">
                <thead>
                <tr class="info">
                    <th>#</th>
                    <th>Item Code</th>
                    <th>Asset Name</th>
                    <th>Asset Type</th>
                    <th>Date Added</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $rowId=0;
                $sql= "SELECT * FROM asset where catid=7";
                $runCat= mysqli_query($conn,$sql);
                if(mysqli_num_rows($runCat) > 0){
                    while ($row=mysqli_fetch_array($runCat)){
                        $catId=$row['catid'];
                        $assetCode=$row['assetcode'];
                        $ssName=$row['assetname'];
                        $dateadd=$row['dateadded'];
                        $img=$row['assetimage'];
                        $rowId = $rowId + 1;

                        ?>
                        <tr>
                            <td> <?php echo $rowId; ?>  </td>
                            <td> <?php echo $assetCode; ?>  </td>
                            <td> <?php echo $ssName; ?>  </td>
                            <td> <?php echo $catId; ?> </td>
                            <td> <?php echo formatDate($dateadd); ?> </td>
                            <td> <?php echo $img; ?>  </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-info" id="btn_edit_std"><span class="glyphicon glyphicon-pencil"> Edit</span></button>
                                    <button class="btn btn-danger" id="btn_del_student"><span class="glyphicon glyphicon-remove"> Delete </span></button>
                                </div>
                            </td>
                        </tr>
                        <?php

                    }
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- end of Main body -->
    <?php
    include "../footer.php";
    ?>
    <!-- end of footer -->
</div>
</body>
</html>
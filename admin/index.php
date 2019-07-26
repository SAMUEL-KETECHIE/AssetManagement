
<!DOCTYPE html>

<html>
<?php
include "admissionHeader.php";
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 main-card page-container">
                    <h3 class="text-center text-primary panel panel-heading txtHead">
                        Main Admin Page
                    </h3>
                    <form class="form-horizontal page-white" action="" method="POST">

                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!-- end of Main body -->
            <?php
            include "../footer.php";
            ?>
            <!-- end of footer -->
        </div>
    </div>
</div>
</body>
</html>
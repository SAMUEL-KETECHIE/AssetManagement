
<!DOCTYPE html>

<html>
<?php
include "computersHeader.php";
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
            <h3 class="text-center text-primary panel panel-heading">Computers and Accessories</h3>
            <form class="navbar-form" role="search">
                <input class="form-control" type="text" id="txt_search" placeholder="Search..."/>
                <button class="btn btn-info" type="submit" id="btn_search" >
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>
            <table class="table table-bordered">
                <thead>
                <tr class="info">
                    <th>#</th>
                    <th>Student No.</th>
                    <th>Full Name</th>
                    <th>Class</th>
                    <th>Image</th>
                    <th>Age (yrs)</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Student Location</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> 1 </td>
                    <td> WEN2000 </td>
                    <td> Palma Wendolin </td>
                    <td> 2 </td>
                    <td> My image here </td>
                    <td> 9 </td>
                    <td> Samuel Wendolin</td>
                    <td>Whitney Mark Wendolin</td>
                    <td> Westland- Legon</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-info" id="btn_edit_std"><span class="glyphicon glyphicon-pencil"> Edit</span></button>
                            <button class="btn btn-danger" id="btn_del_student"><span class="glyphicon glyphicon-remove"> Delete </span></button>
                        </div>
                    </td>
                </tr>
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
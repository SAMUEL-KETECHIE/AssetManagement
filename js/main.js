$(document).ready(function () {

    $("#laptopTable").dataTable();
    $("#desktopTable").dataTable();
    $("#projTable").dataTable();
    $("#accessoryTable").dataTable();
    $("#printerTable").dataTable();
    $("#tablechairTable").dataTable();
    $("#otherFurnTable").dataTable();

    /*
    document.querySelector("#snack_bar_warning").style.display = "none";
    document.querySelector("#snack_bar_success").style.display = "none";
    document.querySelector("#snack_bar_danger").style.display = "none";

     */


    //btn_save_std
    //btn_reset_std

});

function clearTextFields(e,fields) {
    e.preventDefault();
    bootbox.confirm({
        message: "Are you sure you want to reset clear all the fields ?",
        callback: function (result) {
            if(result===true){
                for(let field in fields){
                    field.value ="";
                }
                //let stdname=$("#txtstdname").val();
            }
        }
    }
    );
}



function showSnackBarWarning(message) {
    $("#snack_bar_warning").html(message);
    let x = document.getElementById("snack_bar_warning");
    x.className = "show alert-warning";
    setTimeout(function () {
        x.className = x.className.replace("alert-warning show", "");
    }, 9050);

}

function showSnackBarSuccess(message) {
    $("#snack_bar_success").html(message);
    let x = document.getElementById("snack_bar_success");
    x.className = "show alert-success";
    setTimeout(function () {
        x.className = x.className.replace("alert-success show", "");
    }, 9500);

}


function showSnackBarDanger(message) {
    $("#snack_bar_danger").html(message);
    let x = document.getElementById("snack_bar_danger");
    x.className = "show alert-danger";
    setTimeout(function () {
        x.className = x.className.replace("alert-danger show", "");
    }, 9500);

}

function  postRequest(uri,reqObject,callback=null) {
    let message="";
    $.ajax({
        url 	: uri,
        method 	: "POST",
        data 	: reqObject,
        success	: function(data,status){
            if(status===true){
                callback(data);
                return true;
            }else{
                message="Data was not saved. Check and try again.";
                showSnackBarDanger(message);
                return false;
            }
        }
    })
}

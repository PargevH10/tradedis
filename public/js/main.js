/* Start register-modal.blade.php */
$(".toggle-password").on('click', function() {
    $(".password_img").toggleClass("d-none");
    $(".password_img1").toggleClass("d-block");
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(".toggle-confirmPassword").on('click', function() {
    $(".confirmPassword_img").toggleClass("d-none");
    $(".confirmPassword_img1").toggleClass("d-block");
    $(this).toggleClass("fa-eye fa-eye-slash");
    let input1 = $("#confirmPassword");
    if (input1.attr("type") === "password") {
        input1.attr("type", "text");
    } else {
        input1.attr("type", "password");
    }

});

$('#register_modal').on('click', function () {
    $('.error-valid').remove();
    $('#loginModal').click();
})

/* End register-modal.blade.php */

/* Start login-modal.blade.php */
$(".login-toggle-password").on('click', function() {
    $(".login_password_img").toggleClass("d-none");
    $(".login_password_img1").toggleClass("d-block");
    $(this).toggleClass("fa-eye fa-eye-slash");
    let input2 = $("#login_password");
    if (input2.attr("type") === "password") {
        input2.attr("type", "text");
    } else {
        input2.attr("type", "password");
    }
});

$('#login_modal').on('click', function () {
    $('.error-valid').remove();
    $('#registerModal').click();
})

/* End login-modal.blade.php */

/* Start table.blade.php */
$(function() {
    /* initial variables */
    let numRows = $('#ticketLinesTable').find('tr').length;
    let SHOWN = 5;
    let MORE = 5;
    SHOWN++;

    /* get how many more can be shown */
    let getNumMore = function(ns) {
        let more = MORE;
        let leftOver = numRows - ns;
        if ((leftOver) < more) {
            more = leftOver;
        }
        return more;
    }
    /* how many are shown */
    let getInitialNumShown = function() {
        let shown = SHOWN;
        if (numRows < shown) {
            shown = numRows;
        }
        return shown;
    }
    /* set how many are initially shown */
    let numShown = getInitialNumShown();

    /* set the numMore if less than 20 */
    let numMore = getNumMore(numShown);

    /* set more html */
    if (numMore > 0) {
        let more_html = '<div class="table_view_more">' +
                            '<button id="more" class="btn table_btn">View more ' +
                                '<span style="font-weight: bold;">' + numMore +'</span>' +
                                '<img src="../img/icons/arrow-to-right.png" class="img-fluid ml-2" alt="Arrow to the right">' +
                            '</button>' +
                        '</div>';
        $('#ticketLinesTable').find('tr:gt(' + (numShown - 1) + ')').hide().end().after(more_html);
    }
    $('#more').click(function() {
        /* determine how much more we should update */
        numMore = getNumMore(numShown);
        /* update num shown */
        numShown = numShown + numMore;
        $('#ticketLinesTable').find('tr:lt(' + numShown + ')').show();

        /* determine if to show more and how much left over */
        numMore = getNumMore(numShown);
        if (numMore > 0) {
            $('#more span').html(numMore);
        } else {
            $('#more').remove();
        }
    });

});
/* End table.blade.php */

/* Start assets-browse.blade.php */
const inputState = document.getElementById('inputState')
const forms = document.querySelectorAll('.form_control');

forms.forEach((form, index, array) => {
    form.addEventListener('change', () => {
        if(array[0].value !== "" && array[1].value !== "") {
            inputState.disabled = false;
            $('#select_two').removeClass("d-none");
        } else {
            inputState.disabled = true;
            inputState.value = "";
            $('#select_two').addClass("d-none");
        }
    });
}) ;

//dropdown-table.blade.php
let dropdown_table = document.getElementsByClassName('dropdown_table_maturuty').length;

for (let i = 0; i <= dropdown_table; i++) {
    let value = `#dropdown_table_btn_${i}`;
    let value1 = `#dropdown_table_maturuty_${i}`;
    $(value).on("click", function(){
        if($(value1).hasClass("down")){
            $(value1).slideDown("normal").removeClass("down");
        }
        else{
            $(value1).slideUp("normal").addClass("down");
        }
    });
}

$('.dropdown_table_btn').on('click', function() {
    $(this).toggleClass('dropdown_down');
});

/* End assets-browse.blade.php */

/* Start contract-description.blade.php */
function DownloadFile(fileName) {
    //Set the File URL.
    let url = "Files/" + fileName;

    //Create XMLHTTP Request.
    let req = new XMLHttpRequest();
    req.open("GET", url, true);
    req.responseType = "blob";
    req.onload = function () {
        //Convert the Byte Data to BLOB object.
        let blob = new Blob([req.response], { type: "application/octetstream" });

        //Check the Browser type and download the File.
        let isIE = false || !!document.documentMode;
        if (isIE) {
            window.navigator.msSaveBlob(blob, fileName);
        } else {
            let url = window.URL || window.webkitURL;
            link = url.createObjectURL(blob);
            let a = document.createElement("a");
            a.setAttribute("download", fileName);
            a.setAttribute("href", link);
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    };
    req.send();
}

/* End contract-description.blade.php */
$( document ).ready(function() {

    $('#register_button').click(function () {
        $('.error-valid').remove();
        var form = $('#register_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: new FormData(form[0]),
            processData: false,
            contentType: false,
            success: function (data)
            {
                if (data == 1){
                    window.location.href = '/'
                }
            },
            error: function (err) {
                if (err.status == 422) {
                    $.each(err.responseJSON.errors, function (i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span class="error-valid" style="color: red;">' + error[0] + '</span>'));
                    });
                }
            },
        });
    });

    $('#login_button').click(function () {
        $('.error-valid').remove();
        // $('.credential_error').hide();
        var form = $('#login_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: new FormData(form[0]),
            processData: false,
            contentType: false,
            success: function (data)
            {
                console.log(data)
                if (data == 1){
                    window.location.href = '/'
                }
                else if (data == 2){
                    $('.credential_error').show();
                }
            },
            error: function (err) {
                if (err.status == 422) {
                    $.each(err.responseJSON.errors, function (i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span class="error-valid" style="color: red;">' + error[0] + '</span>'));
                    });
                }
            },
        });
    });
});


$(document).ready(function () {

    function load_data(query) {
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: { query: query },
            success: function (data) {
                $('#result').html(data);
            }
        });
    }

    $('#search_text').keyup(function () {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        }
        else {
            load_data();
        }
    });


    $('#update_btn').click(function () {
        let un = $("#update_name").val();
        let roll = $("#update_roll").val();
        let phone = $("#update_phoneno").val();
        console.log("update working");
        let pass = validity(un, phone, roll);

        if (pass) {
            // console.log(un + roll + phone);
            $.ajax({
                url: "/Stdm/OurProject1/AjaxHandler/updateStdAjax.php",
                method: "POST",
                data: {
                    usrname: un, roll: roll, phone: phone,
                    action: "updateHandler"
                },
                beforeSend: function () {
                    alert("update-about to send an ajax call");
                },
                success: function (data) {
                    var data = JSON.parse(data);
                    console.log(data);
                    if(data){
                        alert("update-successful");
                        $("#update-title").html("Update  Succseful!<br> Redirecting...");
                        const updatemsg = setTimeout(()=>{
                            console.log("Updated");
                            location.replace("/Stdm/OurProject1/UserInterface/StudentHome/studenthome.php")
                        },3000);
                    }
                    else
                        alert("Update unsuccesful");

                },
                error: function () {
                    alert("update-error");
                },
            })
        }
    });

    function validity(un, pno, roll) {
        const phone_regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        const roll_regex = /^[A-Za-z]{3}[0-9]{5}$/;
        let pass = 1;
        if (un.length === 0) {
            pass = 0;
            alert("User Name Required.");
        }

        if (roll.length === 0 && pno.length === 0) {
            pass = 0;
            alert("Roll No. or Phone no. Required.");
        }

        else if (!pno.match(phone_regex)) {
            pass = 0;
            alert("Please enter a valid Phone no.");
        }

        else if (!roll.match(roll_regex) && roll != 0) {
            pass = 0;
            alert("Please enter a valid Roll no.");
        }
        return pass;
    }

});

$('.check-event-std').click(function () {

    console.log("check event working")

    $.ajax({
        url: "/Stdm/OurProject1/AjaxHandler/showPostAjax.php",
        method: "POST",
        data: {
            action: "postHandler"
        },
        beforeSend: function () {
            alert("show post-about to send an ajax call");
        },
        success: function (data) {
            console.log(data);
            if (data) {
                alert("post-successful");
                
                $('.search-box h2').html("Available Events");
                $('.form-group').hide();
                
                $('#result').html(data);
            
                // location.replace("/Stdm/OurProject1/UserInterface/AlumniHome/showevents.php")
                
            }
            else
                alert("post unsuccesful");

        },
        error: function () {
            alert("post-error");
        },
    })
});
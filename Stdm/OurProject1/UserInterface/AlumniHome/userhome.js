$(document).ready(function () {

    $(".show-events").hide();

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


    $('#alm_update_btn').click(function () {
        let company = $("#alm_update_company").val();
        let role = $("#alm_update_role").val();
        let loc = $("#alm_update_loc").val();
        let phone = $("#alm_update_phone").val();
        console.log("update working")

        console.log(company + role + loc + phone);
        $.ajax({
            url: "/Stdm/OurProject1/AjaxHandler/updateAlmAjax.php",
            method: "POST",
            data: {
                company: company, role: role, loc: loc, phone: phone,
                action: "updateHandler"
            },
            beforeSend: function () {
                alert("update-about to send an ajax call");
            },
            success: function (data) {
                var data = JSON.parse(data);
                console.log(data);
                if (data) {
                    alert("update-successful");
                    $("#update-title").html("Update  Succseful!<br> Redirecting...");
                    const updatemsg = setTimeout(() => {
                        console.log("Updated");
                        location.replace("/Stdm/OurProject1/UserInterface/AlumniHome/alumniHome.php")
                    }, 3000);
                }
                else
                    alert("Update unsuccesful");

            },
            error: function () {
                alert("update-error");
            },
        })
    });

    $('#btn_post_req').click(function () {
        let title = $("#post-title").val();
        let date = $("#post-time").val();
        let description = $("#post-description").val();

        console.log("pending post working")

        console.log(title + date + description);
        $.ajax({
            url: "/Stdm/OurProject1/AjaxHandler/pendingPostAjax.php",
            method: "POST",
            data: {
                title: title, date: date, desc: description,
                action: "postHandler"
            },
            beforeSend: function () {
                alert("post-about to send an ajax call");
            },
            success: function (data) {
                var data = JSON.parse(data);
                console.log(data);
                if (data) {
                    alert("post-successful");
                    $("#post-header").html("Post Request Sent<br> Redirecting...");
                    const updatemsg = setTimeout(() => {
                        console.log("Updated");
                        location.replace("/Stdm/OurProject1/UserInterface/AlumniHome/alumniHome.php")
                    }, 3000);
                }
                else
                    alert("post unsuccesful");

            },
            error: function () {
                alert("post-error");
            },
        })
    });

    $('#check-event').click(function () {

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

});
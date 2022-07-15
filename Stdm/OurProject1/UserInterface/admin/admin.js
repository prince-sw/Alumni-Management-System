$(document).ready(function () {

    let accept_id = 0;
    let reject_id = 0;

    load_pending_events();

    function load_pending_events() {
        $.ajax({
            url: "admin-fetch.php",
            method: "POST",
            success: function (data) {
                $('#main-admin').html(data);
                console.log("success");
                if ( $('#main-admin').children().length == -1 ) {
                    $(this).html("No Pending Requests :)")
               }
                // console.log(data);
            },

            error: function () {
                alert("update-error");
            },
        });

    }

    function add_pending_events(query) {
        $.ajax({
            url: "admin-fetch.php",
            data: {add_event: query},
            method: "POST",
            success: function (data) {
                accept_id = 0;
                reject_id = 0;
                console.log("event confirmed" + data);
                load_pending_events();

            },

            error: function () {
                alert("update-error");
            },
        });

    }

    function delete_pending_events(query) {
        $.ajax({
            url: "admin-fetch.php",
            data: {delete_event: query},
            method: "POST",
            success: function (data) {
                accept_id = 0;
                reject_id = 0;
                console.log("event rejected" + data);
                load_pending_events();
            },

            error: function () {
                alert("update-error");
            },
        });

    }

    $(document).on("click", "#accept-btn", function(event){
        accept_id = parseInt($(this).parent().parent().parent().attr('id'));
        console.log(accept_id);
        add_pending_events(accept_id);
    });

    $(document).on("click", "#reject-btn", function(event){
        reject_id = parseInt($(this).parent().parent().parent().attr('id'));
        console.log(reject_id);
        delete_pending_events(reject_id);
    });

    $('#check-event-admin').click(function () {

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
                    
                    $('#main-admin').html("<h2>Available Events</h2><br>" + data);
                
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

    
    $('#btn_public_req').click(function () {
        let title = $("#post-title").val();
        let date = $("#post-time").val();
        let description = $("#post-description").val();

        console.log("pending post working")

        console.log(title + date + description);
        $.ajax({
            url: "/Stdm/OurProject1/AjaxHandler/publicEventsAjax.php",
            method: "POST",
            data: {
                title: title, date: date, desc: description,
                action: "post_public_events"
            },
            beforeSend: function () {
                alert("post-about to send an ajax call");
            },
            success: function (data) {
                // var data = JSON.parse(data);
                console.log(data);
                if (data) {
                    alert("public-successful");
                    $("#post-header").html("Post Request Sent<br> Redirecting...");
                    const updatemsg = setTimeout(() => {
                        console.log("Updated");
                        location.replace("admin.php")
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
    
})
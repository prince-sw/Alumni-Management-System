$(document).ready(function () {

    $("#public_events").click(function(){

            $.ajax({
                url: "/Stdm/OurProject1/AjaxHandler/publicEventsAjax.php",
                type: "POST",
                dataType: "json",
                data:{action: "load_public_events"},
                beforeSend: function () {
                    alert("about to send an ajax call");
                },
                success: function (data) {
                    
                    // console.log(data);
                    // alert("successful" + data);
                    $("#main-result").html(data);
                    $("#sign-in").hide();
                    
                },
                error: function () {
                    alert("error");
                },
    
            });
    })
      
    
    var un = $("#txt-roll").val();
    var pwd = $("#txt-pw").val();

    $("#btn-login").click(function (e) {

        const phone_regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        const roll_regex = /^[A-Za-z]{3}[0-9]{5}$/;

        var un = $("#txt-roll").val();
        var pwd = $("#txt-pw").val();
        
        if (un.length === 0 && pwd.length === 0) {
            $("#lbl-validity").html("Type Something!");
        }

        else if(!un.match(phone_regex) && !un.match(roll_regex)){
            alert("Wrong pno or rno");
        }

        else {
            //make an ajax call
            $.ajax({
                url: "/Stdm/OurProject1/AjaxHandler/sloginAjax.php",
                type: "POST",
                dataType: "json",
                data: { username: un, password: pwd, action: "loginHandler" },
                beforeSend: function () {
                    alert("about to send an ajax call");
                },
                success: function (x) {

                    alert("successful");

                    if (x.status == "OK") {
                        alert(x.userid);
                        $("#lbl-validity").text("VALID UN and PW");
                        if(x.tableid == 1)
                            window.location.replace("/Stdm/ourproject1/UserInterface/StudentHome/studenthome.php");
                        else
                            window.location.replace("/Stdm/OurProject1/UserInterface/AlumniHome/alumniHome.php")
                    }
                    else {
                        $("#lbl-validity").text("INVALID UN and PW");
                    }

                },
                error: function () {
                    alert("error");
                },

            });
        }

    });

    $("#btn-login-admin").click(function(){
        let admin_un = $("#admin_un").val();
        let admin_pw = $("#admin_pw").val();
        console.log(admin_un + admin_pw);
        if(admin_un === "PRINCE" && admin_pw === "PRINCE"){
            // console.log("success"+ un + pwd);
            window.location.replace("/Stdm/ourproject1/UserInterface/admin/admin.php");
        }
        
    })

});
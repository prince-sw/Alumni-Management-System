$(document).ready(function (){

    $("#mySelect").change(function (){
        let option = this.value;
        // console.log(this.value);
        if(option === "Alumni"){
            $("#reload_signup").load("signup_alumni.php");
        }
        else if(option === "Student"){
            $("#reload_signup").load("signup.php");
        }
    });

    $("#btn-signup").click(function (e){

        var un = $("#signup_name").val();
        var pwd = $("#signup_pw").val();
        var pno = $("#signup_phoneno").val();
        var roll = $("#signup_roll").val();
        let pass = validity(un, pwd, pno, roll);

        if(pass === 1){
            // console.log(pass)       
            $.ajax({
                url: "/Stdm/OurProject1/AjaxHandler/signupAjax.php",
                type: "POST",
                dataType: "json",
                data: { rollno: roll, password: pwd, name: un, phone: pno, action: "signupHandler" },
                beforeSend: function () {
                    alert("about to send an sign up 1 ajax call");
                },
                success: function (x) {

                    alert(x.id);

                    if (x.id === 1) {
                        alert("Acc created");
                        // $("#lbl-validity").text("VALID UN and PW");
                        // window.location.replace("/Stdm/ourproject1/userinterface/studenthome.php");

                    }
                    else {
                        alert("Acc not created")
                        // $("#lbl-validity").text("INVALID UN and PW");
                    }

                },
                error: function () {
                    alert("error signup");
                },

            });
        }
    });

    function validity(un, pwd, pno, roll){
        const phone_regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        const roll_regex = /^[A-Za-z]{3}[0-9]{5}$/;
        let pass = 1;
        if (un.length === 0) {
            pass = -1;
            alert("User Name Required.");
        }

        if (pwd.length === 0){
            pass = -1;
            alert("Password Required");
        }

        if (roll.length === 0 && pno.length === 0) {
            pass = -1;
            alert("Roll No. or Phone no. Required.");
        }

        else if(!pno.match(phone_regex)){
            pass = -1;
            alert("Please enter a valid Phone no.");
        }

        else if(!roll.match(roll_regex) && roll != 0){
            pass = -1;
            alert("Please enter a valid Roll no.");
        }
        return pass;
    }

});


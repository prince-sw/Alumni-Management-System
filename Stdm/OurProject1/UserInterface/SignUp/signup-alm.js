$(document).ready(function () {

    $("#btn_alm").click(function () {
        console.log("hi");
        let username = $("#alm_name").val();
        let phone_no = $("#alm_phone").val();
        let company_name = $("#alm_company").val();
        let pw = $("#alm_pw").val();
        let role_in_company = $("#alm_role").val();
        let location = $("#alm_location").val(); 
        let pass = validity(username, pw, phone_no);

        if (pass === 1){
            // console.log("alm_passed");
            console.log(role_in_company + pw);
            $.ajax({
                url: "/Stdm/OurProject1/AjaxHandler/signupAjax_alm.php",
                type: "POST",
                dataType: "json",
                data: {name: username, pass: pw, pno: phone_no, company: company_name,
                       role: role_in_company, loc: location, action: "signup_alm"},
                beforeSend: function (){
                    alert("Alm Signup Ajax call ");
                } ,

                success: function (x){
                    console.log(x.id);
                    alert("Alm success");
                },

                error: function () {
                    alert("Alm error signup");
                }
            });
        }
    });

    $("#mySelect").change(function () {
        let option = this.value;

        if (option === "Alumni") {
            $("#reload_signup").load("signup_alumni.php");
        }

        else if (option === "Student") {
            $("#reload_signup").load("signup.php");
        }
    });
});

function validity(un, pwd, pno) {
    const phone_regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    let pass = 1;
    if (un.length === 0) {
        pass = -1;
        alert("alm User Name Required.");
    }

    if (pwd.length === 0) {
        pass = -1;
        alert("Password Required");
    }

    if (pno.length === 0) {
        pass = -1;
        alert("Phone no. Required.");
    }

    else if (!pno.match(phone_regex)) {
        pass = -1;
        alert("Please enter a valid Phone no.");
    }
    return pass;
}
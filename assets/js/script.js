$(document).ready(()=> {

// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============

    $("#fname").blur(()=>{ 

        let fname = $("#fname").val();

        $.ajax({
            "url" : "process_fname.php",
            "data" : {"fname" : fname},
            "type" : "POST",
            "success" :(data)=> {
                if(data) {
                    $("#error_fname").html("First Name is Required!");
                } else {
                    $("#error_fname").val("");
                }
            }
        });  
        
    });  


    $("#lname").blur(()=>{

        let lname = $("#lname").val();

        $.ajax({
            "url" : "process_lname.php",
            "data" : {"lname" : lname},
            "type" : "POST",
            "success" :(val)=> {
                if(val == true) {
                    $("#error_lname").html("Last Name is Required!");
                } else {
                    $("#error_lname").empty("");
                }
            }
        });  
    }); 
    

    $("#uname").blur(()=>{

        let uname = $("#uname").val();

        $.ajax({
            "url" : "process_uname.php",
            "data" : {"uname" : uname},
            "type" : "POST",
            "success" :(val)=> {
                if(val == true) {
                    $("#error_uname").html("Username is Required!");
                } else if (val == false){
                    $("#error_uname").html("Username should be 5 to 8 characters.");
                } else {
                    $("#error_uname").empty("");
                }
            }
        });  
    });


    $("#email").blur(()=>{

        let email = $("#email").val();

        $.ajax({
            "url" : "process_email.php",
            "data" : {"email" : email},
            "type" : "POST",
            "success" :(val)=> {
                if(val == true) {
                    $("#error_email").html("Email is Required!");
                } else if (val == false) {
                    $("#error_email").html("Invalid email address!");
                } else {
                    $("#error_email").empty("");
                }
            }
        });  
    }); 

    $("#pass").blur(()=>{

        let pass = $("#pass").val();

        $.ajax({
            "url" : "process_pass.php",
            "data" : {"pass" : pass},
            "type" : "POST",
            "success" :(val)=> {
                if(val == true) {
                    $("#error_pass").html("Password is Required!");
                } else if (val == false) {
                    $("#error_pass").empty("");
                } else {
                    $("#error_pass").html("Password should be at least 8 characters.");
                }
            }
        });  
    }); 

    $("#cpass").blur(()=>{

        let cpass = $("#cpass").val();
        let pass = $("#pass").val();

        $.ajax({
            "url" : "process_cpass.php",
            "data" : {"cpass" : cpass, "pass" : pass},
            "type" : "POST",
            "success" :(val)=> {
                if(val == true) {
                    $("#error_cpass").html("Password Confirmation is Required!");
                } else if (val == false) {
                    $("#error_cpass").empty("");   
                } else {
                    $("#error_cpass").html("Password is not matched!");
                }
            }
        });  
    }); 

        




});
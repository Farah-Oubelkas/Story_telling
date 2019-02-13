const inputEmail = document.getElementById("fos_user_registration_form_email");
    const inputUsername = document.getElementById("fos_user_registration_form_username");
    function validateInputData(name,value,input) {
        let myData;
        let errorSpan;
        if(name === "username"){
            myData = {
                    "username" : value
            };
            errorSpan = "#usernameError";
        }else if( name === "email"){
            myData = {
                    "email" : value
            };
            errorSpan = "#emailError";
        }
        $.ajax({
            url: '{{path("validate_registration") }}',
            type: "POST",
            data: myData,
            async: true,
            success: function (data) {
                if(data){
                    input.classList.remove("invalidInput");
                    input.classList.add("validInput");
                    $(errorSpan).text(" ");
                    
                }else{
                    input.classList.remove("validInput");
                    input.classList.add("invalidInput");
                    $(errorSpan).text("This " +name+ " is already used");
                }
            },
            error: function (xhr, msg) {
                console.log(msg);
            }
        });
    }
    function IsEmail(input) {
        const syntax = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(syntax.test(input.value)) {
            validateInputData("email",input.value,input);
            $("#emailError").text(" ");
        }else{
            $("#emailError").text("Enter a valid email");
            input.classList.remove("validInput");
            input.classList.add("invalidInput");
        }
    }
    function IsUsername(input) {
        const syntax = /^[a-zA-Z]+([_\s\-]?[a-zA-Z0-9])*$/;
        const minL = 5,
              maxL = 255;
        let value = input.value;
        if(syntax.test(value) && value.length >= minL && value.length <= maxL) {
            validateInputData("username",value,input);
            $("#usernameError").text(" ");
        }else if(!(value.length>= minL && value.length <= maxL)){
            $("#usernameError").text("Username must be > 4 and <  256");
            input.classList.remove("validInput");
            input.classList.add("invalidInput");
            
        }else{
            $("#usernameError").text("Use only letter and number and  - _");
            input.classList.remove("validInput");
            input.classList.add("invalidInput");
        }
    }
    inputEmail.addEventListener("change",()=>{
        IsEmail(inputEmail);
           
    });
    inputUsername.addEventListener("change",()=>{
            IsUsername(inputUsername);     
     });
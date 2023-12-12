var form_alert = document.querySelector("#form-alert span");

function formSubmitAjax(form_id, method, file_path) {
    var form = document.getElementById(form_id);

    var form_data = new FormData(form);
    var xhr = new XMLHttpRequest();

    // Request method
    xhr.open(method, file_path, true);

    // Callback function to handle response
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log(200);
                console.log(xhr.responseText);
                //FORM_RESPONSE.innerHTML = "success";

                // Success responses
                if (xhr.responseText === "Account created successfully") {
                    window.location.href = "/bill-app/login";
                    //form_alert.textContent = xhr.responseText;
                    //form.reset();
                }
                else if (xhr.responseText === "Logged in successfully") {
                    window.location.href = "/bill-app/account";
                }
                else {
                    //document.getElementById("form-alert").style.display = "block";
                    //form_alert.textContent = xhr.responseText;
                }
            } else if (xhr.status === 404) {
                console.log(404);
            } else if (xhr.status === 500) {
                console.log(500);
            } else {
                console.log(xhr.status);
            }
        }
    }

    xhr.send(form_data);
}

// Form Handler
document.addEventListener("submit", function(e) {
    e.preventDefault();
    // Login
    if (e.target.id === "login-form") {
        formSubmitAjax(e.target.id, "POST", "php/includes/login.inc.php");
    // Register
    } else if (e.target.id === "register-form") {
        formSubmitAjax(e.target.id, "POST", "php/includes/register.inc.php");
    } else {
        console.log("something went wrong..");
    }
})

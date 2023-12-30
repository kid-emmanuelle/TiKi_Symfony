// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (() => {
//     'use strict'
//
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     const forms = document.querySelectorAll('.needs-validation')
//
//     // Loop over them and prevent submission
//     Array.from(forms).forEach(form => {
//         form.addEventListener('submit', event => {
//             if (!form.checkValidity()) {
//                 event.preventDefault()
//                 event.stopPropagation()
//             }
//
//             form.classList.add('was-validated')
//         }, false)
//     })
// })()

/**
 * Function to update login button text based on user status
 */
function updateLoginButton(userLoggedIn, userName) {
    var loginButton = document.getElementById("loginButton");

    if (userLoggedIn) {
        loginButton.textContent = userName;
        loginButton.href = "#"; // Update this with the user's profile or logout link
        setCookie('loggedIn', 'true', 1); // 'loggedIn' set to 'true' with an expiration of 1 day
        setCookie('userName', userName, 1); // 'userName' set to 'JohnDoe' with an expiration of 1 day
    } else {
        loginButton.textContent = "Log in";
        loginButton.href = "/login"; // Link to the login page
    }
}
/**
 * Function set cookie of user status of a session
 */
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

/**
 * Function manage the message of login form
 */
function submitLoginForm() {
    var username = $('#email').val();
    var password = $('#password').val();
    document.getElementById("email").classList.remove("is-invalid");
    document.getElementById("password").classList.remove("is-invalid");
    document.getElementById("email").classList.remove("is-valid");
    document.getElementById("password").classList.remove("is-valid");

    $.ajax({
        url: 'identificationLogin',
        method: 'POST',
        data: { username: username, password: password },
        success: function(response) {
            if (response.success) {
                // Update loginButton in navbar
                let userName = username.split('@')[1].split('.')[0];
                updateLoginButton(true, userName);
                alert("Login successful!");
                window.location.href = '/';
            } else {
                if(response.code === 1){
                    document.getElementById("email").classList.add('is-invalid');
                    document.getElementById("password").classList.add('is-invalid');
                }else if(response.code === 2){
                    document.getElementById("email").classList.add('is-valid');
                    document.getElementById("password").classList.add('is-invalid');
                }else {
                    // console.log('Identification échouée: ' + response.message);
                }
            }
        },
        error: function(error) {
            // console.error('Erreur lors de la soumission du formulaire', error);
            // console.log('Réponse serveur complète : ', error.responseText);
            alert("Erreur, merci de contacter un administrateur du site.");

        }
    });
}

/**
 * Function manage the message of register form
 */
function submitRegisterForm() {
    var email = $('#email').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var password = $('#password').val();
    document.getElementById("email").classList.remove("is-invalid");
    document.getElementById("firstname").classList.remove("is-invalid");
    document.getElementById("lastname").classList.remove("is-invalid");
    document.getElementById("password").classList.remove("is-invalid");
    document.getElementById("email").classList.remove("is-valid");
    document.getElementById("firstname").classList.remove("is-valid");
    document.getElementById("lastname").classList.remove("is-valid");
    document.getElementById("password").classList.remove("is-valid");
    $.ajax({
        url: 'identificationRegister',
        method: 'POST',
        data: { email: email, firstname: firstname, lastname: lastname, password: password },
        success: function(response) {
            if (response.success) {
                window.location.href = '/login';
            } else {
                if (response.errors.mail){
                    $('#email-invalid').html(response.errors.mail[0]);
                    document.getElementById("email").classList.add('is-invalid');
                }else{
                    document.getElementById("email").classList.add('is-valid');
                }
                if (response.errors.firstname){
                    $('#firstname-invalid').html(response.errors.firstname[0]);
                    document.getElementById("firstname").classList.add('is-invalid');
                }else {
                    document.getElementById("firstname").classList.add('is-valid');
                }
                if (response.errors.name){
                    $('#lastname-invalid').html(response.errors.name[0]);
                    document.getElementById("lastname").classList.add('is-invalid');
                }else {
                    document.getElementById("lastname").classList.add('is-valid');
                }
                if (response.errors.password){
                    $('#password-invalid').html(response.errors.password[0]);
                    document.getElementById("password").classList.add('is-invalid');
                }else {
                    document.getElementById("password").classList.add('is-valid');
                }
                // console.log('Création du compte échoué: ' + response.message +": ");
                // console.log(response);
            }
        },
        error: function(error) {
            // console.error('Erreur lors de la soumission du formulaire', error);
            // console.log('Réponse serveur complète : ', error.responseText);
            alert("Erreur, merci de contacter un administrateur du site.");

        }
    });
}
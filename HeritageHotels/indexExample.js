firebase.auth().onAuthStateChanged(function(user) {
    if (user){

        document.getElementById("user_div").style.display = "block";
        document.getElementById("login_div").style.display = "none";

        var user = firebase.auth().currentUser;

        if(user != null){

            var email_id = user.email;
            var email_verified = user.emailVerified;

            if(email_verified){

                document.getElementById("Verify_btn").style.display= "none";

            }else{
                document.getElementById("Verify_btn").style.display= "block";

            }

            document.getElementById("user_para").innerHTML = "Welcome User : "+email_id + 
                                                                "<br/> Verified : "+email_verified ;

        }
    }
    else{

        document.getElementById("user_div").style.display ="none";
        document.getElementById("login_div").style.display ="block";

    }
    
});

function login(){

    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;

    firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {

        var errorCode = error.code;
        var errorMessage = error.errorMessage;

        window.alert("Error : " + "Email or Password is/are not valid ");

    });
}

function create_account(){

    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;

    firebase.auth().createUserWithEmailAndPassword(userEmail, userPass).catch(function(error) {

        var errorCode = error.code;
        var errorMessage = error.errorMessage;

        window.alert("Error : " + "Email or Password not right");

    });
}

function logout(){
    firebase.auth().signOut();
}

function send_verification(){
    
    var user = firebase.auth().currentUser;

    user.sendEmailVerification().then(function() {
		window.alert("Verification Sent");
        //email sent;
    }).catch(function(error) {
		window.alert("Error : "+ error.message);
        //an error happened;
    });

}
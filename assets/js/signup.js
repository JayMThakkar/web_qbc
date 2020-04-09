 var firebaseConfig = {
    apiKey: "AIzaSyBbvPGQhgFbjp8uHbvWpkYhg0_OODw0X6w",
    authDomain: "qbcnew-6e028.firebaseapp.com",
    databaseURL: "https://qbcnew-6e028.firebaseio.com",
    projectId: "qbcnew-6e028",
    storageBucket: "qbcnew-6e028.appspot.com",
    messagingSenderId: "1021754037483",
    appId: "1:1021754037483:web:d3567d671ed26a9e389aae",
    measurementId: "G-CNPWMQX648"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


  const auth = firebase.auth();
  console.log("Jay");

function signinto(){
    console.log("Jay");
    var email = document.getElementById("email");
    var password1 = document.getElementById("password");
    console.log(email.value);
    firebase.auth().createUserWithEmailAndPassword(email.value, password1.value).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
          alert('The password is too weak.');
        } else {
          alert(errorMessage);
        }
        console.log(error);
        // [END_EXCLUDE]
      });    
}
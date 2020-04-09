 var firebaseConfig = {
    // Your web app's Firebase configuration
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
  firebase.analytics();

  const auth = firebase.auth();
  function Login(){
    var email = document.getElementById("email");
    var password1 = document.getElementById("password");
	//console.log(email.value);

    const promise=auth.signInWithEmailAndPassword(email.value, password1.value);
    promise.catch(e => alert(e.message));
    //alert("Logged In");
    
    
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.querySelector('.login-container .login-row .login-form.col-8 .input-field.username .input-login-username').addEventListener("focus", () => {
    document.querySelector('.login-container .login-row .login-form.col-8 .input-field.username').classList.add('active');
});

document.querySelector('.login-container .login-row .login-form.col-8 .input-field.password .input-login-password').addEventListener("focus", () => {
    document.querySelector('.login-container .login-row .login-form.col-8 .input-field.password').classList.add('active');
});

import { initializeApp } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-app.js";
import{ getAuth, GoogleAuthProvider, signInWithRedirect, getRedirectResult } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-auth.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-analytics.js";
    const firebaseConfig = {
  apiKey: "AIzaSyAKh9xeVNYS0pajiHP7n7KuU7BjsSU1jm0",
  authDomain: "phpassignment-75537.firebaseapp.com",
  databaseURL: "https://phpassignment-75537-default-rtdb.firebaseio.com",
  projectId: "phpassignment-75537",
  storageBucket: "phpassignment-75537.appspot.com",
  messagingSenderId: "720362539365",
  appId: "1:720362539365:web:3077b73a642d88c14d398c",
  measurementId: "G-9ZMYY5TDFM"
};
const googleBtn = document.getElementById('googleBtn');
const googleForm = document.getElementById('googleForm')

  // Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const provider = new GoogleAuthProvider(app);
const auth = getAuth(app);
googleBtn.addEventListener('click', async (e) => {
  signInWithRedirect(auth, provider)

  })

const googleAuth = function (){

  getRedirectResult(auth)

    .then( async (result) => {


      // This gives you a Google Access Token. You can use it to access Google APIs.
      const credential = GoogleAuthProvider.credentialFromResult(result);
      const token = credential.accessToken;
      

      // The signed-in user info.
      const user = result.user;

     
      const formData = new FormData(googleForm);
      formData.append('googleInput', 1);
      formData.append('token',token);
      formData.append('provider',provider);

      location.reload(true)
      // window.location.href = '../../src/www/index.php'

      await fetch('../../server/authentication.php',{
        method: 'POST',
        body: formData,
      })
      .then(res => {
        return res.json()

      }).then(data => console.log(data))
      .catch(error => console.log('Error'));
      const output = await res.json();
      console.log(output)
      // IdP data available using getAdditionalUserInfo(result)
      // ...
      alert(user.displayName);
    }).catch((error) => {
      // Handle Errors here.
      const errorCode = error.code;
      const errorMessage = error.message;
      // The email of the user's account used.
      const email = error.email;
      // The AuthCredential type that was used.
      const credential = GoogleAuthProvider.credentialFromError(error);
      // ...
    });
}
googleAuth()


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

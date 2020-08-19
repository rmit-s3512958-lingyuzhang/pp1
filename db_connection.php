<?php

export GOOGLE_APPLICATION_CREDENTIALS="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"
composer require google/cloud-firestore

use Google\Cloud\Firestore\FirestoreClient;

/**
 * Initialize Cloud Firestore with default project ID.
 * ```
 * initialize();
 * ```
 */
function initialize()
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient();
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
}

?>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA73FXE4JY5le6sFLQnbdvJw-wSU7f9uJQ",
    authDomain: "carshare-285508.firebaseapp.com",
    databaseURL: "https://carshare-285508.firebaseio.com",
    projectId: "carshare-285508",
    storageBucket: "carshare-285508.appspot.com",
    messagingSenderId: "316935690691",
    appId: "1:316935690691:web:e254f2e64658376fee8576"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

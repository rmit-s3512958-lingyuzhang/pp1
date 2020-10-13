
firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        console.log('User is authenticated, access to this page is allowed.');
    } else {
        console.log('User is not authenticated, redirecting to index.php.')
        window.location.replace('/index.php');
    }
}, function (error) {
    console.log(error);
});

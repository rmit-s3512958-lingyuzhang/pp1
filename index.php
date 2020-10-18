<?php
require_once './session.php';
require_once __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Datastore\DatastoreClient;

$projectId = 'carshare-285508';
$datastore = new DatastoreClient([
  'projectId' => $projectId
]);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CarShare</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
    type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

  <!-- Initialize Firebase.js -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase.js"></script>
  <script src="/js/config_and_init.js"></script>
  
  <!-- Tracking Auth State -->
  <script src="/js/tracking_auth_state.js"></script>

  <!-- Redirect users that are signed in as required -->
  <script>
    firebase.auth().onAuthStateChanged(function (user) {
      if (user.uid == 'kawPgUKWVQg3m2LgD6QaITDTvDG2') {
        console.log('Admin is authenticated, redirecting to admin dashboard.');
          window.location.replace('/admin');
      } else if (user) {
        console.log('User is authenticated, redirecting to booking page.')
        window.location.replace('/booking');
      } else {
        console.log('User is not authenticated.')
      }
    }, function (error) {
      console.log(error);
    });
  </script>

  <!-- Redirect to login page -->
  <script>
    function goToLoginPage() {
      window.location.href = "/login";
    }
  </script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome to CarShare</a>
      <a class="btn btn-primary" id="sign-in" onclick="goToLoginPage()">Sign In</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Book a car anytime, anywhere.</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>About Us</h3>
            <p class="lead mb-0">We are a service that allows you the freedom to choose when and where you have a car.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary" onclick="goToLoginPage()"></i>
            </div>
            <h3>Sign Up</h3>
            <p class="lead mb-0">Sign up here to join in the CarShare freedom.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" >
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary" onclick="goToLoginPage()"></i>
            </div>
            <h3>Make A Booking</h3>
            <p class="lead mb-0">Book to access a variety of vehicles across a number of locations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <div><h3>**TESTING**</h3></div>
  <div id="sign-in-status"></div>
  <div ></div>
  <pre id="account-details"></pre> -->



  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; CarShare 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <div>
    <footer id="footer" class="py-2 bg-light text-black-90">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://shareCars.com/"> CarShare.com</a>
      </div>
      <!-- Copyright -->

    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./js/main.js"></script>

</body>

</html>
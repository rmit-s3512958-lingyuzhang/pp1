<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="./style/main.css">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/adminAdd-page.css" rel="stylesheet">

    <!-- Initialize Firebase.js -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase.js"></script>
    <script src="/js/config_and_init.js"></script>

    <!-- Tracking Auth State -->
    <script src="/js/tracking_auth_state.js"></script>

    <!-- SignOut button funtion -->
    <script src="/js/signout.js"></script>

</head>

<body>
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Car share</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/userProfile">User Profile</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/userRecords">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/findCars">Find a Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" onclick="signout()">Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row container-row">
                <div class="col-md-12 ">
                    <h5 class="user-pro-title">User Profile</h5>
                    <hr>
                </div>
                <div class="col-md-5" style="padding-bottom: 15px;">
                    <div class="card profile-card-2">
                        <div class="card-img-block">
                            <img class="img-fluid"
                                src="./img/carshare.jpg"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body pt-5">
                            <img src="./img/profilePic.jpg"
                                alt="profile-image" class="profile" />
                            <h5 class="card-title">User Name</h5>
                            <ul>
                                <h6 class="card-firstName">First Name</h6>
                                <h6 class="card-LastName">Last Name</h6>
                                <div class="icon-block">
                                    <a href="#" class="card-Email"><i class="fas fa-at"></i> Email</a>
                                </div>
                                <div class="icon-block">
                                    <a href="#" class="card-Address"><i class="fas fa-address-card"></i> Address</a>
                                </div>
                                <div class="icon-block">
                                    <a href="#" class="card-Location"><i class="fas fa-location-arrow"></i> Location</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card profile-card-4 details-user">
                        <h6>Register Date: 2019/10/20</h6>
                        <h6>Last logged in Date: 2020/03/23</h6>
                        <h6>Account Status: Active</h6>
                        
                    </div>  
                </div>  
                
                </div>
            </div>
        </div>
        <footer id="footer" class="py-2 bg-light text-black-90">
    
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright: 
                <a href="/index">shareCars.com</a>
            </div>
            <!-- Copyright -->
    
        </footer>
    </div>
    <script src="./js/main.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
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

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#">CarShare</a>
                <a class="btn btn-primary" href="admin.php">Admin Dashboard</a>
                <a class="btn btn-primary" onclick="signout()">Sign Out</a>
            </div>
        </nav>


        <!-- display user info -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Lynn Z
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="userID" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="00000" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userFirstname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Lynn" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userLastname" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Z" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="email@email.com" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userPhone" class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="0401000000" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userLicense" class="col-sm-2 col-form-label">License</label>
                            <div class="col-sm-10">
                               <img src="img/vehicle.png" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userStatus" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                               <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="userStatus">
                                    <label class="form-check-label" for="userStatus">
                                        Valid
                                    </label>
                                </div>
                            </div>
                        </div>
                       
                        
                       
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



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
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Register - Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Open Sans', 'Roboto', sans-serif;
            line-height: 1.5em;
            margin-bottom: 0%;
            width: 100%;
            margin-top: 4%;
            overflow-x: hidden;
            background: #f1f1f1;
        }

        .navbar-light .navbar-brand {
            color: #1a1a1a;
            font-weight: bold;
            line-height: 22px;
        }

        .navbar {
            font-weight: 700;
            padding: 12px;
            font-style: normal;
            font-size: 14px;
            text-transform: uppercase;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        li.nav-item > a.nav-link {
            color: black !important;
            font-weight: bold !important;
        }

        #review {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }

        .form-inline > a.mr-2, .btn.btn-sm.my-2.my-sm-0 {
            color: black;
            font-size: 14px;
            font-weight: 700;
            margin-left: 10px;
        }

        .form-inline > a.mr-2:hover, .btn.btn-sm.my-2.my-sm-0:hover {
            color: #17b4bc;
            text-decoration: none;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn {
            background: #dc3545;
            font-size: 14px;
            color: white;
            padding: 5px;
            border: 2px solid transparent;
            width: 85px;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn:hover {
            background: white;
            border: 2px solid #dc3545;
            color: #dc3545;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

        .hero {
            height: 550px;
            width: 100%;
            border-color: rgba(0, 0, 0, 0.02);
            background: url(images/carousel2.jpg);
            background-size: contain;
            background-size: 100% 100%;
        }

        .form-control {
            font-size: 14px;
        }

        .hero-lead {
            font-size: 36px;
            color: white;
            font-style: normal;
        }

        .form-control {
            outline: none;
            border-radius: 0;
        }

        .btn.btn-info.text-uppercase {
            font-size: 14px;
        }

        .btn.btn-info.text-uppercase.font-weight-bold {
            width: 150px;
            padding: 6px;
            border-radius: 0;
        }

        .btn.btn-danger.text-uppercase {
            font-size: 14px;
        }

        .btn.btn-danger.text-uppercase.fb {
            width: 150px;
            padding: 6px;
            border-radius: 0;
        }

        .datepicker {
            width: 250px;
            font-size: 12px;
        }

        .pricing {
            width: 18%;
            min-height: 200px;
            float: left;
            background: gray;
            margin-left: 2%;
        }

        .container-fluid.custom-container {
            width: 90%;
        }

        a.btn.btn-custom {
            background: none;
            border-radius: 0;
            font-size: 12px;
            width: 100%;
            border: 2px solid #17a2b8;
            color: #17a2b8;
            font-weight: 700;
            text-transform: uppercase;
        }

        a.btn.btn-custom:hover {
            background: #17a2b8;
            color: white;
        }

        .list-group-item.text-center.text-uppercase {
            background: white;
            color: black;
            font-weight: 700;
            font-size: 18px;
            padding: 10px;
        }

        .list-group-item {
            font-size: 12px;
            padding: 5px 10px;
        }

        .card-columns {
            column-count: 4;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 15px;
            border-radius: 15px;
            width: 60%;
            max-width: 600px;
            position: relative;
        }

        .modal-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .modal-body {
            font-size: 13px;
            line-height: 1.6;
            color: #555;
        }

        .modal-body h2 {
            font-size: 16px;
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .modal-body p {
            margin-bottom: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php include 'include/nav.php';?>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="hero">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                </div>
                <div class="col col-lg-5" style="margin-top: 7%;">
                    <form class="bgact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2 class="text-center hero-lead">Wedding Planning Starts Here</h2>
                        <p class="lead text-center" style="color:white;">START BY FILLING UP THE FORM</p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="user_firstname" placeholder="First Name" id="user_firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="user_lastname" class="form-control" name="user_lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_email" id="user_email" placeholder="youremailaddress@mail.com">
                        </div>
                        <div class="form-group">
                            <input type="text" aria-describedby="phoneHelpBlock" class="form-control" name="user_phone" id="user_phone" placeholder="Contact Number">
                        </div>
                        <div class="form-row">
                            <div class="input-group col-md-5">
                                <input type="text" class="form-control" name="wedding_date" data-provide="datepicker" id="wedding_date" placeholder="Wedding Date">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background: white;"><i style="font-size: 20px;color:#19b5bc;" class="mdi mdi-calendar-check" id="review" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p style="font-size: 11px;color:white;">By clicking "Sign Up" you agree to WPHS's <a href="#" id="terms-link" title="" style="color: #b81717;font-weight: bold;">Terms of Use</a></p>
                            <button type="submit" name="register" class="btn btn-danger btn-sm text-uppercase fb" style="margin-top: -5px;">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="col col-lg-3">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Terms of Use Modal -->
<div id="terms-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1 class="modal-title">Terms of Use</h1>
        <div class="modal-body">
            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using our website and services, you agree to be bound by these Terms of Use. If you do not agree with these terms, please do not use our site.</p>

            <h2>2. User Responsibilities</h2>
            <p>You are responsible for maintaining the confidentiality of your account and password and for all activities that occur under your account.</p>

            <h2>3. Changes to Terms</h2>
            <p>We may update these terms from time to time. We will notify you of any changes by posting the new terms on our website.</p>

            <h2>4. Intellectual Property</h2>
            <p>All content and materials on our website are protected by intellectual property laws and are owned by us or our licensors.</p>
</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    // Get modal element
    let modal = document.getElementById("terms-modal");

    // Get link that opens the modal
    let link = document.getElementById("terms-link");

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];

    // When the user clicks the link, open the modal
    link.onclick = function(event) {
        event.preventDefault();
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <style>
        body {
            font-family: 'Open Sans', 'Roboto', sans-serif;
            line-height: 1.5em;
            margin-bottom: 2%;
            margin-top: 3%;
            width: 100%;
            overflow-x: hidden;
            background: #f1f1f1;
        }
        .form-control {
            font-size: 12px;
            border-radius: 0;
            margin-top: 0;
        }
    </style>
</head>
<body>
<?php include "include/nav.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center mb-3">CONTACT US</h3>
            <div class="bg-white p-4">
                <div class="contact-information">
                    <h5>LANDMARKET</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-sm" style="font-size: 12px;">
                                <tr>
                                    <td>Big Day Planners</td>
                                    <td><i class="mdi mdi-deskphone mr-3"></i> 999 (999) 999</td>
                                </tr>
                                <tr>
                                    <td>Al-Maslamani Street</td>
                                    <td><i class="mdi mdi-phone mr-3"></i> +970 591234567</td>
                                </tr>
                                <tr>
                                    <td>Nablus</td>
                                    <td><i class="mdi mdi-email mr-3"></i> haneenradad2013@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center mt-3">
                                <i class="mdi mdi-map-marker" style="font-size: 110px;color: #22ADB5;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white mt-3 pt-1 pl-4 pb-3">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <form action="register.php" method="post" style="font-size: 12px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_person">Name</label>
                                            <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Enter contact person" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_email">Email</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="appPassword">Your Gmail Password:</label>
                                            <input type="password" class="form-control" id="appPassword" name="appPassword" placeholder="Enter your Gmail  password" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_phone">Phone</label>
                                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Enter mobile phone" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_message">Message</label>
                                            <textarea class="form-control" style="resize: none;" rows="8" id="contact_message" name="contact_message" placeholder="Enter message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-2">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43424.79592914763!2d35.24995385598058!3d32.22334542573621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b277d4766b913%3A0x8a7bdf38fa65c6a1!2sAl-Maslamani%20Street%2C%20Nablus!5e0!3m2!1sen!2s!4v1636140230136!5m2!1sen!2s" width="95%" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0" style="font-size: 12px;margin-top: 10px;background: #22adb5;border: 0;">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL LOGIN SECTION-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal"><img src="images/logo/MOMMYAMBOL.png" alt=""></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" name="email"
                                   placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary mr-2 custom-btn" style="font-size: 14px;">
                                Login
                            </button>
                            <a href="#" style="color: #22adb5;">Forgot your password?</a>
                            <br/>
                            <div class="mt-2">Not a member yet? <a href="#" style="color: #22adb5;">Join Now</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Responsive Design -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

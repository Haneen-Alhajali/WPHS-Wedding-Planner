<?php include 'admin/include/init.php'; ?>
<?php
$session = new Session();
$count = 0;
$error = '';
$user_firstname = $user_lastname = $user_password = $user_email = $wedding_date = '';

$account_details = new Account_Details();
$accounts = new Accounts();
$booking = new Booking();
$category = Category::find_all();
$blogEvent = EventWedding::getEventBlogs();

if (isset($_POST['register'])) {

    $user_firstname = clean($_POST['user_firstname']);
    $user_lastname = clean($_POST['user_lastname']);
    $user_email = clean($_POST['user_email']);
    $user_phone = clean($_POST['user_phone']);
    $wedding_date = clean($_POST['wedding_date']);

    $checkdate = $booking->check_wedding_date($wedding_date);

    if ($checkdate) {
        redirect_to("index.php");
        $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  The wedding you enter is already booked. Please Try another set of date!
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
        die();
    }

    if (empty($user_firstname) ||
        empty($user_phone) ||
        empty($user_email) ||
        empty($user_lastname) ||
        empty($wedding_date)) {
        redirect_to("index.php");
        $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Please Fill up all the fields.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
        die();
    }

    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
        redirect_to("index.php");
        $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Incorrect email format.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
        die();

    }

    $check_email = $accounts->email_exists($user_email);

    if ($check_email) {
        redirect_to("index.php");
        $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Email is already Exists.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
        die();
    } else {
        if ($error == '') {
            $count = $count + 1;
            $account_details->firstname = $user_firstname;
            $account_details->lastname = $user_lastname;
            $account_details->status = 'pending';
            $account_details->datetime_created  = date("y-m-d h:m:i");
            $account_details->phone= $user_phone;
            if ($account_details->save()) {
                $account_details->user_id = mysqli_insert_id($db->connection);

                if($account_details->update()) {
                    $accounts->user_id = $account_details->user_id;
                    $accounts->user_email= $user_email;


                    if($accounts->save()) {
                        $booking->user_id = $accounts->user_id;
                        $booking->user_email = $user_email;
                        $booking->wedding_date =  $wedding_date;
                        $booking->save();
                        redirect_to("thank_you.php");
                    }
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home-imgs.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        .alert {
            font-size: 12px;
        }
        .error {
            background-color: #F2DEDE;
        }
        .alert.alert-danger.text-center {
            font-size: 16px;
        }
        .mdi.mdi-alert-circle.mr-3 {
            font-size: 16px;
        }

        .bgact{
            background: rgb(14 14 14 / 49%);
            padding: 15px;
        }

        #soundButton {
            position: fixed;
            bottom: 100px;
            right: 20px;
            background-color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            background-size: cover;
            width: 50px;
            height: 50px;
            z-index: 5000;
        }

        #soundButton.playing {
            background-image: url('images/pause.png');
        }

        #soundButton.stopped {
            background-image: url('images/play.png');
        }
    </style>
</head>
<body>
<?php include 'include/nav.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="hero">
            <div class="carousel slide " id="carouselExampleIndicators">
                <div class="carousel-indicators">
                    <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
                    <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
                    <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
                </div>
                <div class="carousel-inner hero">
                    <div class="carousel-item active">
                        <img alt="..." class="d-block w-100" src="images/carousel2.jpg" style="filter: brightness(70%); height: 600px;" >
                        <div class="carousel-caption-container">
                            <div class="carousel-caption">
                                <h5>We'll Make your Wedding <br> Perfect</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hero">
                        <img alt="..." class="d-block w-100" src="images/Himg2.jpg" style="filter: brightness(70%); height: 600px;">
                        <div class="carousel-caption-container">
                            <div class="carousel-caption">
                                <h5>Bespoke Wedding Themes</h5>
                                <p class="d-none d-md-block">From vintage charm to modern elegance, we craft wedding themes that reflect your style and vision.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hero">
                        <img alt="..." class="d-block w-100" src="images/Himg3.jpg" style="filter: brightness(60%); height: 600px;">
                        <div class="carousel-caption-container">
                            <div class="carousel-caption">
                                <h5>Capture Love</h5>
                                <p class="d-none d-md-block">Ensure every special moment is beautifully captured, with our professional wedding photography services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                </div>
                <div class="col col-lg-5" style="margin-top: 10%;">



                </div>
                <div class="col col-lg-3">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid custom-container">
    <div class="row">
        <div class="col-lg-12">
            <!-- <h3 class="h5 text-uppercase text-center text-muted mt-4">Wedding</h3> -->
            <hr>
            <h2 class="h2 text-uppercase text-center mb-4">Our Wedding Packages</h2>

            <?php foreach ($category as $category_row) : ?>
                <div class="pricing">
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item text-center text-uppercase"><?= $category_row->wedding_type; ?></li>
                        <li><img src="admin/<?= $category_row->preview_image_picture(); ?>" class="img-fluid" alt=""></li>
                        <li class="list-group-item text-center"><b>THIS PACKAGE INCLUDES:</b></li>
                        <?php $feature = Features::find_by_feature_all($category_row->id); ?>
                        <?php foreach ($feature as $feature_item) : ?>
                            <li class="list-group-item"><?= $feature_item->title; ?></li>
                        <?php endforeach; ?>
                        <li class="list-group-item font-weight-bold">Price: $ <?= number_format($category_row->price); ?>
                        </li>
                        <li class="list-group-item font-weight-bold">
                            <a href="package_detail.php?id=<?= $category_row->id; ?>" class="btn btn-custom">View Details</a>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
</div><!-- end of container-fluid -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="h2 text-uppercase text-center mb-3">THE LATEST INSPIRATION</h2>
            <h6 class="h6 text-uppercase text-center text-muted mb-3">Discover the best ideas, tips and articles to
                inspire
                your wedding.</h6>

            <div class="card-columns">

                <?php foreach($blogEvent as $blog_item) : ?>
                    <div class="card">
                        <img class="card-img-top" src="admin/<?= $blog_item->preview_image_picture(); ?>" alt="Card image cap">
                        <div class="card-body">
                            <a href="wedding_details.php?id=<?= $blog_item->id; ?>" class="btn-stamp">
                                <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase"><?= $blog_item->title; ?></h6>
                                <p class="card-text mt-0 mb-0 text-center color_gray"><?= $blog_item->wedding_type; ?> Wedding</p>
                                <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                                    <?= $blog_item->location; ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <a href="real-weddings.php" class="btn btn-lg btn-block btn-explore">EXPLORE MORE INSPIRATION</a>
            </div>
        </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
</div><!-- end of container -->

<?php include 'include/services.php'; ?>
<?php include 'include/footer.php'; ?>

<button id="soundButton" class="stopped" onclick="toggleSound()"></button>

<audio id="backgroundAudio"  >
    <source src="music.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<script>
    const soundButton = document.getElementById('soundButton');
    const backgroundAudio = document.getElementById('backgroundAudio');

    function toggleSound() {
        if (backgroundAudio.paused) {
            backgroundAudio.play();
            soundButton.classList.remove('stopped');
            soundButton.classList.add('playing');
        } else {
            backgroundAudio.pause();
            soundButton.classList.remove('playing');
            soundButton.classList.add('stopped');
        }
    }
</script>


<!-- Responsive Design -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/savy.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script>
    let carousel = $('#carouselExampleIndicators');
    let interval;

    function startCarousel() {
        interval = setInterval(() => {
            carousel.carousel('next');
        }, 7000);
    }

    function stopCarousel() {
        clearInterval(interval);
        carousel.carousel(0);
    }

    carousel.on('slide.bs.carousel', function () {
        $('.carousel-caption').removeClass('animated slideDown').addClass('animated slideUp');
    }).on('slid.bs.carousel', function () {
        $('.carousel-caption').removeClass('animated slideUp').addClass('animated slideDown');
    });

    $(document).ready(function() {
        startCarousel();
        setTimeout(() => {
            stopCarousel();
        }, 21000);
    });

    carousel.hover(
        function () {
            startCarousel();
        },
        function () {
            stopCarousel();
        }
    );
</script>


</body>
</html>
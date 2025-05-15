<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner</title>
    <style>


        body {
            display: flex;
            flex-direction: column;
            font-family: "Open Sans", sans-serif;
            background-color: #f1f1f1;
        }

        main {
            flex: 1;
        }

        .about-section {
            background: url(images/aboutImag.jpg) no-repeat left;
            background-size: 55%;
            background-color: #fdfdfd;
            overflow: hidden;
            padding: 100px 0;
        }

        .inner-container {
            width: 55%;
            float: right;
            background-color: #fdfdfd;
            padding: 150px;
            box-sizing: border-box;
        }

        .inner-container h1 {
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 900;
        }

        .text {
            font-size: 13px;
            color: #545454;
            line-height: 30px;
            text-align: justify;
            margin-bottom: 40px;
        }

        .skills {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 13px;
        }

        @media screen and (max-width: 1200px) {
            .inner-container {
                padding: 80px;
            }
        }

        @media screen and (max-width: 1000px) {
            .about-section {
                background-size: 100%;
                padding: 100px 40px;
            }
            .inner-container {
                width: 100%;
            }
        }

        @media screen and (max-width: 600px) {
            .about-section {
                padding: 0;
            }
            .inner-container {
                padding: 60px;
            }
        }


    </style>
</head>

<body>
<?php include 'include/nav.php'; ?>

<main>
    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Welcome to Your Wedding Planner! We turn your dream wedding into reality with passion and precision. From grand celebrations to intimate gatherings, we handle every detail with care. Trust us to make your special day unforgettable!
            </p>
            <div class="skills">
                <span>Elegant Venues</span>
                <span>Floral Arrangements</span>
                <span>Catering Services</span>
            </div>
        </div>
    </div>
</main>


<?php include 'include/footer.php'; ?>
</body>

</html>

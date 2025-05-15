<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        header {
            text-align: center;
            margin: 30px 0;
            font-family: 'Courgette', sans-serif;
            font-size: 2rem;
            color: #dc3545;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 60%;
            max-width: 1200px;
            padding-left: 50px;
        }
        .service-92655 {
            margin-top: 20px;
            margin-bottom: 10px;
            align-items: center;
            display: flex;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .icon-wrap {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            padding: 10px;
            background-color: rgba(220, 53, 69, 0.4);
            border-radius: 50%;
        }
        .icon-wrap img {
            max-width: 190%;
            max-height: 190%;
        }
        .service-92655 h3 {
            font-family: 'Courgette', sans-serif;
            margin-bottom: 10px;
            font-weight: 400;
        }
        .service-92655 p {
            margin: 0;
            color: #333;
            line-height: 1.4em;
            max-width: 250px;
        }

    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<header>Our Services</header>
<div class="container pb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/ring.png" alt="Wedding Ring Icon">
                </div>
                <div>
                    <h3>Wedding Ring</h3>
                    <p>Find the perfect wedding ring that symbolizes your eternal love.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/arch.png" alt="Wedding Venue Icon">
                </div>
                <div>
                    <h3>Wedding Venue</h3>
                    <p>Choose from a variety of beautiful venues to host your special day.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/honeymoon.png" alt="Honeymoon Icon">
                </div>
                <div>
                    <h3>Honeymoon</h3>
                    <p>Enjoy a romantic getaway to kickstart your life together.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/invitation-card.png" alt="Invitation Icon">
                </div>
                <div>
                    <h3>Invitation</h3>
                    <p>Create custom invitations to make your big day unforgettable.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/cake.png" alt="Food Taste Icon">
                </div>
                <div>
                    <h3>Food Taste</h3>
                    <p>Sample and select exquisite dishes for your wedding feast.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="service-92655">
                <div class="icon-wrap">
                    <img src="images/icons/wedding-planner.png" alt="Wedding Planner Icon">
                </div>
                <div>
                    <h3>Wedding Planner</h3>
                    <p>Get professional help to plan and organize every detail of your wedding.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('scroll', function() {
        let services = document.querySelectorAll('.service-92655');
        let windowHeight = window.innerHeight;

        services.forEach(function(service) {
            let serviceTop = service.getBoundingClientRect().top;

            if (serviceTop < windowHeight - 100) {
                service.style.opacity = 1;
                service.style.transform = 'translateY(0)';
            } else {
                service.style.opacity = 0;
                service.style.transform = 'translateY(20px)';
            }
        });
    });
</script>
</body>
</html>

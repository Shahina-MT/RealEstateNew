<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealEstate</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/icon-img.png">
</head>

<body>
    <section class="abt-main">
        <?php include 'header.php';?>
        <h1 class="abtus-h1">Contact us</h1>
    </section>
    <section>
        <div class="container">
            <div class="cnctct-usdiv">
                <h1 class="semi-h1">ACE EMPIRE</h1>
                <h1 class="cntctus-h1">Reach out to us today to begin your <br>real estate journey.</h1>
                <div class="row gx-md-4 gy-4 gy-md-0">
                    <div class="col-lg-6 pe-md-5">
                        <div class="col mb-md-3 mb-3">
                            <div class="cntct-detyldiv d-flex">
                                <img src="./images/cntctus-callimg.png" alt="" class="call-image">
                                <div class="cntctus-calldiv">
                                    <h1 class="number-h1">Phone number</h1>
                                    <a href="tel:+97145587854" class="number-h2">+97145587854</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-md-3 mb-3">
                            <div class="cntct-detyldiv d-flex">
                                <img src="./images/cntctus-mailimg.png" alt="" class="call-image">
                                <div class="cntctus-calldiv">
                                    <h1 class="number-h1">Email address</h1>
                                    <a href="mailto:aceempire@gmail.com" class="number-h2">aceempire@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cntct-detyldiv d-flex">
                                <img src="./images/cntctus-lctinimg.png" alt="" class="call-image">
                                <div class="cntctus-calldiv">
                                    <h1 class="number-h1">Address</h1>
                                    <h1 class="number-h2">Karama, Dubai</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 ps-md-4">
                        <div class="frm-cnct">
                            <form action="">
                                <div class="row mb-3 mb-md-5">
                                    <div class="col">
                                        <input type="text" class="form-control cnct-cntrl" placeholder="Name"
                                            aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="tel" class="form-control cnct-cntrl" placeholder="Mobile"
                                            aria-label="Last name">
                                    </div>
                                </div>
                                <div class="row mb-3 mb-md-5">
                                    <div class="col">
                                        <input type="email" class="form-control cnct-cntrl" placeholder="Email"
                                            aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control cnct-cntrl" placeholder="Subject"
                                            aria-label="Last name">
                                    </div>
                                </div>

                                <div class="col mb-md-5 mb-3">
                                    <textarea class="form-control cnct-cntrl" id="exampleFormControlTextarea1" rows="2"
                                        placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="cnttc-btn">Contact us</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.154594488199!2d55.174076175160025!3d25.096627677775782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x290bfa86fccd0099%3A0x15e3b83275de6f94!2sACE%20EMPIRE%20REAL%20ESTATE%20L.L.C!5e0!3m2!1sen!2sin!4v1743662671383!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="map"></iframe>
        </div>
    </section>

    <?php include 'footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a95728139c.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
</body>

</html>
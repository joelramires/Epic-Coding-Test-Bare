<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Epic Coding Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="assets/css/header.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/global.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/contact.css" rel="stylesheet" type="text/css" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once 'header.php'; ?>
    <main>
        <div class=container>


            <section class="mb-4">



                <h2 class="h1-responsive">Contact us</h2>

                <p class=" w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>








                <div class="row">


                    <div class="col-md-8 offset-md-2 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">


                            <div class="row mt-5">

                                <div class="col d-flex justify-content-start radio-buttons">
                                    <div class="btn-group btn-block" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                        <label class="btn btn-outline-dark" for="btnradio1">Sales</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                        <label class="btn btn-outline-dark" for="btnradio2">Support</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                        <label class="btn btn-outline-dark" for="btnradio3">Billing</label>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex justify-content-start  contactWords">
                                    <div class="col-xs-12 col-xxl-4 col-xl-4  col-lg-4 col-sm-4 col-md-4">
                                        <h6>Sales Phone</h6>
                                        <h2 class="h2Phone">844-374-2883</h2>
                                    </div>
                                    <div class="col-xs-12 col-xxl-4 col-xl-4  col-lg-4 col-sm-4 col-md-4">
                                        <h6>Email</h6>
                                        <h2 class="h2Phone">sales@epicvue.com</h2>
                                    </div>
                                </div>

                                <div class="row mt-5 d-flex justify-content-center">

                                    \
                                    <div class="col-md-4 border-left-0">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">First Name*</label>
                                            <input type="text" id="name" name="name" class="form-control info">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Last Name*</label>
                                            <input type="text" id="last_name" name="name" class="form-control info">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="md-form mb-0">
                                            <label for="phone" class="">Phone*</label>
                                            <input type="text" id="phone" name="phone" class="form-control info">
                                        </div>
                                    </div>


                                </div>

                                <div class="row mt-5 mb-5">


                                    <div class="col-md-4">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Email*</label>
                                            <input type="text" id="email" name="number" class="form-control info">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Company/Fleet Name*</label>
                                            <input type="text" id="company_name" name="name" class="form-control info">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="md-form mb-0">
                                            <label for="number" class="">Fleet Size*</label>
                                            <input type="text" id="fleet_size" name="name" class="form-control info">

                                        </div>
                                    </div>




                                </div>




                                <div class="row">


                                    <div class="col-md-12 mt-5">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea">Anthing else you'd lke to share?</textarea>
                                            <label for="message"></label>
                                        </div>

                                    </div>
                                </div>


                        </form>

                        <div class="text-center text-md-left d-flex justify-content-end mb-5 ">
                            <a class="btn btn-outline-dark send-btn" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>






                </div>



            </section>
            <!--Section: Contact v.2-->

            <div class="row mt-5 mb-5 location">
                <div class="col-xs-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <h3 class="location-header">Midvale</h3>
                    <h5 class="location-address">7070 South Union Park Center</h5>
                    <h5 class="location-address">Suite 220</h5>
                    <h5 class="location-address">Midvale, Utah 8404</h5>
                    <h5 class="location-phone">801.790.9000</h5>
                    <img class="location-img" src="assets/images/Developer_Test_1.jpg" alt="solar panel house">
                </div>

                <div class=" justify-content-end col-xs-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <h3 class="location-header">Park City</h3>
                    <h5 class="location-address">1776 Park Avenue</h5>
                    <h5 class="location-address">Suite 209</h5>
                    <h5 class="location-address">Park City, Utah 84060</h5>
                    <h5 class="location-phone">435.575.9000</h5>
                    <img class="location-img" src="assets/images/Developer_Test_2.jpg" alt="solar panel house">
                </div>
            </div>


        </div>
    </main>

    <?php include_once 'footer.php'; ?>

</body>

</html>
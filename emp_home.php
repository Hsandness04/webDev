<?php

session_start();


?>
<script>
    var emp = '<?php echo $_SESSION['emp_name'];?>';
</script>


<!DOCTYPE html>
<html lang="en">

<!--head tag displays the metadata--> 
    <head>
        <title>Core Passion</title>
        <meta name = 'viewport' charset="utf-8" content="width = device-width initial-scale = 1.0">
        <link rel="stylesheet" type='text/css' href='emp_home.css'></link>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script src="maps.js"></script>

    </head>

    <body> 
        <script>
            sessionStorage.setItem('employee', emp);


            // If person is an employee then save variables
            // and use them for the local storage. If person
            // is not an employee then display a message
            // that says they don't have access.
/*
            function checkAccessPrivlage() {
                var emp = sessionStorage.getItem('emp_name');

                if (count(emp) = 1) {
                    localStorage.setItem('emp_name', emp);
                    document.location.href = 'emp_home.html';

                } else {
                    // Load alert page that says person
                    // needs to verify themselves before 
                    // accessing employee sections.
                    document.location.href = 'credentialsAlert.html';

                }
            }

*/
        </script>
        <div class="page-wrapper">
            <div id="navbar">
                <a href='assessments.html'>Assessments</a>
                <a href='emp.html'>Employee Login</a>
                <a href="#contact-wrapper">ContactUs</a>
                <a href="#services-header">Services</a>
                <a href="#about-wrapper">About</a>
                <a href="#header-container">Home</a>
            </div>
            <div id='header-container' class='header-container'>
                <div class='header-img'>
                    <img name="logo" src="Untitled design.png">
                </div>
                <div class="header-contact">
                    <h2>Call Now: (763) 591-1959</h2>
                    <h5>24 Hr | Certified Nurses | Hourly</h5>
                    <p> Serving the Minneapolis area for over 20 years.</p>
                </div>
            </div>
            <div class="slide-show-container">
                <div class='slide-show'>
                    <img id="slide" name='slide'>
                </div>
            </div>
            <script>
                var i = 0;
                var images = [];
                var time = 6000;
                images[0] = "slide1.jpg";
                images[1] = "slide2.jpg";
                images[2] = "slide3.jpg";
                images[3] = "slide4.jpg";

                function changeImg() {
                    document.slide.src = images[i];
                    if (i < images.length - 1) {
                        i++;
                    }else {
                        i = 0;
                    }
                setTimeout("changeImg()", time);
                }
                    
                window.onload = changeImg;
                    
            </script>
            <div class="body-wrapper">
                <div class="brief-descr">
                    <p><b>Our name is Global 
                        Health Services because 
                        we focus on the overall
                         health and wellbeing of our 
                         clients. While primary healthcare 
                         focuses on diagnoses and treatments, 
                         global health encompasses more. <br><br>Our 
                         home health services help complete 
                         the link to quality of life with 
                         support in other important areas 
                         such as nutrition, activity, home 
                         safety, transportation, and and much 
                         more. From our headquarters in Minneapolis, MN, 
                         we provide nurse-supervised aide services 
                         for our clients in the surrounding seven 
                         Minnesota counties.</b></p>
                </div>
                <div class="grid-wrapper">
                    <h1>Welcome</h1>
                    <p>We are a healthcare agency dedicated to a 
                        different kind of healthcare. Our mission 
                        is the overall wellness of our clients. We 
                        have provided services to clients in our 
                        community since 2007 with the intention of 
                        being the best provider. We currently provide 
                        Home and Community based services, PCA, 
                        Customized living, and housing stabilization 
                        in a person-centered approach.</p><br><br>
                        <p>A little help around the home - 
                            such a simple concept. Our whole 
                            lives we've known how much this 
                            could enhance our enjoyment of life. 
                            Sometimes it's not just a luxury but 
                            a necessity for independent living. 
                            That's where Global Health Link comes 
                            in. We start with an in-home nurse 
                            assessment. Then we pick the formally 
                            trained aide right for your needs. 
                            Global Health Link sends aides to 
                            the homes of our clients for hours 
                            each day - if not 24 hours per day. 
                            If you or someone you care for could 
                            use help at home, please contact us 
                            now to learn more.</p>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="services-container">
                    <h1 id='services-header' class='header'><u>Services</u></h1>
                    <div class="service-1">
                        <a href='home.html'><img src='icons8-treatment-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Counseling</b></p>
                        </div>
                    </div>
                    <div class="service-2">
                        <a href='home.html'><img src='icons8-treatment-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Personalized health plans</b></p>
                        </div>
                    </div>
                    <div class="service-3">
                        <a href='home.html'><img src='icons8-nurse-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Trained/certified nurses available 24/7</b></p>
                        </div>
                    </div>
                    <div class="service-4">
                        <a href='home.html'><img src='icons8-treatment-96.png'></img></a>
                        <div class="service-note">
                            <p><b>In-Home Care</b></p>
                        </div>
                    </div>
                    <div class="service-5">
                        <a href='home.html'><img src='icons8-nurse-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Trained/certified nurses available 24/7</b></p>
                        </div>
                    </div>
                    <div class="service-6">
                        <a href='home.html'><img src='icons8-nurse-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Out-Patient Care</b></p>
                        </div>
                    </div>
                    <div class="service-7">
                        <a href='home.html'><img src='icons8-nurse-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Out-Patient Care</b></p>
                        </div>
                    </div>
                    <div class="service-8">
                        <a href='home.html'><img src='icons8-treatment-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Medicare/Medicaid</b></p>
                        </div>
                    </div>
                    <div class="service-9">
                        <a href='home.html'><img src='icons8-nurse-96.png'></img></a>
                        <div class="service-note">
                            <p><b>Trained/certified nurses available 24/7</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about-wrapper" class="about-wrapper">
                <div class="about-intro">
                    <h1>About GHS</h1>
                    <h3>Minneapolis, MN</h3>
                    <h5>We are a healthcare agency dedicated 
                        to a different kind of healthcare. Our 
                        mission is the overall wellness of our 
                        clients. <br><br>We have provided services to 
                        clients in our community since 2007 with 
                        the intention of being the best provider. 
                        We currently provide Home and Community 
                        based services, PCA, Customized living, 
                        and housing stabilization in a person-centered 
                        approach.
                    </h5>
                </div>
                <div class="about-goal">
                    <h2>Our Goal</h2>
                    <ul>
                        <li><b>We cater to your specific needs.</b></li>
                        <li><b>Global Health link pays above market rate.</b></li>
                        <li><b>Our services are around the clock so you don't have to worry about someone not being there.</b></li>
                        <li><b>We provide services in the seven metro counties.</b></li>
                        <li><b>We are a 245D licensed provider.</b></li>
                        <li><b>Medicaid certified: Medicaid pays 100%.</b></li>
                    </ul>
                </div>
            </div>
            <div id='contact-wrapper' class='wrap'>
                <div class='main-wrapper-form'>
                    <div class='main-wrapper-form-left'>
                        <h2> <b>CONTACT US</b></h2>
                        <h5>Phone: (763) 591-1959</h5>
                        <h6>Address: 5801 Duluth St # 310, Golden Valley, MN 55422</h6>
                        <div id="map"></div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8K6qYXlVAi6kViBfJcV3dE206aKM00As&callback=initMap&libraries=&v=weekly"
                            async>
                        </script>
                    </div>                                                                                     
                    <form name="contactForm" id="contactForm" class='form-horizontal' method="POST" action='form_submit.php'>
                        <div class="form-group">
                            <label class='control-label col-sm-5' for='first_name'>First Name <r>*</r>: </label>
                            <div class='col-sm-7'>
                                <input class='form-control' name='first_name' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='control-label col-sm-5' for='last_name'>Last Name <r>*</r>: </label>
                            <div class='col-sm-7'>
                                <input class='form-control' name='last_name' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='control-label col-sm-5' for='email'>Email<r>*</r>: </label>
                            <div class='col-sm-7'>
                                <input class='form-control' name='email' type='email' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='control-label col-sm-5' for='phone'>Phone: </label>
                            <div class='col-sm-7'>
                                <input class='form-control' name='phone'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class='col-sm-offset-4 col-sm-8'>
                                <button type='submit' class='btn btn-default'>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>

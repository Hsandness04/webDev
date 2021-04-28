<?php

if(isset($_COOKIE['token'])){
    require 'JwtHandler.php';
    $jwt = new JwtHandler();

    $data =  $jwt->_jwt_decode_data(trim($_COOKIE['token']));

    var_dump($data);
    //$jwt_time = $data['exp'];

} //else {
    //echo header('Location: accessDenied.html');
//}

echo "<!--head tag displays the metadata--> 
    <head>
        <title>Core Passion</title>
        <meta name = 'viewport' charset='utf-8' content='width = device-width initial-scale = 1.0'>
        <link rel='stylesheet' type='text/css' href='assessments.css'></link>
    </head>

    <body>";

    echo  "<div class='page-wrapper'>
            <div id='navbar'>
                <a href='assessments.html'>Assessments</a>
                <a href='emp_home.html'>Employee Login</a>
                <a href='home.html'>ContactUs</a>
                <a href='#services-header'>Services</a>
                <a href='#about-wrapper'>About</a>
                <a href='home.html'>Home</a>
            </div>
            <div id='header-container' class='header-container'>
                <div class='header-img'>
                    <img name='logo' src='./resources/company_logo.png'>
                </div>
                <div class='header-contact'>
                    <h2>Call Now: (763) 591-1959</h2>
                    <h5>24 Hr | Certified Nurses | Hourly</h5>
                    <p> Serving the Minneapolis area for over 20 years.</p>
                </div>
            </div>
        </div>
        <div class='intro-container'>
            <div class='polygon'></div>
            <h1>Learning Objectives</h1>
            <h3>This where you will learn about client illnesses, diseases, health
                issues and how to treat them. Take a look at each of the learning objectives below.
                <br><br> You must complete every objective that relates to your client.
            </h3>
            <!--<img src='resources/intro-image.jpeg'></img>-->
        </div>
            <div class='objectives-container'>
                <div class='space-left'></div>
                <div class='objective-list'>
                    <div id='alzheimers' class='dropdown'>
                        <button class='dropbtn'>Alzheimers</button>
                        <div class='dropdown-content-left'>
                            <a href='#'>Forgetfulness</a>
                            <a href='#'>Treatment</a>
                            <a href='#'>Take the Test</a>
                        </div>
                    </div>
                    <div id='stroke' class='dropdown'>
                        <button class='dropbtn'>Stroke</button>
                        <div class='dropdown-content-left'>
                            <a href='#'>Forgetfulness</a>
                            <a href='#'>Treatment</a>
                            <a href='#'>Take the Test</a>
                        </div>
                    </div>
                    <div id='heart_attack' class='dropdown'>
                        <button class='dropbtn'>Heart Attack</button>
                        <div class='dropdown-content-left'>
                            <a href='#'>Forgetfulness</a>
                            <a href='#'>Treatment</a>
                            <a href='#'>Take the Test</a>
                        </div>
                    </div>
                    <div id='lung' class='dropdown'>
                        <button class='dropbtn'>Lung Cancer</button>
                        <div class='dropdown-content-right'>
                            <a href='lung_cancer/ch1_forgetfullness.html'>Ch 1: Forgetfulness</a>
                            <a href='lung_cancer/ch2_treatment.html'>Ch 2: Treatment</a>
                            <a href='lung_cancer/test.html'>Take the Test</a>
                        </div>
                    </div>
                    <div id='disease' class='dropdown'>
                        <button class='dropbtn'>Disease</button>
                        <div class='dropdown-content-right'>
                            <a href='#'>Forgetfulness</a>
                            <a href='#'>Treatment</a>
                            <a href='#'>Take the Test</a>
                        </div>
                    </div>
                    <div id='nutrition' class='dropdown'>
                        <button class='dropbtn'>Nutrition</button>
                        <div class='dropdown-content-right'>
                            <a href='#'>Forgetfulness</a>
                            <a href='#'>Treatment</a>
                            <a href='#'>Take the Test</a>
                        </div>
                    </div>
                </div>
                <div class='space-right'></div>
            </div>
    </body>
</html>"

?>
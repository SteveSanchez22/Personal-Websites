<!-- Version 2.3 -->

<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Submit form here
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "me@stevealejandrosanchez.com";
        $body = "";

        $body .= "From : " . $userName . "\r\n";
        $body .= "Email : " . $userEmail . "\r\n";
        $body .= "Message : " . $message . "\r\n";

        mail($to, $messageSubject, $body);
        $message_sent = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en-gb">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WZJR3D9');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209079910-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-209079910-1');
    </script>


    <!-- START OF META -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Steve Alejandro Sanchez (Psst the key to pronouncing my name is start English and transition to a Spanish accent), a London based junior developer. Explore more about me, what I am getting up to and more!">
    <meta name="keywords" content="steve sanchez, steve alejandro sanchez, junior developer">
    <meta property="og:site_name" content="Steve Alejandro Sanchez" />
    <meta property="og:locale" content="en_GB" />
    <meta http-equiv="content-language" content="en-gb">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Steve Alejandro Sanchez Portfolio">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image" content="https://stevealejandrosanchez.com/images/Socials.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="The Man Himself ..... Steve Alejandro Sanchez" />
    <meta property="og:description" content="Steve Alejandro Sanchez (Psst the key to pronouncing my name is start English and transition to a Spanish accent), a London based junior developer. Explore more about me, what I am getting up to and more!">
    <meta property="og:url" content="https://stevealejandrosanchez.com" />
    <meta name="author" content="Steve Alejandro Sanchez">

    <!--  ===== END OF META  ======= -->

    <!--  Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Ubuntu GGL Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- magnific-popup.js - magnific-popup.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Font Awesome CDNJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- JQUERY CDNJS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific-popup.js - magnific-popup.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <title>Steve Alejandro Sanchez Portfolio</title>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZJR3D9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-width">
            <a href="/" class="logo"></a>
            <button class="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-menu">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#works">Portfolio</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>


    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <!-- Blank H1 - changes content -->
                <h1> </h1>
                <div class="sm">
                    <a href="https://github.com/SteveSanchez22" target="__Blank" class="fab fa-github"></a>
                    <!-- <a href="#" class="fab fa-instagram"></a> -->
                    <a href="https://www.linkedin.com/in/steve-alejandro-sanchez/" target="__Blank" class="fab fa-linkedin-in"></a>
                </div>
                <div class="buttons">
                    <a href="#contact">Contact me</a>
                    <!-- CTA implemented to get user to download or view my CV -->
                    <a href="https://stevealejandrosanchez.com/downloads/Steve-Resume.pdf" target="_blank">Download CV</a>
                </div>
            </div>
            <div id="section04" class="demo">
                <a href="#about"><span></span>Scroll</a>
            </div>
        </div>
    </section>

    <!-- Home  -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">About</h1>
            <div class="about-content">
                <img src="images/Steve-sanchez.jpg" alt="steve-alejandro-sanchez" class="about-pic">
                <div class="about-text">
                    <h2>A bit about me</h2>
                    <h3>
                        <span>Developer</span>
                        <span>Designer</span>
                        <span>Programmer</span>
                    </h3>
                    <p>

                        Hi, my name is Steve Alejandro Sanchez. I'm an aspiring Junior Developer with a passion for human-centred design.
                        My intrest in web development started back in 2016 when I began my degree in Computer Science at the <a href="https://www.kent.ac.uk" target="_blank"> University of Kent.</a>
                        <br>
                        <br>
                        Fast-Forward to today, and I've had the privilege of working at a Brand Asset Management company that managed
                        Luxury Brands. My main focus these days is in building accessible, inclusive products and digital experiences.
                    </p>
                </div>
            </div>
            <div class="skills">
                <div class="skill">
                    <div class="skill-info">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar html"></div>
                </div>


                <div class="skill">
                    <div class="skill-info">
                        <span>CSS</span>
                        <span>75%</span>
                    </div>
                    <div class="skill-bar css"></div>
                </div>


                <div class="skill">
                    <div class="skill-info">
                        <span>JavaScript</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar js"></div>
                </div>


                <div class="skill">
                    <div class="skill-info">
                        <span>PHP</span>
                        <span>50%</span>
                    </div>
                    <div class="skill-bar php"></div>
                </div>


                <div class="skill">
                    <div class="skill-info">
                        <span>SQL</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar sql"></div>
                </div>

                <div class="skill">
                    <div class="skill-info">
                        <span>Python</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar py"></div>
                </div>


            </div>
        </div>
    </section>


    <!-- Education -->
    <section id="education">
        <div class="inner-width">
            <h1 class="section-title">Education & Experiences</h1>
            <div class="time-line">
                <div class="block">
                    <h4>Present</h4>
                    <h3>Exploring & Development</h3>
                    <p>
                        <!-- Add semantic to keywords -  -->
                        I am currently in search for a Software Developer role. My intrests are within Web Development,
                        User experience and Machine learning. Keep an eye out on my Github account to see what I have
                        been getting up too!
                    </p>
                </div>
                <div class="block">
                    <h4>2018 - 2019</h4>
                    <h3>Notamvis</h3>
                    <p>
                        I joined Notamvis IT deparment as an Intern for my one year placement which was part of my
                        Undergraduate Degree in Computing at the University of Kent. Here, I was exposed to different
                        areas such as Digital Marketing and Web Development.
                    </p>
                </div>
                <div class="block">
                    <h4>2018 - 2019</h4>
                    <h3>Weiguo Solutions</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, distinctio. Ad, minus neque
                        incidunt asperiores quaerat non sed. Libero facere hic dolores, rem exercitationem ad iure quas
                        quaerat illo voluptatem.
                    </p>
                </div>
                <div class="block">
                    <h4>2018 - 2019</h4>
                    <h3>GTI Media</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, distinctio. Ad, minus neque
                        incidunt asperiores quaerat non sed. Libero facere hic dolores, rem exercitationem ad iure quas
                        quaerat illo voluptatem.
                    </p>
                </div>
                <div class="block">
                    <h4>2016 - 2020</h4>
                    <h3>University Of Kent</h3>
                    <p>
                        My initial start into the field of Computer Science! My period studying at the University of
                        Kent can only be desribed as a rollercoaster ride. My passion to programming and computer
                        science was very a love hate relationship. Through my experience with University I was able to
                        discover what I wanted to persue and focus.
                    </p>
                </div>
                <div class="block">
                    <h4>1997 - 2016</h4>
                    <h3>My Life</h3>
                    <p>
                        My journey to University was very much ingrained from very young. Although education has played
                        a major role in my life, I have always struggled, Until I met my private tutor at the age of 10.
                        He turned an under achieving student into a person who exceeded teachers result predictions. He
                        has taught me life lessons, which to this day I use!
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio -->
    <section id="works" class="dark">
        <div class="inner-width">
            <h1 class="section-title">Portfolio</h1>
            <div class="works">
                <a href="https://github.com/SteveSanchez22" target="_blank" class="work">
                    <img src="images/Multi.webp" alt="">
                    <div class="info">
                        <h3>Data Analysis</h3>
                        <div class="cat">Coming Soon</div>
                    </div>
                </a>

                <a href="https://github.com/SteveSanchez22/Personal-Websites" target="_blank" class="work">
                    <img src="images/Night.webp" alt="">
                    <div class="info">
                        <h3>Personal Websites</h3>
                        <div class="cat">Check out my website archive</div>
                    </div>
                </a>

                <a href="https://github.com/SteveSanchez22" target="_blank" class="work">
                    <img src="images/Red.webp" alt="">
                    <div class="info">
                        <h3>User Experience</h3>
                        <div class="cat">Coming Soon</div>
                    </div>
                </a>

                <a href="https://github.com/SteveSanchez22" target="_blank" class="work">
                    <img src="images/Sunset.webp" alt="">
                    <div class="info">
                        <h3>Work Title</h3>
                        <div class="cat">Coming Soon</div>
                    </div>
                </a>

                <a href="https://github.com/SteveSanchez22" target="_blank" class="work">
                    <img src="images/Multi.webp" alt="">
                    <div class="info">
                        <h3>Work Title</h3>
                        <div class="cat">Coming Soon</div>
                    </div>
                </a>

                <a href="https://github.com/SteveSanchez22" target="_blank" title="Directing to Steve's Github" class="work">
                    <img src="images/Red.webp" alt="">
                    <div class="info">
                        <h3>Work Title</h3>
                        <div class="cat">Coming Soon</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="inner-width">
            <h1 class="section-title">Get in touch</h1>
            <!-- Contact Form -->
            <form action="index.php" method="POST" class="contact-form">
                <input type="text" class="userName" name="name" placeholder="Name">
                <input type="email" class="userEmail" name="email" placeholder="Email">
                <input type="text" class="userSubject" name="subject" placeholder="Subject">
                <textarea class="userMessage" name="message" placeholder="Message"></textarea>
                <input type="submit" value="Send" class="btn">
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="inner-width">
            <div class="copyright">
                copyright &copy; 2022 | Steve Alejandro Sanchez. All rights reserved.
            </div>
            <div class="sm">
                <a href="https://github.com/SteveSanchez22" target="__Blank" class="fab fa-github"></a>
                <a href="https://www.instagram.com/alejo_sancho/" target="__Blank" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/steve-alejandro-sanchez/" target="__Blank" class="fab fa-linkedin-in"></a>
            </div>
        </div>
    </footer>

    <div id="progress-bar"></div>

    <!-- Custom JS -->
    <script src="script.js"></script>

</body>

</html>
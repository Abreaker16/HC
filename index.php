<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

  

    <link rel="stylesheet" href="css/styleee.css">
    <link rel="stylesheet" href="css/styleee1.css">
</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Hospital Care </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="login1.php">book appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="login1.php" class="trigger">Login</a>
  </div>

  <script src="js/sc.js"></script>
  <script>
    $('.signup').hide();
    $('#signin, #signup').on(
      'click',
      function()
    {
      $('.signin, .signup').toggle()
    }
    )
  </script>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="home" id="home">

    <div class="image">
        <img src="image/abt-img.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>An apple a day keeps the doctor away</p>
        <a href="#" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>we take care of your healthy life but first you need to take care of yours in order to stay healthy in your near future!!</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/sc.jpg" alt="">
            <h3>Dr.Jonathan Crane</h3>
            <span>Surgeon</span><br>
            <span>(MBBS,MS,Recognized by MCI)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-15.jpg" alt="">
            <h3>Dr.Walter White</h3>
            <span>Neurologist</span><br>
            <span>(Specialization in Neurology)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-9.png" alt="">
            <h3>Dr.Bruce Wayne</h3>
            <span>Physiotherapist</span><br>
            <span>(Orthopaedic)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Dr.Patrick Bateman</h3>
            <span>ENT</span><br>
            <span>(Otolaryngologist)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/jp.jpg" alt="">
            <h3>Dr.Joe</h3>
            <span>Assistant Doctor</span><br>
            <span>(MBBS,MS,PHd)</span>

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/pp.jpg" alt="">
            <h3>Dr.Geralt Rivia</h3>
            <span>Psychiatrist</span><br>
            <span>(Treatment of Mental Disorder)</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<section class="review" id="review">
    
    <h1 class="heading"> Patients <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpeg" alt="">
            <h3>Akshat Jaiswal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I would recommend you this platform as the doctors here are very heplful and will guide you properly.</p>
        </div>

        <div class="box">
            <img src="image/pic-2.jpeg" alt="">
            <h3>Tushar Gupta</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">It is a good platform i would reccomend it.</p>
        </div>

        <div class="box">
            <img src="image/pic-3.jpeg" alt="">
            <h3>Mukesh Sharma</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">10/10 would reccomend you this website as it is a great platform and the doctors here are very good.</p>
        </div>

    </div>
</section>

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 15 April, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Tushar </a>
                </div>
                <h3>lab results</h3>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 15 April, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Mukesh </a>
                </div>
                <h3>virtual support</h3>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 15 April, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Akshat </a>
                </div>
                <h3>our doctors view</h3>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-envelope"></i>golu1mukesh2@gmail.com  </p>
            <p> <i class="fas fa-envelope"></i>tushar16957@gmail.com </p>
            <p> <i class="fas fa-envelope"></i>prajjawal15j@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> Lucknow, india - 225003 </p>
            <p> <i class="fas fa-phone"></i> +91 7085961391 </p>
        </div>

        <div class="box">
            <h3>follow us on</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

</section>
<script src="js/script.js"></script>

</body>
</html>
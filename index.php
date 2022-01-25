<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>

            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality </h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident consectetur ducimus. Bladitiis, culpa!</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Developement</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Developement</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Developement</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>

        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque eum quia magni, voluptatibus nesciunt vero. Reprehenderit fugiat soluta ullam praesentium, omnis autem voluptatibus quae.</p>
            <button class="main-btn">Read more</button>
        </div>

    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form id="form" action="" method="post">
            <input type="text" name="user" placeholder="Your full Name"/>
            <input type="text" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here......."></textarea>
            <input class="main-btn contact-btn" id="submit" type="submit" name="submit" value="Continue" />
            
        </form>

    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="add.js"></script>

</body>
</html>
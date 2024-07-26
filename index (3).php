<?php
$mysqli = new mysqli('localhost', 'root', '', 'contact_form');

// Check connection
if ($mysqli->connect_errno) {
    die('Connection failed: ' . $mysqli->connect_error);
}

if(isset($_POST['submit'])){
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = $mysqli->query("INSERT INTO `contact_form` (name,email,number,date) VALUES ('$name','$email','$number','$date')");

    if($insert){
        $message = 'Appointment made successfully';
    } else {
        $message = 'Appointment failed';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedConnect: Booking Online Doctor's Appointment</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> <strong>Med</strong>Connect</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <section class="home" id="home">
        <div class="image">
            <img src="home.css.jpg" alt="">

        </div>
        <div class="content">
            <h3>Online Doctor Appointment Booking</h3>
            <p>Book doctor Appointment online and skip the queue.</p>
            <p>MedConnect is your go-to platform for easy,efficient, and hassel-free healthcare services.We provide a seamless digital experience,enabling you to book doctor appoinments and fast check-ins without waiting in long queues.Our focus on patient-centered care ensures you receive personalized attention and timely services.Take control of your health with MedConnect today.</p>
            <a href="appointment" class="btn"> appointment us <i class="fa fa-chevron-right" aria-hidden="false"></i></a>
        </div>
    </section>
    <section class="icons-container">
        
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>15+</h3>
            <p>doctors at work</p>
        </div>
        <div class="icons">
                <i class="fas fa-user-alt"></i>
                <h3>300+</h3>
                <p>statisfied patient</p>
        </div>
        <div class="icons">
                    <i class="fas fa-bed"></i>
                    <h3>40+</h3>
                    <p>bed facility</p>
        </div>
                    
    </section>
    <section class="about" id="about">
        <h1 class="heading"><span>about</span>us</h1>
        <div class="row">
            <div class="image">
                <img src="doc.css.jpg" alt="" height="100%" width="100%">
            </div>
            <div class="content">
                <h3>Break the line</h3>
                <p>MedConnect help you to not be the the part of the line.</p>
          
            <p>You can book your appointment through your phone.Our focus on patient-centered care ensures you receive personalized attention and timely services. </p>
            <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sunt adipisci debitis quis enim voluptatum eum accusantium maiores deserunt velit.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sunt adipisci debitis quis enim voluptatum eum accusantium maiores deserunt velit.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicine</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sunt adipisci debitis quis enim voluptatum eum accusantium maiores deserunt velit.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sunt adipisci debitis quis enim voluptatum eum accusantium maiores deserunt velit.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sunt adipisci debitis quis enim voluptatum eum accusantium maiores deserunt velit.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <section class="doctors" id="doctors">
        <h1 class="heading">our <span>doctors</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="doc1.jpg" alt="">
                <h3>dr.shalini</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc2.jpg" alt="">
                <h3>dr.riya</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc3.jpg" alt="">
                <h3>dr.amit</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc4.jpg" alt="">
                <h3>dr.sunil</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc5.jpg" alt="">
                <h3>dr.kashish</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="appointment" id="appointment">
        <h1 class="heading"><span>appointment</span> now</h1>
    <div class="row">
        <div class="image">
            <img src="calendar-7041843_640.png" alt="" height="50%" width="50%">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
if(isset($message)){
    echo '<p class="message">' . $message . '</p>';
}
?>

            <h3>make appointment</h3>
            <input type="text" name="name" placeholder="enter your name" class="box">
            <input type="number" name="number" placeholder="enter your number" class="box">
            <input type="email" name="email" placeholder="enter your email" class="box">
            <input type="date" name="date"  class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>
    </div>
    </section>
    <section class="review" id="review">
        <h1 class="heading">client's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="pic1.jpg" alt="">
                <h3>naya singh</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>  
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium qui quibusdam?</p>
            </div>
            <div class="box">
                <img src="pic2.jpg" alt="">
                <h3>Amit Verma</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>  
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium qui quibusdam?</p>
            </div>
            <div class="box">
                <img src="pic3.jpg" alt="">
                <h3>ada rao</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>  
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium qui quibusdam?</p>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>about</a>
            <a href="#"><i class="fas fa-chevron-right"></i>services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"><i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"><i class="fas fa-chevron-right"></i>review</a>
            
        </div>
        <div class="box">
            <h3>our services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
            <a href="#"><i class="fas fa-chevron-right"></i>message therapy</a>
            <a href="#"><i class="fas fa-chevron-right"></i>cardioloty</a>
            <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
            <a href="#"><i class="fas fa-chevron-right"></i>ambulance services</a>
            
        </div>
        <div class="box">
            <h3>appointment info</h3>
            <a href="#"><i class="fas fa-phone"></i>+9167489390</a>
            <a href="#"><i class="fas fa-phone"></i>+9137893893</a>
            <a href="#"><i class="fas fa-envalop"></i>medconnect@gmail.com</a>
            <a href="#"><i class="fas fa-envalop"></i>doctors@gmail.com</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fas fa-linkdin"></i>linkedin</a>
            <a href="#"><i class="fas fa-printerest"></i>printerest</a>
            
            
        </div>
    </div>
    <div class="credit">created by <span>medconnect</span>|all right reserved</div>
    </section>
</body>
</html>
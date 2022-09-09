<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
function Redirect_to($New_Location)
{header("Location:" . $New_Location);
    exit;
}

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
    contact();
}

function contact()
{
    if (isset($_POST["contact_btn"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';


//        $mail->IsSMTP();
//
//        $mail->Host       = "mail.example.com"; // SMTP server example
//        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
//        $mail->SMTPAuth   = true;                  // enable SMTP authentication
//        $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
//        $mail->Username   = "username"; 	// SMTP account username example
//        $mail->Password   = "password";        // SMTP account password example


        $mail->setFrom($_POST['email']);
        $mail->addAddress('ayman.alshantaf.work@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;
        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";

        $message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            echo "<script type='text/javascript'>alert('Your message has been sent successfully, thank you very much');</script>";
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--start section  navbar-->
<section class="main-navbar">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img src="image/logo.jpeg" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: white" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">What we do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!--end section  navbar-->

<!--start section  header-->
<section class="header">
    <video   autoplay="autoplay" loop   muted >
        <source src="image/header.mp4" type="video/mp4">
        <source src="image/header.mp4" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</section>
<!--end section  header-->

<!--start section  Who we are-->
<section class="about-us">
    <div class="container">
        <div class="content-text">
            <h2>Who we are</h2>
            <p>Green Innovation and Smart Education Consulting Group (GISECON) is a non-profit consulting company founded in 2020. The permanent headquarter is located in Sint-Pieters-Leeuw, Flemish Brabant, Belgium. GISECON is planned by a group of experts interested in environmental and educational technology issues related to regional and global environmental sustainability. They mainly seek to contribute in the improvement of the deteriorating environmental and educational situation. The association aims to preserve the natural resources from pollution, it also aims to raise smart education technology and environmental awareness and sustainability among regional and global communities, in order to sustain natural resources and to preserve public health. In addition, GISECON aims to build a high level of cooperation and coordination at regional and global levels with organizations that share its objectives and activities.</p>
        </div>
    </div>
</section>
<!--end section  header-->

<!--start section goals-->
<section class="coals">
        <div class="row">
            <div class="col-lg col-md-12" style="margin: 0;padding: 0">
                <div class="image-goals">
                    <img src="image/goals.jpg" alt="image goals">
                </div>
            </div>
            <div class="col-lg col-md-12 main-text-goals">
                <div class="container">
                    <div class="text-goals">
                        <h3>Goals</h3>
                        <p>Our goals and objectives can be fulfilled through activities, which will be realized in collaboration with academic institutions, private companies, NGOs and / or local communities with a view to a bidirectional exchange of practical experiences and knowledge. In addition, the association offers lectures, workshops and other events with the aim of informing, sensitizing and inspiring related stakeholders. Furthermore, GISECON can develop all activities that directly or indirectly contribute to the realization of the above-mentioned ideal on a non-profitable basis. The association can also provide guidance and support in the establishment of commercial partnerships and company forms.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--end section  goals-->

<!--start section what-we-do-->
<section class="what-we-do">
    <div class="container">
        <h2 class="title-we-do">What we do</h2>
        <div class="row">
            <div class="col-md">
                <div class="card-we-do">
                    <div class="image">
                        <img src="image/pexels-yan-krukov-8197513.png">
                    </div>
                    <div class="text-we-do">
                        <div class="content-text">
                            <h4>Training courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="overly-we-do"></div>
                </div>
                <div class="card-we-do">
                    <div class="text-mobile">
                        <div class="content-text">
                            <h4>Training courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-we-do">
                    <div class="image">
                        <img src="image/pexels-artem-podrez-4492161.png">
                    </div>
                    <div class="text-we-do">
                        <div class="content-text">
                            <h4>Smart education</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="overly-we-do"></div>
                </div>
                <div class="card-we-do">
                    <div class="text-mobile">
                        <div class="content-text">
                            <h4>Smart education</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-we-do">
                    <div class="image">
                        <img src="image/pexels-fauxels-3182754.png">
                    </div>
                    <div class="text-we-do">
                        <div class="content-text">
                            <h4>Training courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="overly-we-do"></div>
                </div>
                <div class="card-we-do">
                    <div class="text-mobile">
                        <div class="content-text">
                            <h4>Training courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section what-we-do-->

<section class="contact-map">
    <h2 class="title-contactus">Contact Us</h2>
    <div class="row">
        <div class="col-lg col-md-6">
            <div class="contactus">
                <h3>Contact Information</h3>
                <div class="social-media">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <span>+32 (0) 499 91 75 70</span>
                    </div>
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <span>info@gisecon.org</span>
                    </div>
                    <div class="contact">
                        <i class="fa fa-twitter"></i>
                        <span>twitter.com/Gisecon</span>
                    </div>
                    <div class="contact">
                        <i class="fa fa-facebook"></i>
                        <span>facebook.com/Gisecon</span>
                    </div>
                    <div class="contact">
                        <i class="fa fa-location-arrow"></i>
                        <span>L. A. Schockaertstraat 28 1600, Sint Pieters Leeuw Belgium</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <div class="map">
<!--                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=2880 Broadway, New York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div><style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;}.gmap_iframe {}</style></div>-->
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=L. A. Schockaertstraat 28 1600, Sint Pieters Leeuw Belgium&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div><style>.mapouter{position:relative;text-align:right}.gmap_canvas {overflow:hidden;background:none}</style></div>
            </div>
        </div>
    </div>
</section>

<section class="form-section">
    <div class="container">
        <h2>Get quick contact</h2>
        <div class="container-form">
            <form class="contact-form" method="post" action="index.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name"  id="name" placeholder="Jan Boon">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Question">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <p style="text-align: center;font-size: 14px">We never use your data for any purpose other than to contact you regarding your initial request.</p>
                <div class="col-auto form-button" >
                    <button name="contact_btn" type="submit" class="btn   mb-3">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
<hr style="color: #FF6600;height: 5px">
<p style="text-align: center">©2022-Gisecon</p>

<!--<script src="https://smtpjs.com/v3/smtp.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/script.js"></script>-->
</body>
</html>

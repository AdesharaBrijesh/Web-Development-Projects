<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/appwrite@10.2.0"></script>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Movies Blogging</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="png/icon.png" alt="alternative"></a> 
 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#registration">TRIAL</a>
                    </li> -->
                    <li class="nav-item">
                        <!-- <a class="nav-link page-scroll" href="#features">FEATURES</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link page-scroll" href="#details">DETAILS</a> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="Sport.php">SPORT</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="NEWS.php">NEWS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="movies.php">MOVIES</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="profile.php">PROFILE</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="signup.php" class="nav-link page-scroll">SIGN UP</a>
                    </li> -->
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Movies</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "website";



// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
} else {
        // echo "Connection was successful<br>";
        $sql = "SELECT * FROM blogdata WHERE  category='movies';";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // echo $num;
        // echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // echo "<div><h1>";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                // echo $num;
                // echo " records found in the DataBase<br>";
                // Display the rows returned by the sql query
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo var_dump($row);
                        echo '
      
    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4">';
                        // <!-- Shubman Gill will head into the Border Gavaskar Trophy. -->
                        echo $row["title"];

                        echo '
                    </h2>
                    <img class="img-fluid mt-5 mb-3" src="https://source.unsplash.com/600x300/?student" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1"> ';
                        echo $row['content'];
                        // <p>Shubman Gill will head into the Border Gavaskar Trophy with plenty of confidence after an exceptional performance in the limited-overs series against New Zealand. </p>
                        // <p class="mb-5">While he struggled in the first two T20Is after a sublime showing in the ODI series, his 63-ball 126 helped India win the series 2-1 and potentially launch his T20I career.Amid criticism over his intent and strike rate, Gill shattered records with his superbly paced knock that is also the highest T20I score for an Indian batter. </p>
    
                        // <h2 class="mb-3">Most career matches in T20I history</h2>
                        // <p>Rohit Sharma holds the record for the most career appearances in T20Is, and Shubman Gill certainly has what it takes to break that record. Rohits T20I career will be 16 years long this September, and he has accrued 148 appearances over that period.</p>
                        // <p class="mb-4">With T20I games happening more frequently than they used to a decade ago, Gill and players of this generation already have an edge in this regard. Already touted as one of the best batters for the future, there is no doubt Gill has a long career ahead of him.</p> 
                        echo '
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic --> 
    ';
                    }
                } else {
                    echo '<div class="alert alert_error"> <strong> ERROR ! data not found :( </strong><button aria-hidden="true" data-dismiss="alert" class="close" type="button" style="margin-left: 80%;"><a href="signup.php" style="text-decoration:none; color:""">&times;</a></button></div><br>';
                }
            }
        }
    }
?>


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4">2023 upcoming Bollywood films: 'Pathaan', 'Tiger 3', 'Jawan' and more</h2>
                    <img class="img-fluid mt-5 mb-3" src="movies/movie1.jpg" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p>The Bollywood film industry experienced a major boost at the theatres in 2022 with some top class hit films including: Gangubai Kathiwadi, Brahmastra, Drishyam 2, RRR. </p>
                    <p class="mb-5">The next year is going to be even better as it is going to witness the release of some big budgeted films consisting of the A-lister actors of the Hindi cinema. </p>

                    <h2 class="mb-3">Most career matches in T20I history</h2>
                    <p>Rohit Sharma holds the record for the most career appearances in T20Is, and Shubman Gill certainly has what it takes to break that record. Rohit's T20I career will be 16 years long this September, and he has accrued 148 appearances over that period.</p>
                    <p class="mb-4">With T20I games happening more frequently than they used to a decade ago, Gill and players of this generation already have an edge in this regard. Already touted as one of the best batters for the future, there's no doubt Gill has a long career ahead of him.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Cards -->
    <div class="ex-cards-1 pt-3 pb-3 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">1</span>
                                </span>
                                <div class="media-body">
                                    <h5>Pathaan</h5>
                                    <p>Shah Rukh Khan aka the King of Bollywood will be making his comeback after four years on the big screen with film Pathaan. The film also stars Deepika Padukone and John Abraham in the lead roles. Pathaan is directed by Siddharth Aanand and backed by Yash Raj Films. The spy-thriller is set to release on January 25.</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">2</span>
                                </span>
                                <div class="media-body">
                                    <h5>Kisi Ka Bhai Kisi Ki Jaan</h5>
                                    <p>The action-packed film starring Salman Khan, Pooja Hedge and Venkatesh in the lead roles is slated to release on Eid 2023. Khan looks extremely dapper in the film with long hair. The film is directed by Farhad Samji.</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">3</span>
                                </span>
                                <div class="media-body">
                                    <h5>Jawan</h5>
                                    <p>SRK has another film coming up in 2023 by the name Jawan which is going to mark his first collaboration with director Atlee. Vijay Sethupathi will be playing the antagonist in the film. Atlee’s film features Nayanthara in the female lead. The entertainer film Jawan will be released on June 2 in multiple languages like: Hindi, Tamil, Malayalam, Telugu and Kannada.</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->   
            </div> <!-- end of row -->   
        </div> <!-- end of container -->   
    </div> <!-- end of ex-cards-1 -->
    <!-- end of cards -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <!-- <p class="mb-5">Features include an eye catching morphtext in the header, details lightbox for more details information, statistics numbers for important values, card slider for testimonials, image slider for customer logos and working forms that will enable your landing page to provide leads in order to achieve your marketing goals.</p> -->
                    
                    <h2 class="mb-4">Marval another master pic movie ant-man-and-the-wasp-quantumania</h2>
                    <img class="img-fluid mb-5" src="movies/antman 2.jpg" alt="alternative">
                    <p>"Ant-Man and The Wasp: Quantumania" is an upcoming superhero film based on the Marvel Comics characters Ant-Man and The Wasp. It is a sequel to the 2018 film "Ant-Man and The Wasp" and the 20th film in the Marvel Cinematic Universe. The film is directed by Peyton Reed and stars Paul Rudd as Scott Lang/Ant-Man, Evangeline Lilly as Hope van Dyne/The Wasp, and Michelle Pfeiffer as Janet van Dyne.</p>
                    <p>"In "Ant-Man and The Wasp: Quantumania," Scott Lang will be dealing with the aftermath of "Avengers: Endgame" and the new dangers that come with the quantum realm. Along with Hope van Dyne and Janet van Dyne, he will be facing a new villain, Kang the Conqueror, who will be played by Jonathan Majors.</p>
                    <p>"The film is set to be released in 2023, but the exact release date has not been announced yet.</p>

                    <p class="mb-5">The Portugal international has not quite enjoyed the best start to his career in Saudi Arabia, having drawn blanks in his first two games. He eventually opened his account for Al-Nassr when he converted a late penalty to help his side secure a 2-2 draw against Al-Fateh.</p>
                    <!-- <div class="text-box mb-5">
                        <h3>Visitors love a beautiful and efficient website</h3>
                        <p>All designers, developers and tech-savvy people will be able to customize this template with basic web coding skills. Among the features you will find details lightbox for more details information, tabbed content for feature details, video lightbox, card slider for testimonials, statistics numbers, image slider for customer logos, dropdown navigation and useful extra pages for article details, terms.</p>
                    </div> end of text-box -->
                    <!-- <p class="mb-4">Together with touches of call to action green, the overall landing page design will showcase your app beautifully and will help with convincing visitors to download it from the app stores. Orange and gray hues with one color backgrounds to maximize the impact of your content image slider for customer logos and working forms.</p>
                    <ul class="list-unstyled li-space-lg mb-5">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Card slider</strong> for testimonials, statistics numbers for important values image slider for logos</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Dropdown navigation</strong> and useful extra pages for article details, terms conditions and privacy policy</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Clean light design</strong> mixing purple, orange and gray hues with one color backgrounds to maximize</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Together with</strong> touches of call to action green, the overall landing page design will showcase your app</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>This template</strong> is built with HTML, CSS and Bootstrap to ensure the highest flexibility for all users</div>
                        </li>
                    </ul> -->

                    
                    
                    <h2 class="mb-4">Avengers: Kang Dynasty & More - 2025 Will Be MIND BLOWING🤯🤯!!</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mjiedmj_RJU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p class="mb-5">The Bianconeri were ducked 15 points by the Italian football federation last week as a penalty for false accounting and financial violations involving player salaries and inflated transfers.</p>
                    
                    
                    <a class="btn-solid-reg mb-5" href="index.php#registration">MORE</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.php">Terms & Conditions</a>, <a href="privacy.php">Privacy Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#registration">Trial</a>, <a class="page-scroll" href="#features">Features</a>, <a class="page-scroll" href="#details">Details</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:vishvasbapodara2003@gmail.com"><strong>contact@website.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Name</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                    <p class="p-small">Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <script src="https://cdn.jsdelivr.net/npm/appwrite@10.2.0"></script>

</body>
</html>
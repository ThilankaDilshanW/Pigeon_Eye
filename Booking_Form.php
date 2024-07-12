<!DOCTYPE html>
<html lang = "en">

    <head>

        <!-- Meta data -->

        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <mata name = "descrption" content = "Sri Lanka is an island country in South Asia. It lies in the Indian Ocean, southwest of the Bay of Bengal, and southeast of the Arabian Sea; it is separated from the Indian subcontinent by the Gulf of Mannar and the Palk Strait. Sri Lanka shares a maritime border with India and the Maldives.">
        <meta name = "keywords" content = "Pigeon, Sri Lanka">
        <meta name = "author" content = "NSBM Green University Pigeon group">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <!-- Web page title -->
        <title> Booking - Pigeon </title>

        <!-- favicon of the site -->
        <link rel = "icon" type = "image/x-icon" href = "Images/Common/favicon.ico">

        <!-- Boostrap link for css -->
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel = "stylesheet">

        <!-- Boostrap link for js -->
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Fontawesome link -->
        <script src = "https://kit.fontawesome.com/4e15aa74c6.js" crossorigin = "anonymous"> </script>

        <!-- custom css file link -->
        <link href = "All-styles.css" rel = "stylesheet">

    </head>

    <body>

        <!-- Header section -->        
        <header>
            <nav class = "navbar navbar-expand-md container navbar-dark fixed-top">
                <div class = "container">
                    
                    <a class = "navbar-brand" href = "https://pigeon.great-site.net/index.php">
                        <img src = "Images/Common/logo.png" class = "logo">
                    </a>
                    
                    <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#collapsibleNavbar">
                        <span class = "navbar-toggler-icon"> </span>
                    </button>
                    
                    <div class = "collapse navbar-collapse" id = "collapsibleNavbar">
                        <ul class = "navbar-nav ms-auto m-1 navbar_list text-center">
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/index.php"> <i class = "fa-solid fa-house"> </i> </i> Home </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/Packages.php"> <i class = "fa-solid fa-person-walking-luggage"> </i> Packages </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/Booking.php"> <i class = "fa-solid fa-handshake-simple"> </i> Booking </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/Gallery.php"> <i class = "fa-regular fa-image"> </i> Gallery </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/Contact.php"> <i class = "fa-solid fa-phone-volume"> </i> Contact </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "https://pigeon.great-site.net/About.php"> <i class = "fa-regular fa-address-card"> </i> About </a>
                            </li>
                        
                        </ul>
                    </div>
                
                </div>
            </nav>        
        </header>

        <!-- Underground section -->
        <section class = "underground"> </section>



<?php


//Starts extracting data from the Booking form to variables of this PHP file.

//$Variable_Name = $_POST['Feald_name_of_the_booking_form'];

$NIC = $_POST['P'];
$Name = $_POST['N'];
$Email = $_POST['E'];
$Phone = $_POST['PN'];
$Address = $_POST['A'];
$Package = $_POST['Pack'];
$Adults = $_POST['Adults'];
$Children = $_POST['Children'];
$Veg = $_POST['Veg'];
$SDate = $_POST['Date'];
$Other = $_POST['Other'];

//Finished extracting data from the Booking form to variables of this PHP file.


//Starts establishing database connection.


//$con = mysqli_connect('MySQL_Hostname','Username','Password','Database_Name');

$con = mysqli_connect('sql308.epizy.com','epiz_33077060','htTrDJHWScdIsp','epiz_33077060_pigeondb');

//Finished establishing database connection.


//Starts checking database connection.

//! = Not
//$con = Connect

if (!$con)
{
	//Error with database connection.

	echo'<section class = "container"><div class="alert alert-danger" role="alert">
            <p class ="para"><strong>Something Wrong with database !</strong>
            <br>Try again latter.
            </p>
            </div></section';
}
else
{
	//Database connection sucusful.

	//Starts making the query.

	//$query = "INSERT INTO Table_Name VALUES(DEFAULT,'$Varable_1_im_this_PHP_File','$Varable_2_im_this_PHP_File',...)";

	$query = "INSERT INTO Booking VALUES(DEFAULT,'$NIC','$Name','$Email','$Phone','$Address','$Package',$Adults,'$Children','$veg','$Date','$Other')";

	//Finished making the query.

	//Starts runing the query.

	if (mysqli_query($con,$query))
	{

		//If data stores sucusfully in the database, these lines will execute.

		echo'<section class = "container"><div class="alert alert-success" role="alert">
  			<p class ="para"><strong>Booking Sucusfull !</strong>
  			<br>We will contact you soon.
  			</p>
  			</div></section';
	}
	else
	{

		//If data didn't store in the database, these lines will execuite.

		//echo 'The mesage to display if data storing in the database uncusful.;
		
		echo'<section class = "container"><div class="alert alert-danger" role="alert">
            <p class ="para"><strong>Something Wrong !</strong>
            <br>Try again latter.
            </p>
            </div></section';
	}

	//Finished runing the query.
}

//Finished checking database connection.

?>


		<!-- Footer section -->
        <footer class = "text-center text-white container footer">

            <div class = "ps-4 pe-4 row justify-content-center mt-5">

                <!-- Social media -->
                <div class = "col-auto">

                    <h5 class = "text-uppercase"> Follow us </h5>

                    <div class = "mb-4 col-auto">

                        <!-- Facebook -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.facebook.com/nsbm.lk/" role = "button" title = "NSBM Oficial Facebook Account">
                            <i class = "fab fa-facebook-f"> </i> 
                        </a>

                        <!-- Instagram -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.instagram.com/nsbmgreenuniversity/" role = "button" title = "NSBM Oficial Instagram Account">
                            <i class = "fab fa-instagram"> </i> 
                        </a>
                        
                        <!-- Twitter -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://twitter.com/nsbm_srilanka" role = "button" title = "NSBM Oficial Twitter Account">
                            <i class = "fab fa-twitter"> </i>
                        </a>

                        <!-- Youtube -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.youtube.com/channel/UCHsodhRyiuri2jD7H7nfsRg" role = "button" title = "NSBM Oficial Youtube Account">
                            <i class = "fab fa-youtube"> </i>
                        </a>

                        <!-- Tiktok -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.tiktok.com/@nsbmgreenuniversity" role = "button" title = "NSBM Oficial Tiktok Account">
                            <i class = "fab fa-tiktok"> </i>
                        </a>

                        <!-- Linkedin -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://lk.linkedin.com/school/nsbmgreenuniversity/" role = "button" title = "NSBM Oficial Linkedin Account">
                            <i class = "fab fa-linkedin-in"> </i>
                        </a>
                        
                        <!-- Github -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://github.com/IEEE-Student-Branch-NSBM" role = "button" title = "NSBM IEEE Student Branch Github Account">
                            <i class = "fab fa-github"> </i>
                        </a>
                    
                    </div>
                                            
                    <div class = "row">

                        <div class = "col-lg-6 mb-lg-3">
                            <img class = "img-fluid" src = "Images/Common/footer-image.jpg">
                        </div>
                            
                        <div class = "col-lg-6">

                            <p class = "mt-3 mb-4"> The first-ever green university in South Asia, is dedicated to providing world-class qualifications to future leaders </p>
                                
                            <ul class = "list-unstyled">

                                <h5 class = "text-uppercase mb-4"> Contact info </h5>

                                <li class = "mb-3">
                                    <a class = "text-white" href = "https://www.nsbm.ac.lk"> NSBM Green University </a>
                                </li>

                                <li class = "mb-3">
                                    <a class = "text-white" href = "https://www.sltda.gov.lk/en"> Sri Lanka Tourism Board </a>
                                </li>

                                <li class = "mb-4">
                                    <a class = "text-white" href = "https://www.bing.com/search?q=google+map+sri+lanka&qs=n&form=QBRE&sp=-1&pq=google+map+sri+lanka&sc=10-20&sk=&cvid=2404E0A1976F41509C614D957CA37887&ghsh=0&ghacc=0&ghpl="> Colombo, Sri Lanka </a>
                                </li>

                                <li>
                                    <a class = "text-white" href = "https://pigeon.great-site.net/TC.php"> Terms of use & Privacy policy </a>
                                </li>

                            </ul>

                        </div>
                        
                    </div>

                </div>
                
                <!-- Copyright -->
                <div class = "text-center p-4 copyright">
                    <i class = "fa-regular fa-copyright"> </i> 2023 Copyright |
                    <a class = "text-white" href = "https://pigeon.great-site.net/?i=1/"> pigeon.great-site.net </a>
                </div>

            </div>

        </footer>

    </body>

</html>
<!DOCTYPE html>
<html lang = "en">

    <head>

        <!-- Meta data -->

        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <mata name = "descrption" content = "Sri Lanka is an island country in South Asia. It lies in the 
        Indian Ocean, southwest of the Bay of Bengal, and southeast of the Arabian Sea; it is separated 
        from the Indian subcontinent by the Gulf of Mannar and the Palk Strait. Sri Lanka shares a 
        maritime border with India and the Maldives.">
        <meta name = "keywords" content = "Pigeon, Sri Lanka">
        <meta name = "author" content = "NSBM Green University Pigeon group">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <!-- Web page title -->
        <title> Home - Pigeon </title>

        <!-- favicon of the site -->
        <link rel = "icon" type = "image/png" href = "favicon.gif">

        <!-- Boostrap link for css -->
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel = 
        "stylesheet">

        <!-- Boostrap link for js -->
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> 
        </script>

        <!-- Fontawesome link -->
        <script src = "https://kit.fontawesome.com/4e15aa74c6.js" crossorigin = "anonymous"> </script>

        <!-- custom css file link -->
        <link href = "All-styles.css" rel = "stylesheet">

    </head>

    <body class = "body">

        <!-- Header section -->        
        <header>
            <nav class = "navbar navbar-expand-md container navbar-dark fixed-top">
                <div class = "container">
                    
                    <a class = "navbar-brand" href = "index.php">
                        <img src = "Images/Common/logo.png" class = "logo">
                    </a>
                    
                    <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#collapsibleNavbar">
                        <span class = "navbar-toggler-icon"> </span>
                    </button>
                    
                    <div class = "collapse navbar-collapse" id = "collapsibleNavbar">
                        <ul class = "navbar-nav ms-auto m-1 navbar_list text-center">
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "index.php"> <i class = "fa-solid fa-house"> </i> </i> Home </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Packages.php"> <i class = "fa-solid fa-person-walking-luggage"> </i> Packages </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Booking.php"> <i class = "fa-solid fa-handshake-simple"> </i> Booking </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Gallery.php"> <i class = "fa-regular fa-image"> </i> Gallery </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Contact.php"> <i class = "fa-solid fa-phone-volume"> </i> Contact </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "About.php"> <i class = "fa-regular fa-address-card"> </i> About </a>
                            </li>
                        
                        </ul>
                    </div>
                
                </div>
            </nav>        
        </header>

        <!-- Underground section -->
        <section class = "underground"> </section>










        <!-- Hero section -->
        <section class = "container">
            <div class = "container hero_container mb-5">

                <!-- Carousel -->
                <div class = "carousel slide" id = "demo" data-bs-ride = "carousel">
                    
                    <!-- Indicators / dots -->
                    <div class = "carousel-indicators">

                        <button type = "button" data-bs-target = "#demo" data-bs-slide-to = "0" class = "active"> </button>

                        <button type = "button" data-bs-target = "#demo" data-bs-slide-to = "1"> </button>

                        <button type = "button" data-bs-target = "#demo" data-bs-slide-to = "2"> </button>

                        <button type = "button" data-bs-target = "#demo" data-bs-slide-to = "3"> </button>

                    </div>
                    
                    <!-- Slides -->
                    <div class = "carousel-inner">

                        <div class = "carousel-item active">
                            <img class = "img-fluid w-100" src = "Images/Home/slideshow-1.jpg">
                        </div>

                        <div class = "carousel-item">
                            <img class = "img-fluid w-100" src = "Images/Home/slideshow-2.jpg">
                        </div>

                        <div class = "carousel-item">
                            <img class = "img-fluid w-100" src = "Images/Home/slideshow-3.jpg">
                        </div>

                        <div class = "carousel-item">
                            <img class = "img-fluid w-100" src = "Images/Home/slideshow-5.jpg">
                        </div>

                    </div>
                    
                    <!-- Left and right controlers / icons -->

                    <button class = "carousel-control-prev" type = "button" data-bs-target = "#demo" data-bs-slide = "prev">
                        <span class = "carousel-control-prev-icon"> </span>
                    </button>

                    <button class = "carousel-control-next" type = "button" data-bs-target = "#demo" data-bs-slide = "next">
                        <span class = "carousel-control-next-icon"> </span>
                    </button>

                </div>

                <div class = "hero_text"> 
                    <h1 class = "text-uppercase text-dark display-3"> Welcome to Sri lanka </h1>
                </div>
            
            </div>
        </section>








        

        <!-- Pachages section -->
        <section class = "container">
            <div class = "justify-content-center">

                <div class = "mb-4">
                    <h2 class = "text-center text-white display-4"> Choose a location and get your package </h2>
                </div>

                <div class = "row justify-content-center">

                    <a class = "btn col-md-6" href = "Packages.php#galle_mathara">
                        <div class = "p-3">
                            
                            <div class = "text-center text-white"> 
                                <h4> Galle / Mathara </h4> 
                            </div>

                            <div>
                                <img class = "img-fluid" src = "Images/Home/Galle-Matara_Galle-Fort.jpg">
                            </div>
                        
                        </div> 
                    </a>

                    <a class = "btn col-md-6" href = "Packages.php#ella_nuwara-eliya">
                        <div class = "p-3">
                            
                            <div class = "text-center text-white">
                                <h4> Ella / Nuwara-eliya </h4>
                            </div>
                            
                            <div>
                                <img class = "img-fluid" src = "Images/Home/Nuwara-Eliya-Hotels.jpg">
                            </div>
                        
                        </div> 
                    </a>

                </div>

                <div class = "row justify-content-center">

                    <a class = "btn col-md-6" href = "Packages.php#kandy_matale">
                        <div class = "p-3">
                            
                            <div class = "text-center text-white">
                                <h4> Kandy / Matale </h4>
                            </div>
                            
                            <div>
                                <img class = "img-fluid" src = "Images/Home/Kandy_Ceylon-Tea-Museum.jpg">
                            </div>
                        
                        </div> 
                    </a>

                    <a class = "btn col-md-6" href = "Packages.php#trincomalee">
                        <div class = "p-3">
                            
                            <div class = "text-center text-white">
                                <h4> Trincomalee </h4>
                            </div>
                            
                            <div>
                                <img class = "img-fluid" src = "Images/Home/Trinco_Nilaveli-Beach.jpeg">
                            </div>
                        
                        </div> 
                    </a>

                </div>

            </div>
        </section>




        





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
                                    <a class = "text-white" href = "TC.php"> Terms of use & Privacy policy </a>
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
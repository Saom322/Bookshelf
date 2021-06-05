<!DOCTYPE html>
<html lang="zxx">
<style>
.layout-v3 .welcome-section .welcome-image2 {
  background-image: url(images/offer2.jpg);
}
.welcome-section .welcome-image2 {
  background-image: url(images/offer2.jpg);
  background-position: center top;
  background-repeat: no-repeat;
  background-size: cover;
  height: 50%;
  min-height: 720px;
  position: absolute;
  right: 0;
  top: 0;
  width: 48%;
  z-index: -1;
}
@media (max-width: 991px) {
  .welcome-section .welcome-image2 {
    position: relative;
    width: 100%;
  }
}
@media (max-width: 991px) {
  .welcome-section .welcome-image2 {
    display: none;
  }
}
</style>>
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>..:: Bookshelf ::..</title>
        
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="/home">
                                                <img src="/images/libraria-logo-v1.png" alt="BookShelf" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+02-981-1111</a>
                                                <span>/</span>
                                                <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@bookshelf.com</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                
                                                
                                                <div class="header-cart dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/home">Home</a>
                                           
                                        </li>
                                       
                                                <li><a href="/gview">Books Grid View </a></li>
                                            
                                        <li><a href="/service">Reviews</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="/home">Home</a>
                                       
                                    </li>
                                    <li>
                                        <a href="/gview">Books &amp; Media</a>
                                        
                                    </li>
                                   
                                    <li><a href="/services">Reviews</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="/images/books.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Welcome to BookShelf</h3>
                            <h2>Find your Passion for Reading</h2>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="/images/library3.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Meet with like-minded people</h3>
                            <h2>Fiction Reveals Truths that Reality Obscures</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->
        
        <!-- Start: Search Section -->
        <section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <h3>What are you looking for ?</h3>
                    <form name="signup" action="searchbook" method="POST"  onsubmit="required()">
                         @csrf  <!-- <div class="col-md-10 col-sm-6"> -->
 
		<input type="text" name="Name" placeholder="Search By Book Name" size="100" height="50"/>
		<button type="submit">Search</button>
	</form>

                           <!--  <div class="form-group">
                                @csrf
                                <label class="sr-only" for="keywords">Search by Bookname</label>
                                <input class="form-control" placeholder="Search by Bookname" id="keywords" name="Name" type="text">
                            </div> -->
                        </div>
                       <!--  <div class="col-md-10 col-sm-6">
                            <div class="form-group">
                                <select name="catalog" id="catalog" class="form-control">
                                
                                    <option>Search the Catalog</option>
                                    <option>Catalog 01</option>
                                    <option>Catalog 02</option>
                                    <option>Catalog 03</option>
                                    <option>Catalog 04</option>
                                    <option>Catalog 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <select name="category" id="category" class="form-control">
                                    <option>All Categories</option>
                                    <option>Category 01</option>
                                    <option>Category 02</option>
                                    <option>Category 03</option>
                                    <option>Category 04</option>
                                    <option>Category 05</option>
                                </select>
                            </div>
                        </div> -->
                       <!--  <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="submit" value="Search">
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Share your Collection to Build and Grow</h2>
                                <span class="underline left"></span>
                                <p class="lead">Share and Grow.</p>
                                <p>Bookshelf is a endeavour which appreciates readers to offer their collection as well.
                                It will only help building a vast community of readers who shares same passion for reading .
                                By sharing and lending books a huge amount will be introduced to share and gathering knowledge.
                                By having offered book other enthusiasts could help into building a community.</p>
                                <a class="btn btn-primary" href="/offer">Offer Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image2"></div>
        </section>
        <!-- End: Welcome Section -->
        
        <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Check Out Our Most Popular Books</h2>
                            <span class="underline center"></span>
                            <p class="lead">These books are selected through our readers and doners.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <li class="category-item adults">
                        <figure>
                            <img src="images/category-filter-img-01.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Sonic Boom</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                  
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <a href="/sonicboom">Read More <i class="fa fa-long-arrow-right"></i></a>
                                
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="images/category-filter-img-02.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                   
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    <a href="greatgatsby">Read More <i class="fa fa-long-arrow-right"></i></a>
                                  
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item video">
                        <figure>
                            <img src="images/category-filter-img-03.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Missing Piece</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="missingpiece">Read More <i class="fa fa-long-arrow-right"></i></a>
    
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item audio">
                        <figure>
                            <img src="images/category-filter-img-04.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item books">
                        <figure>
                            <img src="images/category-filter-img-05.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                   
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                   
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item magazines">
                        <figure>
                            <img src="images/category-filter-img-06.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>E-commarce Magazine</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item adults">
                        <figure>
                            <img src="images/category-filter-img-07.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                   
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="images/category-filter-img-08.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <div class="center-content">
                    <a href="/gview" class="btn btn-primary">View More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        
               <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Bookshelf</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                   Bookshelf is a endeavour of four book-lovers as well as reading enthusiasts who welcomes all people
                                   who love to read books and explore. It is a sharing platform for those who wants to read and share 
                                   their knowledge and reviews regarding books including offers their books physically to help other people who shares the same passion for reading.Developers of this site are four new to web development world CSE students of Jagangirnagar University
                                </div>
                    
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Find us at:</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>CSE Dept, Jahangirnagar University, Savar, Dhaka</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">support.bookshelf@gmail.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+88 017 2342 2345</a></span>
                                    </div>
                                </address>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
       
                    </div>
                </div>                
            </div>
            
        </footer>
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <script>
            function required()
            {
                var e=document.forms["signup"]["Name"].value;
                if(e=="")
                {
                    alert("Please Enter a Book Name");
                    return false;
                }
                else
                return true;
            }
        </script>
        
        
    </body>


</html>
<!doctype html>
<html lang="en">

<head>
    <title>Blog Details Right Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                        <!-- end input-group -->
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end form-center -->
        </div>
        <!-- end overlay-content -->
    </div>
    <!-- end overlay -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>Passerellesnum??riques Viet Nam</li>
                            <li><span><i class="fa fa-phone"></i></span>+03 964 988 91</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="login.php" id="thanh1"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.php" id="thanh2"><span><i class="fa fa-plus"></i></span>Sign up</a></li>
                            <li><a href="logout.php" id="thanh3"><span><i class="fa fa-sign-out"></i></span>Logout</a></li>
                            <li><a href="cart.php" id="thanh4"><span><i class="fa fa-shopping-cart"></i></span>Cart</a>
                            <li>
                                <form>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="form-group currency">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                         <option value="">$</option>
                                                         <option value="">??</option>
                                                         <option value="">??</option>
                                                     </select>
                                            </div>
                                            <!-- end form-group -->
                                        </li>

                                        <li>
                                            <div class="form-group language">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                         <option value="">EN</option>
                                                         <option value="">VI</option>
                                                         <option value="">FR</option>
                                                     </select>
                                            </div>
                                            <!-- end form-group -->
                                        </li>
                                        <li>
                                            <a id="ten"><span><i class="fa fa-circle blackiconcolor"></i></span>
                                                <?php
                                                include('login_set.php');
                                                $ten = new user();
                                                $rows = $ten->fetch();
                                                if (!empty($rows)) {
                                                    foreach ($rows as $row) {
                                                        $name = $row['activity_name'];
                                                    }
                                                    echo $name;
                                                }
                                                ?></a>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- end links -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->
    <script type="text/javascript">
        function inten() {
            document.getElementById("ten").style.display = "block";
            document.getElementById("thanh3").style.display = "block";
            document.getElementById("thanh4").style.display = "block";
            document.getElementById("thanh1").style.display = "none";
            document.getElementById("thanh2").style.display = "none";
        }
        <?php
        $rows = $ten->fetch();
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $name = $row['activity_name'];
            }
            echo "inten();";
        }
        ?>
    </script>
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>                        
                     </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="index.php" class="navbar-brand"><span><i class="fa fa-plane"></i>START</span>TRAVELS</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.php">Main Homepage</a></li>
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                            <li><a href="cruise-homepage.php">Harzadous Sports Tour Homepage</a></li>
                            <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Login Homepage</a></li>
                            <li><a href="registration.php">Registration Homepage</a></li>
                            <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="coming-soon.php">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Tour Homepage</a></li>
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            <li><a href="holidays.php">Holidays</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                            <li><a href="before-you-fly.php">Before You Fly</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                            <li><a href="holidays.php">Holidays</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Standard <span>Pages</span></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="blog-listing-right-sidebar.php">Blog Listing Right Sidebar</a></li>
                                            <li><a href="blog-detail-right-sidebar.php">Blog Detail Right Sidebar</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">User <span>Dashboard</span></li>
                                            <li><a href="error-page.php">Dashboard</a></li>
                                            <li><a href="error-page.php">User Profile</a></li>
                                            <li><a href="error-page.php">Booking</a></li>
                                            <li><a href="error-page.php">Wishlist</a></li>
                                            <li><a href="error-page.php">Cards</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Special <span>Pages</span></li>
                                            <li><a href="logout.php">Login</a></li>
                                            <li><a href="registration.php">Registration</a></li>
                                            <li><a href="forgot-password.php">Forgot Password</a></li>
                                            <li><a href="error-page.php">404 Page</a></li>
                                            <li><a href="coming-soon.php">Coming Soon</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Extra <span>Pages</span></li>
                                            <li><a href="before-you-fly.php">Before Fly</a></li>
                                            <li><a href="travel-insurance.php">Travel Insurance</a></li>
                                            <li><a href="holidays.php">Holidays</a></li>
                                            <li><a href="thank-you.php">Thank You</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>
            <!-- end navbar collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <!-- end close-btn -->

                <div class="list-group panel">

                    <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="index.php" class="list-group-item active">Main Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Harzadous Sports Tour Homepage</a>
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                    </div>
                    <!-- end sub-menu -->
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="logout.php" class="list-group-item">Login Homepage</a>
                        <a href="registration.php" class="list-group-item">Registration Homepage</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                        <a href="coming-soon.php" class="list-group-item">Comingsoon</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cars-links">
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Listing Right Sidebar</a>
                        <a href="blog-detail-right-sidebar.php" class="list-group-item">Blog Detail Right Sidebar</a>
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                        <a href="error-page.php" class="list-group-item">Dashboard</a>
                        <a href="error-page.php" class="list-group-item">User Profile</a>
                        <a href="error-page.php" class="list-group-item">Booking</a>
                        <a href="error-page.php" class="list-group-item">Wishlist</a>
                        <a href="error-page.php" class="list-group-item">Cards</a>

                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                        <a href="logout.php" class="list-group-item">Login</a>
                        <a href="registration.php" class="list-group-item">Registration</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password</a>
                        <a href="error-page.php" class="list-group-item">404 Page</a>
                        <a href="coming-soon.php" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                        <a href="before-you-fly.php" class="list-group-item">Before Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel Insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                        <a href="thank-you.php" class="list-group-item">Thank You</a>
                    </div>
                    <!-- end sub-menu -->
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>
        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->



    <!--================= PAGE-COVER ================-->
    <section class="page-cover" id="cover-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Blog Details Right Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Blog Details Right Sidebar</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="blog-details" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="space-right">

                            <div class="blog-post">
                                <div class="main-img blog-post-img">
                                    <img src="images/141711.jpg" class="img-responsive" alt="blog-post-image" />
                                    <div class="main-mask blog-post-info">
                                        <ul class="list-inline list-unstyled blog-post-info">
                                            <li><span><i class="fa fa-calendar"></i></span>July 30, 2020</li>
                                            <li><span><i class="fa fa-user"></i></span>By: <a href="#">Khang Ha</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end blog-post-img -->

                                <div class="blog-post-detail">
                                    <h2 class="blog-post-title">The cherry blossoms in Dalat bloom.</h2>
                                    <p>Unlike the cherry blossoms (sakura) of Japan, Da Lat cherry apricot (Prunus Cerasoides) has a familiar resemblance to the plum peach but the flower belongs to a single five petals like apricot, so it is called with
                                        the name " Peach Mai "is Cherry Mai. Da Lat cherry blossoms are a unique feature of this mountain town, living only at an altitude of over 1000 m above sea level, so it is impossible to "swap the concept" of Japanese
                                        cherry blossoms, northern cherry blossoms. apricot flowers in Vung Tau. Clarifying the concept of this flower will help you feel better about the beauty of Da Lat cherry blossoms!</p>
                                    <p>Traveling to Dalat in January, you will see new cherry blossoms blooming in some places such as the road to Hoan My hospital, Sunshine coffee, Tran Hung Dao roundabout, Truong Cong Dinh slope, the road to Tuyen Lam
                                        lake. Cherry plum blossoms will bloom from mid-January to mid-February, so note the beautiful ways to photograph these flowers are Tran Hung Dao, Trieu Viet Vuong, the way to Trai Mat, Truong Cong Dinh, shore Xuan
                                        Huong Lake, specialized school Thang Long or Phan Chu Trinh Junior High School (for school, you should come on a holiday and have to ask permission to protect you first). But in general, in the blooming season,
                                        almost every street in Dalat will not lack this flower's silhouette.</p>
                                    <p>The most beautiful at this moment is the cherry apricot tree next to Sunshine Coffee (No. 9 Tran Hung Dao) - where you can sit and watch the whole city in the windy space. After that, the most beautiful Cherry Mai streets
                                        in Da Lat that I listed above will be destinations that cannot be missed this spring. These flowers are best when blooming together on a road, capturing the brilliant spring sky and a great background for any photo
                                        set. Streets like Tran Hung Dao, Trieu Viet Vuong or Trai Mat are chosen by many couples to take wedding photos in spring!</p>
                                </div>
                                <!-- end blog-post-detail -->
                            </div>
                            <!-- end blog-post -->

                            <div id="comments">

                                <div class="comment-block">
                                    <div class="user-img">
                                        <img src="images/IMG_6909.jpg" class="img-responsive" alt="user-img" />
                                    </div>
                                    <!-- end user-img -->

                                    <div class="user-text">
                                        <ul class="list-inline list-unstyled">
                                            <li class="user-name">Khang Ha</li>
                                            <li class="date">27 May, 2020</li>
                                        </ul>
                                        <p>When you want to take a photo with, you should stand in the middle of the blooming flower tree so that you can stand out from the brilliant pink. If you want a set of beautiful "virtual life" photos with spring
                                            flowers, you will "set up a contract" with your friends to come to Dalat right away!</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                    </div>
                                    <!-- end user-text -->

                                    <div class="comment-block reply-block">
                                        <div class="user-img">
                                            <img src="images/IMG_6916.jpg" class="img-responsive" alt="user-img" />
                                        </div>
                                        <!-- end user-img -->

                                        <div class="user-text">
                                            <ul class="list-inline list-unstyled">
                                                <li class="user-name">Jhon Smith</li>
                                                <li class="date">27 May, 2017</li>
                                            </ul>
                                            <p>Save immediately the most beautiful paths of Da Lat cherry blossoms in 2021: Doc Da Quy, Cau Dat Tea Hill, Tran Hung Dao Street, Tran Quy Cap Street, Tuyen Lam Lake, Ho Xuan Huong, K'Long K'Lanh , Dalat University,
                                                Lac Duong Town ...</p>
                                            <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                        </div>
                                        <!-- end user-text -->
                                    </div>
                                    <!-- end reply-block -->
                                </div>
                                <!-- end comment-block -->

                                <div class="comment-block">
                                    <div class="user-img">
                                        <img src="images/IMG_6916.jpg" class="img-responsive" alt="user-img" />
                                    </div>
                                    <!-- end user-img -->

                                    <div class="user-text">
                                        <ul class="list-inline list-unstyled">
                                            <li class="user-name">Jhon Smith</li>
                                            <li class="date">27 May, 2017</li>
                                        </ul>
                                        <p>You may have heard a lot about sunflowers, triangles, mustard greens, lavender, ... in the flower city of Dalat, but I am sure that cherry blossoms are the only feature of this flower land. .</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                    </div>
                                    <!-- end user-text -->
                                </div>
                                <!-- end comment-block -->

                                <div class="comment-block">
                                    <div class="user-img">
                                        <img src="images/IMG_6949.jpg" class="img-responsive" alt="user-img" />
                                    </div>
                                    <!-- end user-img -->

                                    <div class="user-text">
                                        <ul class="list-inline list-unstyled">
                                            <li class="user-name">Jhon Smith</li>
                                            <li class="date">27 May, 2017</li>
                                        </ul>
                                        <p>Do not hesitate to travel to Dalat this January to experience the spring-filled atmosphere, to have more new feelings about this place! Quickly carry your backpack and go!</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                    </div>
                                    <!-- end user-text -->
                                </div>
                                <!-- end comment-block -->

                            </div>
                            <!-- end comments -->

                            <div id="comment-form">
                                <div class="innerpage-heading">
                                    <h1>Add Comment</h1>
                                </div>
                                <!-- end innerpage-heading -->

                                <form>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input input-lg" placeholder="Your Name" required/>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control input input-lg" placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <!-- end columns -->
                                    </div>
                                    <!-- end row -->

                                    <div class="form-group">
                                        <textarea class="form-control input-lg" rows="5" placeholder="Your Message"></textarea>
                                    </div>

                                    <button class="btn btn-orange">Submit</button>
                                </form>
                            </div>
                            <!-- end comment-form -->

                        </div>
                        <!-- end space-right -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/ve-dep-viet-nam-vnexpress-2-1584434502.jpg" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div>
                                                <!-- end ad-text -->
                                            </div>
                                            <!-- end columns -->
                                        </a>
                                    </div>
                                    <!-- end ad-img -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block instagram">
                                    <h2 class="side-bar-heading">Instagram</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li>
                                            <a href="#"><img src="images/hoa1.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa2.jpg" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa3.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa4.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa5.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa6.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa7.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa8.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/hoa9.jfif" class="img-responsive" alt="insta-img" /></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block contact">
                                    <h2 class="side-bar-heading">Contact Us</h2>
                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                        <div class="text">
                                            <p>hamongkhang@gmail.com</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                        <div class="text">
                                            <p>039 649 8891</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                        <div class="text">
                                            <p>Street No: To Hien Thanh, Son Tra, Da Nang, Viet Nam </p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block recent-post">
                                    <h2 class="side-bar-heading">Recent Post</h2>

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/727e5ea10a3f1852dcbdb06b3733cb7f.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2020</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/t???i xu???ng (1).jfif" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2020</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-right-sidebar.php"><img src="images/t???i xu???ng (1).jfif" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div>
                                        <!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-right-sidebar.php">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2020</span>
                                        </div>
                                        <!-- end recent-text -->
                                    </div>
                                    <!-- end recent-block -->

                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block follow-us">
                                    <h2 class="side-bar-heading">Follow Us</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="https://www.facebook.com"><span><i class="fa fa-facebook"></i></span></a></li>
                                        <li><a href="https://www.twitter.com"><span><i class="fa fa-twitter"></i></span></a></li>
                                        <li><a href="https://istagram.com"><span><i class="fa fa-linkedin"></i></span></a></li>
                                        <li><a href="https://www.google.com"><span><i class="fa fa-google-plus"></i></span></a></li>
                                        <li><a href="https://pinterest.com"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block tags">
                                    <h2 class="side-bar-heading">Tags</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#" class="btn btn-g-border">SPA</a></li>
                                        <li><a href="#" class="btn btn-g-border">Restaurant</a></li>
                                        <li><a href="#" class="btn btn-g-border">Searvices</a></li>
                                        <li><a href="#" class="btn btn-g-border">Wifi</a></li>
                                        <li><a href="#" class="btn btn-g-border">Tv</a></li>
                                        <li><a href="#" class="btn btn-g-border">Rooms</a></li>
                                        <li><a href="#" class="btn btn-g-border">Pools</a></li>
                                        <li><a href="#" class="btn btn-g-border">Work</a></li>
                                        <li><a href="#" class="btn btn-g-border">Sports</a></li>
                                    </ul>
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end blog-postings -->
    </section>
    <!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Our website brings you the best experiences and services with the most standard price. Our services are approved a resolution by Vietnam Travel Branch.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>All your personal informations, supported informations will be kept and secured in the best way. Only you and administrators can know. Your informations never have leaked out and lost.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>We have related to the best Travel agency in Vietnam. Supported and admitted by many branches, we have been improving and broading our activities.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>All your questions will be replied by administrators and they will help you. We're always side by side and help you about any problems.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>Passerellesnum??riques Viet Nam</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 964 988 91</li>
                            <li><span><i class="fa fa-envelope"></i></span>hamongkhang@gmail.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">COMPANY</h3>
                        <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                            <li><a href="cruise-homepage.php">Flight</a></li>
                            <li><a href="cruise-homepage.php">Hotel</a></li>
                            <li><a href="cruise-homepage.php">Tours</a></li>
                            <li><a href="cruise-homepage.php">Cruise</a></li>
                            <li><a href="cruise-homepage.php">Cars</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="blog-listing-right-sidebar.php">Blogs</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="logout.php">Login</a></li>
                            <li><a href="registration.php">Register</a></li>
                            <li><a href="index.php">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>We will bring you the journeys, the greatest experiences in your life. Your happiness and satisfaction are a motive power that impulse us to develop and improve. Thanks for your confidence and interaction. Hope you have a fantastic
                            journeys!!
                        </p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="https://twitter.com/"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="https://google.com/"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="https://pinterest.com/"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="https://instagram.com/"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="https://linkedin.com/"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="https://youtube.com/"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>?? 2021 <a href="index.php">StartTravel</a>. All rights reserved.</p>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="index.php">Terms & Condition</a></li>
                            <li><a href="index.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->

    </section>
    <!-- end footer -->
    </section>
    <!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/login.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>
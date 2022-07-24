
<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'order1';
    
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

$num_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; // use for index
$year = date('Y'); // use for index

function template_footer() {
$year = date('Y');
echo <<<EOT
<div class = "footer bg-dark">
    <div class = "container bg-dark pt-5">
        <div class = "row">
            <div class = "col-xl-4 col-lg-3 col-md-6 col-sm-12 text-white">
                <div class = "content">
                    <a href = "#" class = "logo" data-aos = "slide-right">
                        <i class = "bx bxs-medal bx-tada main-color"></i>
                        Tuy<span class = "main-color">e</span>nThai
                    </a>
                    <p data-aos = "slide-right">Nếu bạn đang tìm một nhà hàng ngon và giả cả hợp lí lại còn được phục vụ tận tình. Hãy đến với chúng tôi nhà hàng Tuyên Thái luôn đón chờ quý khách đến nhà hàng của chúng tôi. Nhà hàng có đội ngũ đầu bếp chuyên nghiệp sẵn sàng phục vụ quý khách. Nhà hàng Tuyên Thái sẽ đưa khách hàng tới trải nghiệm ẩm thực tuyệt vời.</p>
                    
                </div>
            </div>
            <div class = "col-xl-8 col-lg-9 col-md-6 col-sm-12 pl-0 text-white">
                <div class = "row">
                    <div class = "col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class = "content">
                            <p><b>TuyenThai</b></p>
                            <ul class = "footer-menu">
                                <li><a href = "#">About Us</a></li>
                                <li><a href = "#">My profile</a></li>
                                <li><a href = "#">Pricing plans</a></li>
                                <li><a href = "#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class = "content">
                            <p><b>Browse</b></p>
                            <ul class = "footer-menu">
                                <li><a href = "#">About Us</a></li>
                                <li><a href = "#">My profile</a></li>
                                <li><a href = "#">Pricing plans</a></li>
                                <li><a href = "#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class = "content">
                            <p><b>Browse</b></p>
                            <ul class = "footer-menu">
                                <li><a href = "#">About Us</a></li>
                                <li><a href = "#">My profile</a></li>
                                <li><a href = "#">Pricing plans</a></li>
                                <li><a href = "#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class = "content">
                            <p><b>Download App</b></p>
                            <ul class = "footer-menu">
                                <li><a href = "#"><img src = "./images/google-play.png"></a></li>
                                <li><a href = "#"><img src = "./images/app-store.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style = "color: white; width: 100%;">
        <div class = "row copyright">
            <div class = "col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 text-white pt-3 pb-3">
                <p><a href = "#" style = "color: white; font-size: 18px;">© $year Copyright:</a>
                    <span style = "font-weight: 600"><a href = "#" style = "color: palegreen">Hehe</a></span>
                    &nbsp;All Reserved
                </p>
            </div>
            <div class = "col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 icon-head text-white pt-3 pb-3">
                <a href = "#"><span class = "social-item"><i class = "fa fa-facebook"></i></span></a>
                <a href = "#"><span class = "social-item"><i class = "fa fa-twitter"></i></span></a>
                <a href = "#"><span class = "social-item"><i class = "fa fa-google"></i></span></a>
                <a href = "#"><span class = "social-item"><i class = "fa fa-instagram"></i></span></a>
            </div>
        </div>
    </div>
</div>
EOT;
}
function template_navbar() {
$num_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<div class = "nav-wrapper" id = "navbar_top">
    <div class = "container1">
        <div class = "nav">
            <a href = "home.php" class = "logo">
                <i class='bx bxs-medal bx-tada' ></i>Tuy<span class = "main-color">e</span>nThai
            </a>
            <div class = "responsive">
                <ul class = "nav-menu" id = "nav-menu">
                    <li><a href = "home.php">Home</a></li>
                    <li><a href = "#gallery">Our Food</a></li>
                    <li><a href = "#">About Us</a></li>
                    <!--<li><a href = "#">FAQ</a></li>-->
                    <li><a href = "#">FAQ</a></li>
                    <li>
                        <a href = "users/main_profile.php?page=login" class = "btn btn-hover">
                            <span>Sign in</span>
                        </a>
                    </li>
                </ul>
                <!-- shopping cart-->
                <!---->
                <a href = "home.php?page=cart" class = "cart">
                    <i class='bx bx-shopping-bag'></i>
                    <span style = "font-size: 20px;">$num_in_cart</span>  
                </a>
                <!---->
            
                <!-- MObile MENU TOGGLE-->
                <div class = "hamburger-menu" id = "hamburger-menu">
                    <div class="hamburger">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
EOT;
}
?>
<?php
include "dbconfig.php";
if(isset($_GET["c"])){
    $catId = $_GET["c"];
}else{
    echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "assets/mcom/assets/inc/stylesheetadd.php";
    ?>

    <title>Soft Domain Host</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2018</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<?php
include "assets/mcom/assets/inc/header.php";
?>
<div class="row">
    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="container">
                <!-- Product -->
                <?php
                $sql = "SELECT p.id as pid, p.*, imagePaths.*,productCategory.* FROM ((products as p INNER JOIN imagePaths on (p.imagePathsID = imagePaths.id)) INNER JOIN productCategory on (p.categoryID = productCategory.id)) where productCategory.id='$catId'";
                $run = $conn->prepare($sql);
                $run->execute();

                if($run->rowCount() > 0) {
                    while ($row = $run->fetch(PDO::FETCH_ASSOC)) {
                        $title = $row["productName"];
                        $price = $row["price"];
                        $description = $row["description"];
                        $quantity = $row["inStockQuantity"];
                        $image1 = $row["path1"];
                        $category = $row["categoryName"];
                        $pid = $row["pid"];


                        echo '
                        <div class="col-md-3">
                            <a href="details.php?p=' . $pid . '">
                                <div class="left-block">
                                    <img class="img-responsive" alt="product" src="assets/img/products/' . $image1 . '" />
                                     
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">' . $title . '</h5>
                                    <div class="content_price">
                                        <span class="price product-price">Rp ' . $price . '</span>
                                    </div> 
                                </div>
                            </a>
                        </div>
                        ';
                    }
                }
                ?>

                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>



<!-- Footer -->
<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img src="assets/data/introduce-logo.png" alt="" /></a>
                        <div id="address-list">
                            <div class="tit-name">Address:</div>
                            <div class="tit-contain">Perempatan Mampang no 69, Pancoran Jaksel, Lt agung, Jakarta.</div>
                            <div class="tit-name">Email:ahmdfaris275@gmail.com</div>
                            <br>
                            <div class="tit-name">Phone:081387736881</div>
                        </div>   
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">Support</div>
                        <ul id = "introduce-support"  class="introduce-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Newsletter</div>
                    <div class="input-group" id="mail-box">
                        <input type="text" placeholder="Your Email Address"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                    </div><!-- /input-group -->
                    <div class="introduce-title">Let's Socialize</div>
                    <div class="social-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <!-- #trademark-box -->
        <div id="trademark-box" class="row">
            <div class="col-sm-12">
                <ul id="trademark-list">
                    <li id="payment-methods">Accepted Payment Methods</li>
                    <li>
                            <a href="#"><img src="assets/mcom/assets/data/bitcoin.jpg"  alt="image" height="80" width="80"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/mcom/assets/data/btn.jpg"      alt="image" height="80" width="80"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/mcom/assets/data/qris.jpg"     alt="image" height="80" width="80"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/mcom/assets/data/bca.jpg"      alt="image" height="80" width="80"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/mcom/assets/data/dana.jpg"     alt="image" height="80" width="80"/></a>
                        </li>               
                </ul>
            </div>
        </div> <!-- /#trademark-box -->

        <!-- #trademark-text-box -->
        <div id="footer-menu-box">
            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#" >Company Info - Partnerships</a></li>
                </ul>
            </div>
            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#" >Online Shopping</a></li>
                    <li><a href="#" >Promotions</a></li>
                    <li><a href="#" >My Orders</a></li>
                    <li><a href="#" >Help</a></li>
                    <li><a href="#" >Site Map</a></li>
                    <li><a href="#" >Customer Service</a></li>
                    <li><a href="#" >Support</a></li>
                </ul>
            </div>

            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#" >Terms & Conditions</a></li>
                    <li><a href="#" >Policy</a></li>
                    <li><a href="#" >Shipping</a></li>
                    <li><a href="#" >Payments</a></li>
                    <li><a href="#" >Returns</a></li>
                    <li><a href="#" >Refunds</a></li>
                    <li><a href="#" >Warrantee</a></li>
                    <li><a href="#" >FAQ</a></li>
                    <li><a href="#" >Contact</a></li>
                </ul>
            </div>
            <p class="text-center">Copyrights &#169; 2023 softdomainhost.com. All Rights Reserved. Designed by softdomainhost.com</p>
        </div><!-- /#footer-menu-box -->
    </div>
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<?php
include "assets/mcom/assets/inc/addscript.php";
?>


</body>
</html>

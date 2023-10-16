<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Quicksand:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="assets/logo1.png" alt="Just Java Café Logo" class="responsiveLogo">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="#section2">SHOP</a>
                <a class="nav-link" href="#section3">ABOUT US</a>
            </div>
            <div>
                <button class="cartBtn navbar-nav">
                    <i class="fa fa-shopping-bag" aria-hidden="true">
                        <h7 class="itemsCnt">&nbsp; 0 items</h7>
                    </i>
                </button>
            </div>

        </div>
    </nav>
</head>

<body>
    <div class="">

        <div id="section1">
            <div class="row justify-content-center">
                <div class="col">
                    <img src="assets/coffee1.png" alt="Coffee Picture" class="responsiveCoffee1">
                </div>
                <div class="col textHome">
                    <h1>Hello World. </br>Grab a cup of coffee. </h1>
                    <p>Crafted from fresh and high-quality beans that are certified organic and delivered straight to
                        your
                        doorsteps.</p>
                    <a href="#section2"><button class="orderNowBtn">Order Now</button></a>
                </div>
            </div>

        </div>

        <div id="section2">
            <div class="row itemBanner">
                <div class="col titleBanner">
                    <h1 class="title">Menu</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 itemList">
                    <div class="row coffeeMenu">
                        <div class="col">
                            <img src="assets/menu4.png" alt="Coffee1" class="itemListPic">
                        </div>
                        <div class="col">
                            <h4 class="itemTitle">Chocolate Mocha</h4>
                            <p>From $50.00</p>
                            <button class="addToCartBtn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-6 itemList">
                    <div class="row coffeeMenu">
                        <div class="col">
                            <img src="assets/menu4.png" alt="Coffee1" class="itemListPic">
                        </div>
                        <div class="col">
                            <h4 class="itemTitle">Chocolate Mocha</h4>
                            <p>From $50.00</p>
                            <button class="addToCartBtn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 itemList">
                    <div class="row coffeeMenu">
                        <div class="col">
                            <img src="assets/menu4.png" alt="Coffee1" class="itemListPic">
                        </div>
                        <div class="col">
                            <h4 class="itemTitle">Chocolate Mocha</h4>
                            <p>From $50.00</p>
                            <button class="addToCartBtn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-6 itemList">
                    <div class="row coffeeMenu">
                        <div class="col">
                            <img src="assets/menu4.png" alt="Coffee1" class="itemListPic">
                        </div>
                        <div class="col">
                            <h4 class="itemTitle">Chocolate Mocha</h4>
                            <p>From $50.00</p>
                            <button class="addToCartBtn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="section3">
            <div class="row itemBanner">
                <div class="col titleBanner">
                    <h1 class="title">About Us</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <div class="col">

                    <img src="assets/aboutus.png" alt="About Us Picture" class="responsiveCoffee2">
                </div>
                <div class="col textHome">
                    <h2>Just Java Cafe Founders</h2>
                    <p>Crafted from fresh and high-quality beans that are certified organic and delivered straight to
                        your
                        doorsteps.</p>
                    <a href="#section4"><button class="orderNowBtn">Contact Us</button></a>
                </div>
            </div>
        </div>


        <div id="section4">
            <div class="row itemBanner">
                <div class="col titleBanner">
                    <h1 class="title">Contact Us</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <p class="contactUs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <div class="col textHome">
                    <h2>Send us an inquiry</h2>
                    <form action="">
                        <div class="row">
                            <div class="col-3">
                                <p class="fTitle">First Name</p>
                            </div>
                            <div class="col-6">
                                <input type="text" id="fname" name="firstname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="fTitle" class="fTitle">Last Name</p>
                            </div>
                            <div class="col-6">
                                <input type="text" id="lname" name="lastname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="fTitle">Inquiry</p>
                            </div>
                            <div class="col-6">
                                <textarea id="subject" name="subject" rows="4"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="text-align:left;">
                            <div class="col-12">
                                <a href="#"><button class="sendBtn">Send</button></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col textHome">
                    <h2>Location</h2>
                    <p>Crafted from fresh and high-quality beans that are certified organic and delivered straight to
                        your
                        doorsteps.</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123504.1164269252!2d120.97978784550288!3d14.684087284428308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1697388313840!5m2!1sen!2sph"
                        width="250vw" height="250vw" style=" border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
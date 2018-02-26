<!DOCTYPE html>
    <html>
        <head>
            <?php include '../header_footer/header.html' ?>
            <title>Main</title>
        </head>
        <body>
        <?php include '../header_footer/navbar.html' ?>
        <div class="main_bg">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../sources/images/carousel1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../sources/images/carousel2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../sources/images/carousel3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../sources/images/carousel4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../sources/images/carousel5.jpg" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div class="row">
                <div class="card col-12 col-sm-4 col-lg-2 cardMainPage">
                    <img class="card-img-top" alt="logo_loup" src="../sources/images/images1.jpg">
                    <div class="card-body">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card col-12 col-sm-4 col-lg-2 cardMainPage">
                    <img class="card-img-top" alt="logo-lion"  src="../sources/images/images2.jpg">
                    <div class="card-body">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card col-12 col-sm-4 col-lg-2 cardMainPage">
                    <img class="card-img-top" alt="logo_dragon" src="../sources/images/images3.png">
                    <div class="card-body">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

                <div class="card col-12 col-sm-4 col-lg-2 cardMainPage">
                    <img class="card-img-top" alt="logo_cerf" src="../sources/images/images4.png">
                    <div class="card-body">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <?php include 'form.html' ?>
            <?php include '../header_footer/footer.html' ?>
        </div>        
            <?php include '../header_footer/base_js.html' ?>
        </body>
    </html>
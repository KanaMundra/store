<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
   
    <link rel="stylesheet" href="static/styles/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <?php
    include 'components/connect.php';
    ?>
    <style>
        
    </style>
</head>

<body>
    <div class="header mb-5">
        <?php include "components/navbar.php" ?>
    </div>
    <br>
    <div class="container pt-5">
        <div class="product-container ">
            <div class="img">
                <iframe src="https://www.youtube.com/embed/f1XAAII002g?si=e70oYFhLg4mdTtb1" frameborder="0" style="width:100%;height:500px;border-radius: 24px;"></iframe>
                <div class="d-flex container-description">

                    <div class="manual mt-3 px-3">
                        <h2 class="text-center">Installation</h2>
                        <hr class="border border-dark border-1 w-100">
                        <div class="information">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                    </div>
                    <div class="user-module mt-3 px-3">
                        <h2 class="text-center">User Module</h2>
                        <hr class="border border-dark border-1 w-100">
                        <div class="user-module-list">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="details ps-4">
                <div class="head-details">

                    <span class="title fs-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing.
                    </span>
                    <br>

                    <div class="price d-flex align-items-end">
                        <span class="stroked-price fs-5" style="font-family: Telex; color:#9EDB99">
                            <strike>$50</strike>
                        </span>
                        <span class="actprice fs-2 px-2" style="color:#1EDE0D;font-weight: 400;font-family: Telex;">
                            $34
                        </span>
                        <img src="static/images/tummy.png" width="41" height="41" style="border-radius: 50%;" alt="">

                    </div>
                    <hr>
                </div>

                <div class="description">
                    <span class="desc-title h4">
                        Item Details
                    </span>
                    <br>
                    <ul>

                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, repudiandae!</li>
                    </ul>
                </div>
                <div class="button-box d-flex align-items-center justify-content-center flex-column">
                    <button class="product-button mt-4 w-100 fs-5">Buy Now</button>
                    <button class="product-button mt-4 w-100 fs-5">Customize</button>
                </div>

            </div>


        </div>


    </div>

    <div class="footer mt-5">
        <?php include "components/footer.php" ?>
    </div>
</body>

</html>
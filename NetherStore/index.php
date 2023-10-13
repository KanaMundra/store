<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Nether Store - Home</title>
    <link rel="stylesheet" href="static/styles/parallex.css">
    <link rel="stylesheet" href="static/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <?php include "components/navbar.php" ?>
    </div>
    <section id="HomeIndex">
        
        <link rel="stylesheet" href="static/styles/parallex.css">
        <div class="h2-box">
            
            <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" data-bs-interval="2500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="static/images/img1.png" class="d-block" style="height:100vh;min-width:100vw" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="static/images/img2.png" class="d-block" style="height:100vh;min-width:100vw" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="static/images/img3.png" class="d-block" style="height:100vh;min-width:100vw" alt="...">
                    </div>
                    
                </div>
            </div>
        </div>
        <img src="static/images/1.png" alt="" data-speed="-5" class="layer img">
        <img src="static/images/2.png" alt="" data-speed="2" class="layer img">
        <img src="static/images/3.png" alt="" data-speed="6" class="layer img">
        <img src="static/images/4.png" alt="" data-speed="9" class="layer img">
        <img src="static/images/5.png" alt="" data-speed="2" class="layer img">
        <img src="static/images/6.png" alt="" data-speed="-9" class="layer img">
        <img src="static/images/7.png" alt="" data-speed="-5" class="layer img">
        <img src="static/images/8.png" alt="" data-speed="-4" class="layer img">
        <img src="static/images/9.png" alt="" data-speed="-2" class="layer img">
        <img src="static/images/10.png" alt="" data-speed="7" class="layer img">
        <img src="static/images/11.png" alt="" data-speed="3" class="layer img">
        <img src="static/images/12.png" alt="" data-speed="-3" class="layer img">



    </section>


    <div class="footer">
        <?php include "./components/footer.php" ?>
    </div>


    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);

        function parallax(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed');

                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
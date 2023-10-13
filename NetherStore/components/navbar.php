<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="static/styles/navbar.css">
<nav class="navbar navbar-expand-lg bg-dark fixed-top " style="height: 90px;">
    <a class="navbar-brand text-white fw-bolder fs-3 d-flex align-items-center justify-content-top " style="letter-spacing: 3px;" href="../NetherStore/index.php">
        <img src="static/images/parrot.png" alt="Logo" width="30" height="40" class="d-flex align-items-center mx-3 " style="object-fit: cover;">
        Nether Store
    </a>
    <button class="navbar-toggler me-5" style="background: white; outline:none; border:none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark d-flex " tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="static/images/parrot.png" alt="Logo" width="30" height="40" class="d-flex align-items-center mx-3 " style="object-fit: cover;">    
            NetherStore</h5>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav  justify-content-end flex-grow-1 pe-2">
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5  active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="#">About Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="#">Contact Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="../NetherStore/store.php">Store</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="../NetherStore/login.php">Login</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="../NetherStore/signup.php">SignUp</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white fs-5" href="#">User</a>
                </li>

            </ul>

        </div>
    </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<!-- <link rel="stylesheet" href="static/styles/navbar.css">

<nav>
    <div class="hambuger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Store</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Signup</a></li>
    </ul>
</nav> -->
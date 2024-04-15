<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="online training, web development, industrial training">
    <title>ABC Company</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/Coincent_PNG.png" width="170" alt="Company-Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Register</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-section">
        <div class="main-section-2">
            <h1>Welcome to Web Development</h1>
        </div>
    </div>

    <!-- Divide the screen into 2 or more than 2 (without bootstrap) -->
    <div class="main-container">
        <div class="content">
            <img src="images/img1.jpeg" width="100%" alt="box-image">
            <h4>
                <sapn>Web</sapn> Development
            </h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt ullam!
                Dolores magni amet repudiandae.</p>
        </div>
        <div class="content-1">
            <img src="images/img2.jpeg" width="100%" alt="box-image2">
            <h4>Web Development</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt ullam!
                Dolores magni amet repudiandae.</p>
        </div>
        <div class="content-2">
            <img src="images/img3.jpeg" width="100%" alt="box-image3">
            <h4>Web Development</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt ullam!
                Dolores magni amet repudiandae.</p>
        </div>
    </div>

    <!-- Divide screen into 2 more than 2 (by using Bootstrap) -->
    <div class="container">
        <h3>Our Services</h3>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="images/img1.jpeg" width="100%" alt="box-image">
                <h4>
                   Web Development
                </h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                    impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt
                    ullam!
                    Dolores magni amet repudiandae.</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <img src="images/img2.jpeg" width="100%" alt="box-image">
                <h4>
                   Web Development
                </h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                    impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt
                    ullam!
                    Dolores magni amet repudiandae.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/img3.jpeg" width="100%" alt="box-image">
                <h4>
                   Web Development
                </h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias error excepturi aspernatur enim quasi
                    impedit reiciendis cupiditate cumque, quaerat perferendis totam debitis neque, molestiae deserunt
                    ullam!
                    Dolores magni amet repudiandae.</p>
            </div>
        </div>
    </div>
</div>

    <!-- HTML Headings h1 -h6
         -->
    <!-- <div>
        <h1>Heading1</h1>
        <h2>Heading1</h2>
        <h3>Heading1</h3>
        <h4>Heading1</h4>
        <h5>Heading1</h5>
        <h6>Heading1</h6>
    </div> -->

    <!-- HTML paragraphs -->
    <!-- <h4>This is Paragraph <br>
        <span class="sp">HTML paragraph is can be used by using "p" tag</span>
    </h4>
    <hr>
    <p class="sp para-1">Lorem ipsum dolor <span>sit</span>, amet consectetur adipisicing elit. Error aspernatur, iusto,
        pariatur doloribus molestias
        cum reprehenderit officiis amet eum autem nam omnis, distinctio est suscipit consequatur porro voluptatibus qui
        id.</p>


    <a href="index.html" target="_blank">Home</a> -->
    <!-- Target="_blank" is used for opening anchar tag hyperlink in new tab of browser -->

    <!-- Bootstrap Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpeg" class="d-block w-100" alt="image-slide1">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpeg" class="d-block w-100" alt="image-slide2">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpeg" class="d-block w-100" alt="image-slide3">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpeg" class="d-block w-100" alt="image-slide3">
            </div>
            <div class="carousel-item">
                <img src="images/img1.jpeg" class="d-block w-100" alt="image-slide3">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpeg" class="d-block w-100" alt="image-slide3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
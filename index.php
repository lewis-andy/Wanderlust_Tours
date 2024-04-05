<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Destinations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        /* Custom CSS for additional styling */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure the navbar stays above other elements */
        }

        .container {
            margin-top: 70px; /* Adjust margin to make space for the fixed navbar */
        }

        .tarjeta {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .tarjeta:hover {
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
            transform: translateY(-5px);
        }

        .img-header img {
            width: 100%;
            height: auto;
        }

        .header-card {
            padding: 20px;
        }

        .footer-card {
            background-color: #f9f9f9;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }

        .card-category {
            font-size: 12px;
            color: #007bff;
            text-transform: uppercase;
            text-decoration: none;
            margin-bottom: 5px;
            display: block;
        }

        .card-titulo {
            margin: 10px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .card-descripcion {
            font-size: 14px;
            color: #666;
        }

        .card-icon {
            color: #007bff;
        }

        .card-icon i {
            font-size: 24px;
        }

        .card-titulo-footer h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .valor-card {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .precios-container {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>

<div id="container">
    <header id="header">
<!--        <div id="logo">-->
<!--            <img id="header-img" src="https://cdn.dribbble.com/users/1786581/screenshots/4159729/media/12f472eca93f1701d57514e5cadeebb6.png?compress=1&resize=400x300" alt="Logo Carpel">-->
<!--        </div>-->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="#hero">Home Page</a></li>
                <li><a class="nav-link" href="add_destination.php">create destinations</a></li>
                <li><a class="nav-link" href="#row-servicios">Our Services</a></li>
                <li><a class="nav-link" href="#row-precios">Some Cities To Travell</a></li>
            </ul>
        </nav>
    </header>
    <div id="hero">
        <a href="#"><img class="img-hero" src="https://www.borispatagonia.com/images/fitz-roy-el-chalten-argentina.jpg" alt="imagen titulo"></a>
        <div class="titulo-imagen">
            <h1>Wanderlust_Tours</h1>
        </div>
        <div class="descripcion-imagen">
            <p>Your convinient travelling company
        </div>
    </div>
<!--    <a href="add_destination.php">create destination</a>-->
    <div id="main-container">
        <div id="row-servicios">
            <h2 class="titulo-row">SERVICES</h2>
            <section class="servicios-contenedor">
                <div class="servicio-bottom">
                    <i id="icono" class='bx bxs-plane-alt bx-lg'></i>
                    <h2 id="ser-titulo">Flight Booking</h2>
                    <p id="ser-descripcion">.</p>
                </div>
                <div class="servicio-lugares">
                    <i id="icono" class='bx bx-world bx-lg'></i>
                    <h2 id="ser-titulo">Travel to any location </h2>
                    <p id="ser-descripcion">.</p>
                </div>
                <div class="servicio-bottom">
                    <i id="icono" class='bx bx-support bx-lg'></i>
                    <h2 id="ser-titulo">Coustmer Service </h2>
                    <p id="ser-descripcion">.</p>
                </div>
                <div class="Low Prices">
                    <i id="icono" class='bx bxs-dollar-circle bx-lg'></i>
                    <h2 id="ser-titulo">Low Prices</h2>
                    <p id="ser-descripcion">.</p>
                </div>
                <div class="servicio-protegida">
                    <i id="icono" class='bx bxs-check-shield bx-lg'></i>
                    <h2 id="ser-titulo">Verified</h2>
                    <p id="ser-descripcion">.</p>
                </div>
                <div class="servicio-top">
                    <i id="icono" class='bx bxs-like bx-lg'></i>
                    <h2 id="ser-titulo">Respect Client's Opinion</h2>
                    <p id="ser-descripcion">.</p>
                </div>
            </section>
        </div>
        <div id="row-video">
            <h2 class="titulo-row" "Around The World"</h2>
            <iframe id="video" width="727" height="409" src="https://www.youtube.com/embed/6KL2QZ91kAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="row-precios">
            <h2 class="titulo-row"> Some Cities To Travell</h2>
            <section class="card-section">
                <div class="tarjeta">
                    <div class="img-header">
                        <img src="img/shangai.jpg">
                    </div>
                    <div class="header-card">
                        <a href="#" class="card-category">VIAJES</a>
                        <h2 class="card-titulo">China</h2>
                        <p class="card-descripcion">
                    </div>
                    <div class="footer-card">
                        <div class="card-titulo-footer">
                            <h3>Price Of Travelling</h3>
                        </div>

                        <div class="precios-container">
                            <div class="card-icon">
                                <i class='bx bxs-plane-take-off bx-lg'></i>
                                <p class="dias-card"></p>
                            </div>

                            <div class="card-precios">
                                <p class="des-card"> </p>
                                <p class="valor-card">$ 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="img-header">
                        <img src="img/newyork.jpg" alt="fimagen-fondo">
                    </div>
                    <div class="header-card">
                        <a href="#" class="card-category">VIAJES</a>
                        <h2 class="card-titulo">New York</h2>
                        <p class="card-descripcion">
                    </div>
                    <div class="footer-card-ny">
                        <div class="card-titulo-footer">
                            <h3>Price Of Travelling</h3>
                        </div>

                        <div class="precios-container">
                            <div class="card-icon">
                                <i class='bx bxs-plane-take-off bx-lg'></i>
                                <p class="dias-card"></p>
                            </div>

                            <div class="card-precios">
                                <p class="des-card"></p>
                                <p class="valor-card">$ 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="img-header">
                        <img src="img/dubai.jpg" alt="buenos aires">
                    </div>
                    <div class="header-card">
                        <a href="#" class="card-category">VIAJES</a>
                        <h2 class="card-titulo">Dubai</h2>
                        <p class="card-descripcion"
                    </div>
                    <div class="footer-card-ba">
                        <div class="card-titulo-footer">
                            <h3>Price Of Travelling</h3>
                        </div>

                        <div class="precios-container">
                            <div class="card-icon">
                                <i class='bx bxs-plane-take-off bx-lg'></i>
                                <p class="dias-card"></p>
                            </div>

                            <div class="card-precios">
                                <p class="des-card"></p>
                                <p class="valor-card">$ 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="img-header">
                        <img src="img/france.jpg" alt="francia">
                    </div>
                    <div class="header-card">
                        <a href="#" class="card-category">VIAJES</a>
                        <h2 class="card-titulo">France</h2>
                        <p class="card-descripcion">
                    </div>
                    <div class="footer-card-fr">
                        <div class="card-titulo-footer">
                            <h3>Price Of Travelling</h3>
                        </div>

                        <div class="precios-container">
                            <div class="card-icon">
                                <i class='bx bxs-plane-take-off bx-lg'></i>
                                <p class="dias-card"></p>
                            </div>

                            <div class="card-precios">
                                <p class="des-card"></p>
                                <p class="valor-card">$ 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <div class="content-container">
            <h2 class="text-center">Our gallery Gallery</h2>
            <div class="lightbox-gallery">
                <div><img src="https://picsum.photos/id/343/300/300" data-image-hd="https://picsum.photos/id/343/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quae, quam. Ut dolorum quia, unde dicta at harum porro officia obcaecati ipsam deserunt fugit dolore delectus quam, maxime nisi quo."></div>
                <div><img src="https://picsum.photos/id/112/300/300" data-image-hd="https://picsum.photos/id/112/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime accusamus officiis dignissimos doloribus consectetur harum eos sapiente optio aut minima."></div>
                <div><img src="https://picsum.photos/id/155/300/300" data-image-hd="https://picsum.photos/id/155/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veritatis similique, amet, maiores soluta recusandae cupiditate, sed perspiciatis fugit minima, sunt dolores cum earum deserunt illo ipsum!"></div>
                <div><img src="https://picsum.photos/id/11/300/300" data-image-hd="https://picsum.photos/id/11/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque laudantium dignissimos tenetur eos unde quidem repellat officiis nemo laboriosam necessitatibus deleniti commodi quis aliquid est atque tempora aut, nihil!"></div>
                <div><img src="https://picsum.photos/id/434/300/300" data-image-hd="https://picsum.photos/id/434/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus consequatur soluta quaerat itaque, laboriosam quis a facilis, cumque, deleniti quas aperiam voluptate dolore. Enim nostrum sit eaque, porro eligendi illo placeat?"></div>
                <div><img src="https://picsum.photos/id/101/300/300" data-image-hd="https://picsum.photos/id/101/600/600" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi suscipit quam, id aliquam totam aperiam quas rem debitis voluptatem pariatur, illo accusamus facilis eius ipsa! Reprehenderit libero, quas iste repudiandae distinctio, quos dignissimos."></div>
            </div>
        </div>


        <div class="text-center github-link">

            <a class="github-link" href="https://github.com/humbl3man/lightboxify" target="_blank"><i class="fa fa-github"></i> Github Source Code</a>


            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>Copyright Wanderlust_Tours © 2024. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


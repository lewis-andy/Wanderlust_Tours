<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Tours</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <body>


<div id="container">
    <header id="header">
        <div id="logo">
            <img id="header-img" src="https://cdn.dribbble.com/users/1786581/screenshots/4159729/media/12f472eca93f1701d57514e5cadeebb6.png?compress=1&resize=400x300" alt="Logo Carpel">
        </div>
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="#hero">Home Page</a></li>
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
    <a href="add_destination.php">create destination</a>
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
        <?php
        include 'config.php'; // Include your database connection

        // Fetch travel destinations from the database
        $query = "SELECT city, category, price, description, image FROM travel_destinations";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="tarjeta">';
                echo '<div class="img-header">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '">';
                echo '</div>';
                echo '<div class="header-card">';
                echo '<a href="#" class="card-category">VIAJES</a>';
                echo '<h2 class="card-titulo">' . $row['city'] . '</h2>';
                echo '<p class="card-descripcion">' . $row['description'] . '</p>';
                echo '</div>';
                echo '<div class="footer-card">';
                echo '<div class="card-titulo-footer">';
                echo '<h3>Price Of Travelling</h3>';
                echo '</div>';
                echo '<div class="precios-container">';
                echo '<div class="card-icon">';
                echo '<i class="bx bxs-plane-take-off bx-lg"></i>';
                echo '<p class="dias-card"></p>';
                echo '</div>';
                echo '<div class="card-precios">';
                echo '<p class="des-card"></p>';
                echo '<p class="valor-card">$ ' . $row['price'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
        ?>

        <div class="tarjeta">
                    <div class="img-header">
                        <img src="https://www.civitatis.com/blog/wp-content/uploads/2016/05/Estatua-de-la-Libertad.jpg" alt="fimagen-fondo">
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
                        <img src="https://pbs.twimg.com/media/D7Q2CMdW4AIJ5Iu.jpg" alt="buenos aires">
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
                        <img src="https://viajarsinprisa.net/wp-content/uploads/1604972691_333_%E2%96%B7-50-Mejores-Cosas-Que-Ver-en-Paris.jpg" alt="francia">
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

            <div class="row-footer">
</body>
</html>

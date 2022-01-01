<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>TuTicket</title>
</head>

<body>
    <div class="container-fluid">

        <header>
            <nav class="top-bar">
                <div class="row">
                    <div class="col"><a class="logo" href="./index.php">TuTicket</a></div>
                </div>
            </nav>       
        
            <section class="img-background">
                <div class="row">
                    <div class="col">
                        <input type="text" placeholder="Ingrese su búsqueda" class="input">
                        <span>
                            <button class="button" type="submit">
                                <a href="#" class="button-text">Buscar</a>
                            </button>
                        </span>
                    </div>
                </div>
                
            </section>
        </header>


        <section class="eventos-section">

            <h1 class="home-tittle">Eventos próximos</h1>
            <div class="combo-container">
                <div class="row">
                    <div class="col-sm-6">
                        <select class="combo-box">
                            <option disabled selected value="">Categoría</option>
                            <option value="">Todas</option>
                            <option value="">Concierto</option>
                            <option value="">Baile</option>
                            <option value="">Conferencia</option>
                            <option value="">Festival</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="combo-box">
                            <option disabled selected value="">Sitio</option>
                            <option value="">Todos</option>
                            <option value="">San José</option>
                            <option value="">Cartago</option>
                            <option value="">Alajuela</option>
                            <option value="">Heredia</option>
                            <option value="">Limón</option>
                            <option value="">Puntarenas</option>
                            <option value="">Guanacaste</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="img-container">


                <div class="row">
                    <div class="col-sm-4">
                        <img src="./img/imagen01.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-4">
                        <img src="./img/imagen02.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-4">
                        <img src="./img/imagen03.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="./img/imagen04.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-4">
                        <img src="./img/imagen05.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-4">
                        <img src="./img/imagen06.png" class="img" alt="">
                        <p class="img-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-button" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

        <footer>

            <div class="row">
                <div class="col">
                    <p class="footer-logo" href="#">TuTicket</p>
                </div>
                <div class="col">
                    <p class="phone-paragraph"><span><img src="./img/svg/phone.svg" class="placephone-icon" alt=""></span>26369999</p>
                </div>
                <div class="col">
                    <nav>
                        <ul class="social-ul">
                            <li class="facebook"><a href="#" aria-label="facebook" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </footer>
    </div>
</body>
</html>
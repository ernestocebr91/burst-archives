<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Autor" content="Ernesto Cebrián">
    <!-- CDN de Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <!-- Fontawesome --> 
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logonuevonuevo.png') }}" type="image/x-icon">
    <title>Burst Archives - La enciclopedia online de Gibson Les Paul</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header>
        <!-- Top -->
        <div id="top" class="container-fluid d-flex justify-content-center p-2 d-sm-flex">
            <span><i class="fas fa-book"></i>&nbsp;&nbsp;¡La primera enciclopedia online colaborativa de <a href="https://es.wikipedia.org/wiki/Gibson_Les_Paul" target="_blank"><span class="logo ink">Gibson&nbsp;<span> Les Paul</span> </span></a>&nbsp;del mundo!&nbsp;&nbsp;<i class="fas fa-book"></i></span>
        </div>
    </header>
    <!-- Flecha para subir -->
    <div id="contenedorFlecha" class="d-flex justify-content-end fixed-bottom pb-3">
        <a id="flecha" href="#"><i class="fas fa-chevron-circle-up px-4"></i></a>
    </div>
    @foreach($instrumentos as $instrumento)
    <!-- Burst -->
    <section id="burst">
        <div class="texto container mt-5 mb-5 pt-2 p-5">
            <div class="container">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">- {{ $instrumento->nombre }} -</h3>
                <h4 class="text-muted px-1 text-center d-flex justify-content-center ink mt-3">{{ $instrumento->numeroSerie }}</h4>
                <div class="row">
                    <!-- Ficha del instrumento -->
                    <div id="fichaInstrumento" class="card col-12 texto p-4 mb-2 mt-2 pb-5">
                        <div class="container">
                            <div class="row">
                                <!-- Imagen principal -->
                                <div class="container col-xl-6 col-sm-12 d-grid p-3 bg-white my-3">
                                    <img id="imagenPrincipal" src="{{ asset('storage') . '/' . $instrumento->imagenPrincipal }}" alt="{{ $instrumento->nombre }}" class="w-100 d-block">
                                    <span class="ink text-muted pt-2 text-center">- {{ $instrumento->nombre }} -</span>
                                </div>
                                <div class="container col-xl-6 col-sm-12">
                                    <!-- Descripción y detalles -->
                                    <h3 class="ink text-center mt-4 border-bottom border-white pb-2">Descripción y <span>detalles</span></h3>
                                    <h4 class="text-muted px-1 text-center d-flex justify-content-center ink mt-3">({{ $instrumento->anioFabricacion }})</h4>
                                    <div class="container d-flex justify-content-center">
                                        <p>{{ $instrumento->descripcion }}</p>
                                    </div>
                                    <!-- Galería fotográfica-->
                                    <h3 class="ink text-center mt-3 border-bottom border-white pb-2">Galería <span>fotográfica</span></h3>
                                    <div id="galeriaFotografica" class="p-4 pt-3">
                                        <div class="row">
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img1" src="{{ asset('storage') . '/' . $instrumento->imagenUno }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img2" src="{{ asset('storage') . '/' . $instrumento->imagenDos }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img3" src="{{ asset('storage') . '/' . $instrumento->imagenTres }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img4" src="{{ asset('storage') . '/' . $instrumento->imagenCuatro }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img5" src="{{ asset('storage') . '/' . $instrumento->imagenCinco }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                            <div class="col-md-4 mt-1 col-12">
                                                <img id="img6" src="{{ asset('storage') . '/' . $instrumento->imagenSeis }}" alt="{{ $instrumento->nombre }}" class="col-4 mt-1 w-100">
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <!-- Histórico de dueños -->
                                <div class="container owners col-xl-6 col-lg-6 col-md-6">
                                    <h3 class="ink text-center mt-5 border-bottom border-white pb-2">Histórico de <span>dueños</span></h3>
                                    <div class="container px-5">
                                        <div class="row">
                                            <!-- Dueño  -->
                                            <div class="container col-xl-4 col-sm-10 col-12 text-center mt-4">
                                                <div class="container d-flex justify-content-center p-1 pb-2">
                                                    <img id="img6" src="{{ asset('storage') . '/' . $instrumento->imagenOwner }}" alt="{{ $instrumento->nombreOwner }}" class="rounded-circle">
                                                </div>
                                                <p class="ink pb-3 mt-2"><strong><span>{{ $instrumento->nombreOwner }}</span></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Componentes destacados -->
                                <div class="container owners col-xl-6 col-lg-6 col-md-6">
                                    <h3 class="ink text-center mt-5 border-bottom border-white pb-2">Componentes <span>destacados</span></h3>
                                    <div class="container px-5">
                                        <div class="row">
                                            <!-- Componente -->
                                            <div class="container col-xl-4 col-sm-10 text-center mt-4">
                                                <div class="container d-flex justify-content-center p-1 pb-2">
                                                    <img id="img6" src="{{ asset('storage') . '/' . $instrumento->imagenComponente }}" alt="{{ $instrumento->componente }}" class="rounded-circle">
                                                </div>
                                                <p class="ink pb-3 mt-2"><strong><span>{{ $instrumento->componente }}</span></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pb-4">
                            <div class="row">
                                <!-- Contenido multimedia -->
                                <div class="container col-xl-6 col-lg-10 col-md-12">
                                    <h3 class="ink text-center mt-4 border-bottom border-white pb-2">Contenido <span>multimedia</span></h3>
                                    <div class="embed-responsive embed-responsive-16by9 mt-3">
                                        <!-- Vídeo de Youtube-->
                                        <iframe class="w-100" src="{{ $instrumento->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <!-- Descripción del vídeo -->
                                        <p class="pt-2">{{ $instrumento->descripcionVideo }}</p>
                                    </div>
                                </div>
                                <!-- Discografía representativa -->
                                <div class="container col-xl-6 col-lg-10 col-md-12">
                                    <h3 class="ink text-center mt-4 border-bottom border-white pb-2">Discografía <span>representativa</span></h3>
                                    <div class="container d-flex justify-content-center mt-4">
                                        <img src="{{ asset('storage') . '/' . $instrumento->imagenDisco }}" alt="{{ $instrumento->tituloDisco }}" class="w-75 d-block text-center">
                                    </div>
                                    <p class="pt-3 text-center"><span class="logo ink">{{ $instrumento->tituloDisco }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Página principal -->
                <div class="btns container d-flex justify-content-center mt-5 mb-5">
                    <a href="../home" class="btn col-lg-3 px-3">&nbsp;Página principal&nbsp;</a>
                </div> 
            </div>
        </div>
    </section>
    @endforeach
    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid p-2">
            <p class="pt-3">&copy;&nbsp;Copyright <b>Burst Archives</b>. Todos los derechos reservados.</p>
            <p>Diseñado por <a href="https://www.linkedin.com/in/ernestocebr/" class="text-decoration-none" target="_blank">Ernesto Cebrián</a></p>
        </div>
    </footer>
    <!-- JavaScript-->
    <script>
        const imagenPrincipal = document.querySelector('#imagenPrincipal');
        const img1 = document.querySelector('#img1');
        const img2 = document.querySelector('#img2');
        const img3 = document.querySelector('#img3');
        const img4 = document.querySelector('#img4');
        const img5 = document.querySelector('#img5');
        const img6 = document.querySelector('#img6');

        let imgPrincipalPath = imagenPrincipal.src;
        let img1Path = img1.src;
        let img2Path = img2.src;
        let img3Path = img3.src;
        let img4Path = img4.src;
        let img5Path = img5.src;
        let img6Path = img6.src;

        function reseteoImagenes() {
            img1.src = img1Path;
            img2.src = img2Path;
            img3.src = img3Path;
            img4.src = img4Path;
            img5.src = img5Path;
            img6.src = img6Path;
            imagenPrincipal.src = imgPrincipalPath;
        }

        imagenPrincipal.addEventListener('click', () => {
            reseteoImagenes();
        });

        img1.addEventListener('click', () => {
            if (img1.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img1.src;
                img1.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

        img2.addEventListener('click', () => {
            if (img2.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img2.src;
                img2.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

        img3.addEventListener('click', () => {
            if (img3.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img3.src;
                img3.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

        img4.addEventListener('click', () => {
            if (img4.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img4.src;
                img4.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

        img5.addEventListener('click', () => {
            if (img5.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img5.src;
                img5.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

        img6.addEventListener('click', () => {
            if (img6.src != imgPrincipalPath) {
                reseteoImagenes();
                imagenPrincipal.src = img6.src;
                img6.src = imgPrincipalPath;
            } else {
                reseteoImagenes();
            }
        });

    </script>
    <!-- Scripts de JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Script para que aparezcan el menú y la flecha al hacer scroll -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 85) {
                $('#menuNavegacion').addClass('fadeIn');
                $('#menuNavegacion').removeClass('fadeOut');
                $('#menuNavegacion').css('display', 'block');
                $('#flecha').addClass('fadeIn');
                $('#flecha').removeClass('fadeOut');
                $('#flecha').css('display', 'block');
            } else if ($(document).scrollTop() < 85) {
                $('#menuNavegacion').addClass('fadeOut');
                if ($('#menuNavegacion').hasClass('fadeIn')) {
                    $('#menuNavegacion').removeClass('fadeIn');
                    setTimeout(function() {
                        $('#menuNavegacion').css('display', 'none'); 
                    }, 500);
                }
                $('#flecha').addClass('fadeOut');
                if ($('#flecha').hasClass('fadeIn')) {
                    $('#flecha').removeClass('fadeIn');
                    setTimeout(function() {
                        $('#flecha').css('display', 'none'); 
                    }, 500);
                }
            }
        });
    </script>
</body>
</html>
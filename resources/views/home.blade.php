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
    <!-- Mensaje -->
    @if(Session::has('mensaje'))
        <?php $mensaje = Session::get('mensaje') ?>
        <script type="text/javascript">
            const mensaje = {!! json_encode($mensaje) !!};
            alert(mensaje);
        </script>
    @endif
    <!-- Header -->
    <header>
        <!-- Top -->
        <div id="top" class="container-fluid d-flex justify-content-center p-2 d-sm-flex">
            <span><i class="fas fa-book"></i>&nbsp;&nbsp;¡La primera enciclopedia online colaborativa de <a href="https://es.wikipedia.org/wiki/Gibson_Les_Paul" target="_blank"><span class="logo ink">Gibson&nbsp;<span> Les Paul</span> </span></a>&nbsp;del mundo!&nbsp;&nbsp;<i class="fas fa-book"></i></span>
        </div>
    </header>
    <!-- Navegación -->
    <nav id="menuNavegacion" class="navbar navbar-expand-lg fixed-top p-1">
        <div class="container">
            <div>
                <a class="navbar-brand" href="index.html"><img src="img/iconoNuevo.png" alt="burstArchivesLogo">&nbsp;&nbsp;<span class="logo ink">Burst<span> Archives </span></span></a>
            </div>
            <div class="d-flex justify-content-end">
                <!-- Botón hamburguesa -->
                <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#barraNavegacion" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse justify-content-end text-center" id="barraNavegacion">
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item active"><a class="nav-link" href="#top">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobreNosotros">Sobre nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#burstsHistoricas">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item dropdown">
                        <!-- Desplegable con el nombre de usuario -->
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombreUsuario }}
                        </a>
                        <!-- Opciones desplegadas -->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/usuario/perfilUsuario') }}">{{ __('Perfil de usuario') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Flecha para subir -->
    <div id="contenedorFlecha" class="d-flex justify-content-end fixed-bottom pb-3">
        <a id="flecha" href="#"><i class="fas fa-chevron-circle-up px-4"></i></a>
    </div>
    <!-- Inicio -->
    <section id="inicio" class="vh-100">
        <!-- Logo -->
        <div class="container d-flex justify-content-end">
            <div class="row">
                <div id="logo" class="col-12 col-sm-11 mt-5">
                    <h2 class="pt-5"><span class="logo ink">Burst<span> Archives </span></span></h2>
                    <div class="container d-flex justify-content-end">
                        <h3 class="d-sm-block"><span class="logo ink">La enciclopedia online de <span>Gibson Les Paul </span>&nbsp;</span></h3>
                    </div>                 
                </div>
            </div>
        </div>
        <br>
        <!-- Redes Sociales -->
        <div id="redesSociales" class="container d-flex justify-content-end w-75 mb-5">
            <div class="row">
                <div class="d-flex justify-content-around p-3">
                    <a class="mx-2" href="#"><i class="fab fa-twitter-square"></i></a>
                    <a class="mx-2" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a class="mx-2" href="#"><i class="fab fa-instagram-square"></i></a>
                    <a class="mx-2" href="#"><i class="fab fa-youtube-square"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sobre nosotros -->
    <section id="sobreNosotros">
        <!-- Descripción -->
        <div id="descripcion" class="container my-4 mt-5 mb-5">
            <div class="row">
                <div class="texto col-xl-6 col-lg-12 col-md-12 col-sm-12 pt-3 p-5">
                    <div class="section-title px-2">
                        <h1 class="ink display-3">Sobre <span>nosotros</span></h1>
                        <p class="m-2">Una forma diferente de buscar y compartir información.</p>
                    </div>
                    <h6 class="p-3"><span class="ink">Burst <span>Archives</span></span> nace ante la evidente necesidad de una fuente de información, referencia detallada y contrastada de información acerca de unos de los instrumentos más importantes y valiosos de la historia de la música, las <a class="text-decoration-none" href="https://es.wikipedia.org/wiki/Gibson_Les_Paul" target="_blank"><span class="logo ink">Gibson&nbsp;<span> Les Paul</span> </span></a>. Hasta ahora, la búsqueda de información sobre ellos suponía una alta inversión de tiempo para el aficionado medio, quien al no poseer conocimientos avanzados sobre la historia de los mismos, debía contrastar diferentes fuentes de información.</h6>
                    <h6 class="p-3">Con la aparición de <span class="ink">Burst <span>Archives</span></span>, estos instrumentos van a tener un sitio donde se exponga en profundidad y con absoluto detalle cada característica de ellos, con el objetivo de hacer la experiencia de su estudio llevadera, visual, accesible y contrastada.</h6>
                    <h6 class="p-3">Si quieres comenzar a vivir la experiencia, te recomendamos que te registres, para poder seguir indagando en más información e historias, además de poder interactuar con otros usuarios y poder compartir contenido propio.</h6>
                    <h6 class="p-3">No lo dudes, ¡comienza tu andadura en <span class="ink">Burst <span>Archives</span></span> !</h6>
                    <div class="container d-flex justify-content-center mt-5">
                        <img id="logoFirma" src="img/icono.png" alt="logoBurstArchives" class="mx-3">
                        <h5><span class="logo ink">Equipo de Burst<span> Archives </span></span></h5>
                    </div>
                </div>
                <div id="imagen" class="container col-xl-6 d-xl-inline d-lg-none d-md-none d-none">
                    <img class="w-100 h-100" src="img/guitars.jpg" alt="guitars">            
                </div>
            </div>
        </div>
    </section>
    <!-- Información detallada -->
    <section id="informacionDetallada">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Información <span>detallada</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Facilitamos toda la información técnica del instrumento, certificada por nuestros especialistas.</span>
                </div>
                <div class="row">
                    <!-- Fecha de fabricación -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="far fa-calendar-alt display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Fecha de <span>fabricación</span></strong></h4>
                                <p class="text-muted small px-1">Determinación del año exacto o aproximado de fabricación del instrumento.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Detalles técnicos -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-tools display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Detalles <span>técnicos</span></strong></h4>
                                <p class="text-muted small px-1">Materiales de fabricación y componentes destacados.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Histórico de dueños -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-user-friends display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Histórico de <span>dueños</span></strong></h4>
                                <p class="text-muted small px-1">Listado de personas que han poseído el instrumento.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Descripción general -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-images display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Descripción <span> general</span></strong></h4>
                                <p class="text-muted small px-1">Breve descripción general del instrumento, las experiencias vividas junto a él y su historia.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Histórico de grabaciones -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-compact-disc display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Álbum <span>destacado</span></strong></h4>
                                <p class="text-muted small px-1">Referencia de algún trabajo donde se haya utilizado el instrumento.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contenido multimedia -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fab fa-youtube display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Contenido <span>multimedia</span></strong></h4>
                                <p class="text-muted small px-1">Contenido o grabaciones en audio/vídeo del instrumento en acción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Galería de Bursts -->
    <section id="burstsHistoricas">
        <div class="texto container mt-5 mb-5 pt-2 p-5">
            <div class="container">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Galería de <span>bursts</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Galería de las burst más simbólicas y emblemáticas de la historia de la música.</span>
                </div>
                <!-- Primera fila -->
                <div class="row">
                    <!-- Beano -->
                    <div class="container col-lg-3 col-sm-6 text-center mt-4">
                        <div class="container d-grid p-3 bg-white">
                            <img src="img/beano.jpg" alt="beano" class="w-100 d-block">
                            <span class="ink text-muted pt-2">- Beano -</span>
                        </div>
                    </div>
                    <!-- Pearly Gates -->
                    <div class="container col-lg-3 col-sm-6 text-center mt-4">
                        <div class="container d-grid p-3 bg-white">
                            <img src="img/pearlygates.jpg" alt="pearly-gates" class="w-100 d-block">
                            <span class="ink text-muted pt-2">- Pearly Gates -</span>
                        </div>
                    </div>
                    <!-- The Beast -->
                    <div class="container col-lg-3 col-sm-6 text-center mt-4">
                        <div class="container d-grid p-3 bg-white">
                            <img src="img/thebeast.jpg" alt="the-beast" class="w-100">
                            <span class="ink text-muted pt-2">- The Beast -</span>
                        </div>
                    </div>
                    <!-- The Bloomfield Burst -->
                    <div class="container col-lg-3 col-sm-6 text-center mt-4">
                        <div class="container d-grid p-3 bg-white">
                            <img src="img/bloomfield.jpg" alt="the-bloomfield-burst" class="w-100">
                            <span class="ink text-muted pt-2">- The Bloomfield Burst -</span>
                        </div>
                    </div>
                </div>
                <!-- Segunda fila -->
                <div class="row">
                    @foreach($instrumentos as $instrumento)
                        <div class="container col-lg-3 col-sm-6 text-center mt-4">
                            <a href="{{ url('usuario/guitarras') }}">
                                <div class="container d-grid p-3 bg-white">
                                    <img src="{{ asset('storage') . '/' . $instrumento->imagenPrincipal }}" alt="{{ $instrumento->nombre }}" class="w-100 d-block">
                                    <span class="ink text-muted pt-2">- {{ $instrumento->nombre }} -</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Burst aleatoria -->
    <section id="burstAleatoria">
        <div class="texto container mt-5 mb-5 pt-2 p-5">
            <div class="container">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Burst <span>aleatoria</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Esta es la ficha de un instrumento seleccionado aleatoriamente.</span>
                </div>
                <div class="row">
                    <div class="card col-12 texto p-4 mb-2 mt-4">
                        <div class="container">
                            <div class="row">
                                <?php $numeroAleatorio = rand(0, count($instrumentos) - 1); ?>
                                <div class="container col-xl-6 col-sm-12 d-grid p-3 bg-white my-3">
                                    <img src="{{ asset('storage') . '/' . $instrumentos[$numeroAleatorio]->imagenPrincipal }}" alt="{{ $instrumentos[$numeroAleatorio]->nombre }}" class="w-100 d-block">
                                    <span class="ink text-muted pt-2 text-center">- {{ $instrumentos[$numeroAleatorio]->nombre }} -</span>
                                </div>
                                <div class="container col-xl-6 col-sm-12">
                                    <h3 class="ink text-center mt-4 border-bottom border-white pb-2"><span>{{ $instrumentos[$numeroAleatorio]->nombre }}</span></h3>
                                    <h4 class="text-muted px-1 text-center d-flex justify-content-center ink mt-3">{{ $instrumentos[$numeroAleatorio]->numeroSerie }}</h4>
                                    <div class="container d-flex justify-content-center">
                                        <p>{{ $instrumentos[$numeroAleatorio]->descripcion }}</p>
                                    </div>
                                    <div class="container d-flex justify-content-center mt-4">
                                        <img src="{{ asset('storage') . '/' . $instrumentos[$numeroAleatorio]->imagenDisco }}" alt="{{ $instrumentos[$numeroAleatorio]->tituloDisco }}" class="w-75 d-block text-center">
                                    </div>
                                    <p class="pt-3 text-center"><span class="logo ink">{{ $instrumentos[$numeroAleatorio]->tituloDisco }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section id="blog">
        <div class="texto container mt-5 mb-5 pt-2 p-5">
            <div class="container">
                <h3 class="ink px-4 pt-3 display-3 mt-3 mb-4 text-center">Entradas del <span>blog</span></h3>
                <div class="row">
                    <!-- Primera entrada blog -->
                    <div class="card col-12 texto text-white p-4 mb-5">
                        <div class="container">
                            <div class="row">
                                <img src="img/lespaul-marshall22.jpg" alt="vida-muerte" class="col-xl-4 col-sm-12 p-0 mt-3">
                                <div class="container col-xl-8 col-sm-12">
                                    <h3 class="ink text-center mb-4">La pareja <span>perfecta</span></h3>
                                    <p class="mb-1 p-3 p-sm-1">Uno de los dúos más simbólicos de la historia de la música contemporánea es el formado por una <span class="logo ink">Gibson &nbsp;<span>Les Paul</span></span> y un amplificador <span class="logo ink">Marshal</span>&nbsp;.</p><p class="mb-1 p-3 p-sm-1">Desde el lanzamiento del álbum <span class="logo ink">John Mayall & The Bluesbreakers - <span>With Eric Clapton</span></span> (1965), el sonido generado con esta combinación de guitarra y amplificador ha sido considerado como la base de la música rock, tanto por aficiondos como por profesionales.</p><p class="mb-5 p-3 p-sm-1">En este álbum, <span class="logo ink">Eric <span>Clapton</span></span> combinó la potencia de las pastillas estilo humbucker (<span class="logo ink">PAF</span>), con la ganacia de un combo <span class="logo ink">Marshall <span>JTM-45</span></span>, cambiando la tendencia en la búsqueda del sonido por los guitarristas de la época. Esto sembró la semilla de centenares de trabajos posteriores de blues-rock y rock en general.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($publicacions as $publicacion)
                        <div class="card col-12 texto text-white p-4 mb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="container col-xl-8 col-sm-12">
                                        <h3 class="ink text-center mb-4 mt-3"><span>{{ $publicacion->titulo }}</span></h3>
                                        <p class="mb-1 p-3 p-sm-1">{{ $publicacion->contenido }}</p>
                                    </div>
                                    <img src="{{ asset('storage') . '/' . $publicacion->imagenPublicacion }}" alt="{{ $publicacion->titulo }}" class="col-xl-4 col-sm-12 p-0">
                                </div>
                            </div>
                        </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Ventajas usuario registrado -->
    <section id="usuarioRegistrado">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Ventajas de <span>usuario registrado</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Al registrarte recibes algunas ventajas como las siguientes.</span>
                </div>
                <div class="row">
                    <!-- Buscador -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-search display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Búsqueda con <span>buscador</span></strong></h4>
                                <p class="text-muted small px-1">Podrás buscar los instrumentos de una forma más rápida, con diferentes métodos de búsqueda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Acceso completo -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-database display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Acceso <span>completo</span></strong></h4>
                                <p class="text-muted small px-1">Podrás acceder a todas las entradas de los instrumentos registrados en la base de datos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Sin publicidad -->
                    <div class="container col-sm-10 col-md-6 col-xl-4 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <i class="fas fa-times-circle display-3"></i>
                            </div>
                            <div class="container p-3 pb-3">
                                <h4 class="ink pb-2"><strong>Sin <span>publicidad</span></strong></h4>
                                <p class="text-muted small px-1">Podrás disfrutar de la web sin ningún contenido publicitario.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Opiniones célebres -->
    <section id="opinionesCelebres">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Opiniones <span>célebres</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Los mejores artistas nos dan su opinión sobre nuestra plataforma.</span>
                </div>
                <div class="row">
                    <!-- Billy Gibbons -->
                    <div class="container col-xl-4 col-sm-10 p-4 text-center mt-0">
                        <div class="card pt-3">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <img src="img/billy-gibbons.jpg" alt="billy-gibbons" class="w-50 rounded-circle">
                            </div>
                            <div class="container p-3 pb-5">
                                <h4 class="ink pb-2"><strong>Billy <span>Gibbons</span></strong></h4>
                                <p class="text-muted small px-1">Como fanático de <span class="logo ink">Gibson&nbsp;<span> Les Paul </span></span>, cada vez que entro en <span class="logo ink">Burst&nbsp;<span> Archives</span></span> me siento identificado con la pasión y el cariño que se le tiene a estos instrumentos. ¡Es el mejor sitio web dedicado a estas guitarras en el mundo!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slash -->
                    <div class="container col-xl-4 col-sm-10 p-4 text-center mt-0">
                        <div class="card pt-3">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <img src="img/slash.jpg" alt="slash" class="w-50 rounded-circle">
                            </div>
                            <div class="container p-3 pb-5">
                                <h4 class="ink pb-2"><strong><span>Slash</span></strong></h4>
                                <p class="text-muted small px-1">Nunca imaginé que podría buscar información sobre <span class="logo ink">Gibson&nbsp;<span> Les Paul </span></span>&nbsp; de una forma tan cómoda y rápida como lo hago en <span class="logo ink">Burst&nbsp;<span> Archives</span></span>. Es un sitio web que recomiendo a todo el mundo. ¡La mejor encilopedia de instrumentos del mundo!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Joe Bonamassa -->
                    <div class="container col-xl-4 col-sm-10 p-4 text-center mt-0">
                        <div class="card pt-3">
                            <div class="container d-flex justify-content-center p-3 pb-2">
                                <img src="img/bonamassa.jpg" alt="bonamassa" class="w-50 rounded-circle">
                            </div>
                            <div class="container p-3 pb-5">
                                <h4 class="ink pb-2"><strong>Joe <span>Bonamassa</span></strong></h4>
                                <p class="text-muted small px-1">Estoy alucinado con las posibilidades y el conocimiento que transmite <span class="logo ink">Burst&nbsp;<span> Archives</span></span>. Como coleccionista y adicto a las <span class="logo ink">Gibson&nbsp;<span> Les Paul </span></span>, sólo puedo estar muy agradecido por la creación de este portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <section id="contacto">
        <!-- Descripción -->
        <div id="formulario" class="container mt-5 mb-5">
            <div class="row">
                <div class="texto col-xl-6 col-sm-12 text-justify pt-3 pb-5 p-sm-4">
                    <div class="section-title px-2">
                        <h1 id="tituloContacto" class="ink display-3">Contacta con <span>nosotros</span></h1>
                        <p id="subtituloContacto" class="m-2">Déjanos tus datos, y nos pondremos en contacto contigo.</p>
                    </div>
                    <!-- Formulario -->   
                    <form class="php-email-form" action="contacto.php" method="POST">
                        <div class="form-row p-3 pt-0">
                            <div class="form-group pb-2">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escribe tu nombre">
                            </div>
                            <div class="form-group py-2">
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Escribe tus apellidos">
                            </div>
                            <div class="form-group py-2">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu correo electrónico">
                            </div>
                            <div class="form-group py-2">
                                <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Introduce un asunto">
                            </div>
                        </div>
                        <p class="m-2 px-2">Coméntanos cualquier consulta o duda que tengas.</p>
                        <div class="form-group px-3">
                            <textarea class="form-control" name="consulta" rows="3" placeholder="Describe tu consulta"></textarea>
                        </div>
                        <div class="btns mt-5 container d-flex justify-content-center">
                            <input type="submit" value="Enviar consulta">
                            <a href="#book-a-table" class="px-5 mx-2">Enviar consulta</a>
                        </div>
                    </form>
                </div>
                <div id="imagen" class="container col-xl-6 d-xl-inline d-lg-none d-md-none d-none">
                    <img class="w-100 h-100 d-md-inline d-sm-none d-none" src="img/burst5.jpg" alt="burst5">            
                </div>
            </div>
        </div>
    </section>
    <!-- Redes Sociales -->
    <section id="redesSocialesGrande">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center mb-0">Redes <span>sociales</span></h3>
                <div class="container p-3 pb-0">
                    <span class="small px-1 text-center d-flex justify-content-center">Puedes encontrarnos en las siguientes redes sociales.</span>
                </div>
                <div class="row">
                    <!-- Twitter -->
                    <div class="container col-xl-3 col-lg-6 col-sm-6 p-4 text-center mt-0">
                        <a class="enlaceSocial" href="https://twitter.com/burstarchives/" target="_blank">
                            <div class="card py-4 cardSocial">
                                <div class="container d-flex justify-content-center p-3 pb-2">
                                    <i class="fab fa-twitter-square display-3"></i>
                                </div>
                                <div class="container p-3 pb-3">
                                    <h4 class="ink pb-2"><strong>En <span>Twitter</span></strong></h4>
                                    <p class="text-muted small px-1">twitter.com/burstarchives</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Facebook -->
                    <div class="container col-xl-3 col-lg-6 col-sm-6 pt-4 text-center mt-0">
                        <a class="enlaceSocial" href="https://facebook.com/burstarchives/" target="_blank">
                            <div class="card py-4 cardSocial">
                                <div class="container d-flex justify-content-center p-3 pb-2">
                                    <i class="fab fa-facebook-square display-3"></i>
                                </div>
                                <div class="container p-3 pb-3">
                                    <h4 class="ink pb-2"><strong>En <span>Facebook</span></strong></h4>
                                    <p class="text-muted small px-1">facebook.com/burstarchives</p>
                                </div>
                            </div>
                        </a>                        
                    </div>
                    <!-- Instagram -->
                    <div class="container col-xl-3 col-lg-6 col-sm-6 pt-4 text-center mt-0">
                        <a class="enlaceSocial" href="https://instagram.com/burstarchives/" target="_blank">
                            <div class="card py-4 cardSocial">
                                <div class="container d-flex justify-content-center p-3 pb-2">
                                    <i class="fab fa-instagram-square display-3"></i>
                                </div>
                                <div class="container p-3 pb-3">
                                    <h4 class="ink pb-2"><strong>En <span>Instagram</span></strong></h4>
                                    <p class="text-muted small px-1">instagram.com/burstarchives/</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Youtube -->
                    <div class="container col-xl-3 col-lg-6 col-sm-6 pt-4 text-center mt-0">
                        <a class="enlaceSocial" href="https://youtube.com/burstarchives" target="_blank">
                            <div class="card py-4 cardSocial">
                                <div class="container d-flex justify-content-center p-3 pb-2">
                                    <i class="fab fa-youtube-square display-3"></i>
                                </div>
                                <div class="container p-3 pb-3">
                                    <h4 class="ink pb-2"><strong>En <span>Youtube</span></strong></h4>
                                    <p class="text-muted small px-1">youtube.com/burstarchives</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid p-2">
            <p class="pt-3">&copy;&nbsp;Copyright <b>Burst Archives</b>. Todos los derechos reservados.</p>
            <p>Diseñado por <a href="https://www.linkedin.com/in/ernestocebr/" class="text-decoration-none" target="_blank">Ernesto Cebrián</a></p>
        </div>
    </footer>
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
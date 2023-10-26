<!DOCTYPE html>
<html lang="ES">

<head>
    <title>Llévate tus secretos hastalatumba</title>
    <!-- METATAGS -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="public, max-age=3600" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="Spanish" />
    <meta name="author" content="Jaime Ramirez - jrami" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Titulo" />
    <!-- OPENGRAPH-->
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- SWIPER SLIDER-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- ANIMATE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Estilos propios-->
    <link href="{{ asset('assets/css/hlt.css') }}" rel="stylesheet" async>
    <!-- FAVICOn-->
    <link rel="shortcut icon" href="/favicon.ico" />
    <!-- CANONICAL URL -->
    <link rel="canonical" href="" />
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/acf431a76a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ========== PRELOADER ========== -->
    <div id="preloader">
        <div class="hlt-three-bounce">
            <div class="hlt-child hlt-bounce1"></div>
            <div class="hlt-child hlt-bounce2"></div>
            <div class="hlt-child hlt-bounce3"></div>
        </div>
    </div>
    <!-- ========== NAVBAR HEADER recorda poner class para efecto y fixed-top  hlt-menu ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  hlt-menu ">
        <div class="container">
            <a class="navbar-brand" href="">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Purgatorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mausoleo-de-historias') }}">Mausoleo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sabias-que') }}">Sabías que?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('club-lloron') }}">Club Llorón</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sepulturero') }}">Sepulturero</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('cuentanos-tu-historia') }}" title="">
                            <button type="button" class="btn btn-danger">Confiésate</button>
                        </a>
                    </li>
                </ul>
            </div>
            <button id="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"
                class="d-none d-md-block d-lg-block"><span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- LATERAL SOCIAL-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>
    <!-- ========== BARRA SOCIALES LATERAL HOME  ========== -->

    <main>
        <!-- ========== HERO  ========== -->
        <section class="bgimage ">
            <div class="container">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5 hlt-hero">

                    <div class="col-lg-12">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Cuéntanos Tu<br /> Secreto</h1>
                        <h2>La Cripta de las Confesiones, lleva tu secreto hastalatumba</h2>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="boton-cta animate__animated animate__bounce">Déjanos Tu
                                Historia <i class="fas fa-lock" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="hlt-iconos-sociales-laterales">
                        <ul class="hlt-social-links">
                            <li>
                                <a href="https://www.instagram.com/hastalatumba.cl/" class="links-center"
                                    title="Síguenos en Instagram ">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>&nbsp;Imstragram</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hastalatumba.cl" class="cs-center"
                                    title="Sigue nuestra página en Facebook "> <i class="fab fa-facebook"
                                        aria-hidden="true"></i>&nbsp;Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@hastalatumba" class="cs-center"
                                    title="Baila con nosotros en TikTok">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>&nbsp;Youtube</a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@hastalatumba.cl" class="cs-center"
                                    title="Sígue nuestro canal en Youtube "> <i class="fab fa-tiktok"
                                        aria-hidden="true"></i>&nbsp;Tik Tok</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>



        <!-- ========== ESTADISTICAS HOME ========== -->
        <section id="estadisticas-home">
            <div class="container">
                <div class="hlt-cont-estadisticas">


                    <div class="row">
                        <div class="col-12 col-md-4">
                            <h2>Confiésate</h2>
                            <h3>Pero mantén tus secretos ocultos</h3>

                        </div>
                        <div class="col-12 col-md-4">
                            <span class="datos-estadisticos">300</span> <span>Secretos Nuevos</span>
                            <div>10.000 lala</div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div>300 alal</div>
                            <div>10.000 lala</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- ========== SLIDER NUEVAS HISTORIAS  ========== -->
        <div class="hlt-height_45 hlt-height_lg_90"></div>


        <section id="nuevas-historias">
            <div class="container">
                <div class="text-center">
                    <h3 class="hlt-section-subtitulo">Últimas Confesiónes</h3>
                    <h2 class="hlt-section-titulo animate__animated animate__bounce">
                        Nuevas
                        Historias
                    </h2>
                </div>
            </div>
            <!-- SWIPER -->
            <div class="swiper swiper-historias">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-lazy"
                        style="background-image: url(https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts/historia_hombre.webp)">
                        <div class="card__content">
                            <p class="card__category">Paranormal</p>
                            <h3 class="card__heading">"La mujer lobo"</h3>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        style="background-image: url(https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts/historia_hombre.webp)">
                        <div class="card__content">
                            <p class="card__category">Paranormal</p>
                            <h3 class="card__heading">"La mujer lobo"</h3>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        style="background-image: url(https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts/historia_hombre.webp)">
                        <div class="card__content">
                            <p class="card__category">Paranormal</p>
                            <h3 class="card__heading">"La mujer lobo"</h3>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        style="background-image: url(https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts/historia_hombre.webp)">
                        <div class="card__content">
                            <p class="card__category">Paranormal</p>
                            <h3 class="card__heading">"La mujer lobo"</h3>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        style="background-image: url(https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts/historia_hombre.webp)">
                        <div class="card__content">
                            <p class="card__category">Paranormal</p>
                            <h3 class="card__heading">"La mujer lobo"</h3>
                        </div>
                    </div>


                </div>


            </div>

        </section>
        <!-- ========== PREGUNTAS FRECUENTES  ========== -->

        <section id="preguntas-frecuentes">
            <div class="hlt-height_90 hlt-height_lg_45"></div>
            <div class="container hlt-shape_wrap_1">
                <div class="hlt-shape_1"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="hlt-section-subtitulo">FAQ’s</h3>
                        <h2 class="hlt-section-titulo">Preguntas <br />Frecuentes</h2>
                        <div class="cs-height_90 cs-height_lg_45"></div>

                    </div>
                    <div class="col-lg-8">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="hlt-height_45 hlt-height_lg_90"></div>

        <!-- ========== CTA DEJAMOS TU HISTORIA HOME ========== -->
        <section id="hlt-cta" class="hlt-secciones-gradiente-negro ">
            <div class="container">
                <div class="hlt-cta  text-center hlt-shape_wrap_1 ">
                    <div class="hlt-shape_1"></div>

                    <h2 class="hlt-cta_title ">
                        Comparte en nuestro sitio tus secretos más profundos y protégelos para siempre. La libertad de
                        ser anónimo<i> te espera</i>.

                    </h2>
                    <button type="button" class="boton-cta animate__animated animate__bounce">Déjanos Tu
                        Historia <i class="fas fa-lock"></i></button>

                </div>
            </div>
        </section>

        <!-- ========== MARQUESINA CON CTA  ========== -->
        <div class="hlt-height_45 hlt-height_lg_90"></div>
        <section id="hlt-marquesina">
            <div class="hlt-moving_text_wrap ">
                <div class="hlt-moving_text_in">
                    <div class="hlt-moving_text">Cuéntanos tus secretos más íntimos sin temor a ser descubiertos.
                        Bienvenido
                        a Hastalatumba, tu refugio de confianza.</div>
                </div>
            </div>
        </section>


        <!-- ========== SECTION TESTIMONIOS ========== -->
        <div class="hlt-height_45 hlt-height_lg_90"></div>
        <section id="hlt-testimonios">
            <div class="container hlt-shape_wrap_1">
                <div class="hlt-shape_1"></div>
                <h3 class="hlt-section-subtitulo">Lo que la gente opina</h3>
                <h2 class="hlt-section-titulo">Testimonios</h2>
                <div class="cs-height_90 cs-height_lg_45"></div>
            </div>
            <!-- SWIPER TESTIMONIOS-->


            <!-- Slider main container -->
            <div class="swipertestimonios">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrapper">
                            <div class="content">
                                <div class="swiper-avatar"><img
                                        src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg">
                                </div>
                                <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu
                                    leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                <p class="cite">- Juliet Elliott, Cyclist</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need pagination -->
                <!-- If we need navigation buttons -->
                <div class="swiper-nav-wrapper">
                    <div class="swiper-pagination"></div>

                </div>
            </div>

        </section>

    </main>
    <!-- ========== ANIMACION CURSOR  ========== -->
    <div id="cursor"></div>
    <div id="pointer"></div>
    <!-- ========== FOOTER  ========== -->
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <p class="text-muted">© 2022</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- TO TOP-->
    <a href="#" class="go-top"><i class="fas fa-angle-up"></i></a>
    <!-- FOOTER SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/hlt-main.js') }}"></script>
</body>

</html>

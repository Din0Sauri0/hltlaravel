@extends('layouts.master')
@include('preloader.preload')
@include('navbar.navbar')

<!-- ========== HERO  ========== -->
<div class="hero-image" style="height:100vh; ">
    <div class="hero-text">
        <h1>Mausoleo De Historias
        </h1>
        <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item">
                <a href="">Purgatorio</a>
            </li>
            <li class="breadcrumb-item active">
                Mausoleo
            </li>
        </ol>
    </div>
</div>
<div class="hlt-height_45 hlt-height_lg_90"></div>
<!-- ========== MAIN HISTORIAS  ========== -->
<main>
    <section id="contenedor-historias">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="zoom">
                        <a href="la-mujer-era-un-lobo/">
                            <img src="https://hastalatumba.zona8.cl/mausoleo-de-historias/imagenes/img_posts//historia_hombre.webp"
                                alt="Historia narranda por nickname" title="Historia narranda por nickname"
                                class="w-100 img-blog inner-img">
                        </a>
                    </div>
                    <section class="post-info">
                        <span class="fecha">22 De Abril 2023</span> |
                        <span class="cat">Lujuria</span>
                        <h2 class="titulo-historia">
                            titulo
                        </h2>
                        <p class="contenido-historia text-truncate">
                            sdjfhsjkdfjksahdjkashdkjashdkjashdkjashkjdhaksjhdkjashkdjhaskjhdkjashdkjhaskjdhkjashdkjhaskjdhkjashdkjhaskjhdkjahsjkhsajkd
                        </p>
                        <button type="button" class="boton-cta animate__animated animate__bounce">Leér Historia
                            <i class="fas fa-book"></i></button>
                        <!-- ========== PAGINACION  ========== -->
                        <div class="paginacion">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>


                </div>
                <div class="col-lg-4">
                    <div class="sidebar-blog">
                        <div class="text-center">
                            <p>Descubre el Secreto Mejor Guardado! Comparte tus Confesiones de Lujuria y Pasión en Total
                                Anonimato</p>
                        </div>

                        <h4>Revive</h4>
                        <form class="hlt-sidebar_search" action="#">
                            <input type="text" placeholder="Buscar en el mausoleo...">
                            <button class="hlt-sidebar-buscador-boton">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </form>
                        <h4>Categorias</h4>
                        <ul>
                            <li class="cat-item">
                                <a href="#">Lujuria</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Paranormal</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Subidas</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Pasión</a>
                            </li>

                        </ul>
                        <h4>Tags</h4>
                        <button type="button" class="btn btn-outline-light">Light</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

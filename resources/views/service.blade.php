@extends('layouts.app')
@section('title', 'Servicios')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Nuestros servicios</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">Inicio</li>
                <li class="breadcrumb-item">Paginas</li>
                <li class="breadcrumb-item active" aria-current="page">Servicios</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Nuestros servicios</p>
            <h1 class="display-5 mb-5">Servicios que le ofreceos a usted</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/07.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-4">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/madera.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Madera comerciales</h4>
                        <p class="mb-4">Piezas de madera maciza obtenidas por aserrado del árbol, generalmente escuadradas, es decir con caras paralelas entre sí y cantos perpendiculares a las mismas.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/08.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-4">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/madera.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Madera en tucos</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/09.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-4">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/madera.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Madera larga y angosta</h4>
                        <p class="mb-4"> se refiere a una pieza de madera que tiene una longitud considerable en comparación con su ancho. Es probable que estemos hablando de una tabla, tablón o listón que tiene una dimensión alargada y delgada.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/18.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-4">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/madera.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Madera en tablas</h4>
                        <p class="mb-4">hace referencia a madera que ha sido cortada y procesada en forma de tablas. Las tablas son piezas de madera alargadas y planas que se obtienen al cortar los troncos de los árboles en sentido longitudinal</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



@endsection
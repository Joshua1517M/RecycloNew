@extends('layouts.app')

@section('content')

<!--CARRUCEL DE IMAGENES-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{ asset('img/reciclar0.jpg') }}" class="d-block w-100" alt="reciclar0">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/reciclar2.jpg') }}" class="d-block w-100" alt="reciclar2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/reciclar3.jpg') }}" class="d-block w-100" alt="reciclar3">
        </div>
        <div class=" carousel-item">
            <img src="{{ asset('img/reciclar5.jpg') }}" class="d-block w-100" alt="reciclar5">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<h2 class="nuestros">Nuestros Servicios</h2>
<!--<li class="ppp"><img src="img/i1.png" class="img-thumbnail" alt="..."></li>-->
<div class="servicios">
    <section class="servicio orden">
        <div class="col">
            <img src="./img/tierra2.png" alt="contenedor" width="180" height="180">
        </div>
        <div class="col">
            <h3>En este lugar aprenderas</h3>
            <p>Desde lo mas básico hasta lo mas experimentado en cuanto al reciclaje, cosas como:
                que tirar en cada color de basurero, ideas practicas y manualidades para reducir
                la cantidad de basura que generas, como se recicla cada material y donde se puede reciclar,
                entre muchas otras cosas.
            </p>
        </div>
    </section>

    <section class="servicio orden">
        <div class="col">
            <img src="./img/sol.png" alt="contenedor" width="180" height="180">
        </div>
        <div class="col">
            <h3>Te ofrecemos</h3>
            <p>Una plataforma segura donde podrás aprender muchas cosas en cuanto al reciclaje, como métodos,
                técnicas e información variada del mismo, ademas de que contamos con una comunidad que siempre
                ayuda a los demás.
            </p>
        </div>
    </section>

    <section class="servicio orden">
        <div class="col">
            <img src="./img/mano2.png" alt="contenedor" width="180" height="180">
        </div>
        <div class="col">
            <h3 class="or">Objetivo</h3>
            <p>La aplicación web busca ayudar a fomentar la práctica e informar sobre el reciclaje con el fin de
                evitar la contaminación ambiental. Promover un cambio para reducir al máximo los residuos y
                maximice la prevención, la reutilización y el reciclaje. También difundir la importancia del
                reciclaje y su vez fomentar una cultura ecológica.
            </p>
        </div>
    </section>

    <section class="servicio orden">
        <div class="col">
            <img src="./img/oja.png" alt="contenedor" width="180" height="180">
        </div>
        <div class="col">
            <h3>Misión</h3>
            <p>Somos una plataforma que busca educar y concientizar a las personas sobre la importancia del
                reciclaje y todas sus implicaciones y
                beneficios tanto en la vida cotidiana como en la naturaleza. A su vez crear una comunidad activa
                e
                interesada por el reciclaje que aliente e instruya a otros a reciclar.
            </p>
        </div>
    </section>

    <section class="servicio orden">
        <div class="col">
            <img src="./img/agua.png" alt="contenedor" width="180" height="180">
        </div>
        <div class="col">
            <h3>Visión</h3>
            <p>Ser la plataforma numero uno en el reciclaje tanto por su variada información como por su
                comunidad activa.
                Ser una plataforma que activamente busque nueva información sobre el reciclaje para asi brindar
                el
                contenido mas reciente y actualizado
            </p>
        </div>
    </section>

</div>
@endsection
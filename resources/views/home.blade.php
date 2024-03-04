@extends('layouts.app')

@section('title', 'Home')
    
@section('content')


<div class="intro-index">
    <img src="https://pymesworld.com/wp-content/uploads/2019/03/diseno-web-clinicas-dentales.jpg" alt="" class="index">
    <h1>¿Porque escogernos a nosotros?</h1>
    <h3>Porque somos un equipo en mejorar la calidad de vida de nuestros pacientes a través de nuestro equipo capacitado en todas las areas de odontologia y las más modernas instalaciones; además porque lo hacemos con el mayor profesionalismo y responsabilidad ayudando a cumplir los sueños de nuestros pacientes.</h3>
</div>
{{-- <div class="foto">
    <img  src="https://pymesworld.com/wp-content/uploads/2019/09/diseno-web-clinicas-dentales.jpg" alt="">
</div> --}}
<div class="servicios-index">
    <h1>Servicios para Clínicas Dentales</h1>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://bfesteticadental.com/wp-content/uploads/2017/06/Odontologia-Caracas-Venezuela-BF-Estetica-Dental-700x450.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.nicklauschildrens.org/NCH/media/img/hero/dental_mobile.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://corporativo.compensar.com/salud/plan-complementario/PublishingImages/Odontologia/Odontologia.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div> 
<div class="informacion">
    <h1>Ilumina tu vida con una linda sonrisa</h1>
<div class="parrafo">
    <h2>Abrimos nuestras puertas gracias a el compromiso ,diciplina y la calidad de equipo que tenemos en nuestra clinica y sobre todo en la actitud de nuestros tratamientos .</h2>
    <button>
        <a href="">Registro</a>
    </button>
</div>
</div>


@endsection
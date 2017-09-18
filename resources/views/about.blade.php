@extends('layouts.app')

@section('content')
<div class="content container">
  <div class="page-wrapper">
    <header class="page-heading clearfix">
      <h1 class="heading-title pull-left">Acerca de Nux</h1>
      <div class="breadcrumbs pull-right">
        <ul class="breadcrumbs-list">
          <li><a href="{{ url('/') }}">Home</a><i class="fa fa-angle-right"></i></li>
          <li class="current">Acerca de Nux</li>
        </ul>
      </div>
    </header>
    <div class="page-content">
      <div class="row page-row">

        <article class="welcome col-md-8 col-sm-7">
          <h3 class="title">Bienvenido a NUX</h3>
          <p><img class="img-responsive" src="{{ asset('images/Nux/nux.jpg') }}" alt="" /></p>
          <p>Nux surge como un proyecto academico con la intención de otorgar
            cursos virtuales abiertos a la comunidad NovaUniversitas. Estos cursos son
            complementarios para la formación de los estudiantes en el diía a día. Nux ofrece cursos:
          </p>
          <ul class="custom-list-style">
              <li><i class="fa fa-check"></i>Gratis y Online.</li>
              <li><i class="fa fa-check"></i>Abiertos a todos los estudiantes de NovaUniversitas.</li>
              <li><i class="fa fa-check"></i>Los estudiantes pueden inscribirse a cualquier curso sin excepción alguna.</li>
          </ul>

          <blockquote class="custom-quote">
              <p><i class="fa fa-quote-left"></i>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
              <p class="people"><span class="name">Adam Windsor</span><br><span class="title">Principle, College Green Online</span></p>
          </blockquote>

      </article><!--//page-content-->

        </div>
      </div>
    </div>
  </div>
@endsection

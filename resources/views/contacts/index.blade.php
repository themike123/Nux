@extends('layouts.app')

@section('content')

<div class="content container">
  <div class="page-wrapper">
    <header class="page-heading clearfix">
      <h1 class="heading-title pull-left">Contacto</h1>
      <div class="breadcrumbs pull-right">
        <ul class="breadcrumbs-list">
          <li><a href="{{ url('/') }}">Home</a><i class="fa fa-angle-right"></i></li>
          <li class="current">Contacto</li>
        </ul>
      </div>
    </header>
    <div class="page-content">
      <div class="row">
        <article class="contact-form col-md-8 col-sm-7  page-row">
          <h3 class="title">Establecer contacto.</h3>
          <p>Esta información será enviada al correo electrónico de NUX, posteriormente se pondrán en
            contacto con usted.
          </p>
          <form>
              <div class="form-group name">
                  <label for="name">Nombre</label>
                  <input id="name" type="text" class="form-control" placeholder="Introduzca su nombre">
              </div><!--//form-group-->
              <div class="form-group email">
                  <label for="email">Email<span class="required">*</span></label>
                  <input id="email" type="email" class="form-control" placeholder="Introduzca su email">
              </div><!--//form-group-->
              <div class="form-group phone">
                  <label for="phone">Telefono</label>
                  <input id="phone" type="tel" class="form-control" placeholder="Introduzca su telefono">
              </div><!--//form-group-->
              <div class="form-group message">
                  <label for="message">Mensaje<span class="required">*</span></label>
                  <textarea id="message" class="form-control" rows="6" placeholder="Introduzca su mensaje aquí"></textarea>
              </div><!--//form-group-->
              <button type="submit" class="btn btn-theme">Enviar</button>

          </form>
        </article><!--//contact-form-->
      </div>
      <div class="page-row">
          <article class="map-section">
              <h3 class="title">Ubicación</h3>
              <div class="gmap-wrapper" id="map">
                  <!--//You need to embed your own google map below-->
                  <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.1274896692235!2d-96.67674234993524!3d16.770331588394463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c740baa4583d9b%3A0x2cc458af0039f3ed!2sNovauniversitas!5e0!3m2!1ses-419!2ses!4v1505324150169" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div><!--//gmap-wrapper-->
          </article><!--//map-->
      </div><!--//page-row-->
    </div>
  </div>
</div>

@endsection

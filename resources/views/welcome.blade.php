@extends('layouts.app')

@section('content')
<!-- ******CONTENT****** -->
  <div id="promo-slider" class="slider flexslider">
      <ul class="slides">
          <li>
              <!--img src="{{ asset('images/slides/nova-111.jpg') }}"  alt="" /-->
              <img src="{{ asset('images/slides/slide-1.jpg') }}"  alt="" />
              <p class="flex-caption">
                  <span class="main" >Ven y únete a NUX</span>
                  <br />
                  <span class="secondary clearfix" >Elige entre más de 100 cursos en línea.</span>
              </p>
          </li>
          <li>
              <!--img src="{{ asset('images/slides/nova-22.jpg') }}"  alt="" /-->
              <img src="{{ asset('images/slides/slide-2.jpg') }}"  alt="" />
              <p class="flex-caption">
                  <span class="main" >Cursos Gratis Online</span>
                  <br />
                  <span class="secondary clearfix" >Avanza en tu carrera, mejora tu vida.</span>
              </p>
          </li>
          <li>
              <!--img src="{{ asset('images/slides/nova-33.jpg') }}"  alt="" /-->
              <img src="{{ asset('images/slides/slide-3.jpg') }}"  alt="" />
              <p class="flex-caption">
                  <span class="main" >Da un paso más</span>
                  <br />
                  <span class="secondary clearfix" >Inscribete a un curso y continúa formándote.</span>
              </p>
          </li>
          <li>
              <!--img src="{{ asset('images/slides/nova-44.jpg') }}"  alt="" /-->
              <img src="{{ asset('images/slides/slide-4.jpg') }}"  alt="" />
              <p class="flex-caption">
                  <span class="main" >Nux, el primer paso para alcanzar tus metas</span>
                  <br />
                  <span class="secondary clearfix" >Expande tus habilidades</span>
              </p>
          </li>
      </ul><!--//slides-->
  </div><!--//flexslider-->

  <section class="promo box ">
    <!--img src="{{ asset('images/nova.png') }}" class="img-responsive" alt="NovaUniversitas" width="100%" height="50px"-->
      <!--div class="col-md-9">
      <h1 class="section-heading">Why College Green</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>
      </div-->
      <!--div class="col-md-3">
          <a class="btn btn-cta" href="#"><i class="fa fa-play-circle"></i>Apply Now</a>
      </div-->
  </section><!--//promo-->

  <section class="news">
       <h1 class="section-heading text-highlight"><span class="line">Nuevos cursos</span></h1>
       <div class="carousel-controls">
           <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
           <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
       </div><!--//carousel-controls-->
       <div class="section-content clearfix">
           <div id="news-carousel" class="news-carousel carousel slide">
               <div class="carousel-inner">
                 @if(count($courses) )
                   <div class="item active">
                       @if ($courses[0])
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[0]->title}}</a></h2>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[0]->image}}"  alt="" height="100px" width="100px" />
                           <p>{{$courses[0]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[0]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                       </div><!--//news-item-->
                       @endif
                       @if (isset($courses[1]) )
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[1]->title}}</a></h2>
                           <p>{{$courses[1]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[1]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[1]->image}}"  alt="" height="100px" width="100px" />
                       </div><!--//news-item-->
                       @endif
                       @if (isset($courses[2]) )
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[2]->title}}</a></h2>
                           <p>{{$courses[2]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[2]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[2]->image}}"  alt="" height="100px" width="100px"/>
                       </div><!--//news-item-->
                       @endif
                   </div><!--//item-->
                   <div class="item">
                     @if (isset($courses[3]))
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[2]->title}}</a></h2>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[3]->image}}"  alt="" height="100px" width="100px" />
                           <p>{{$courses[2]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[3]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                       </div><!--//news-item-->
                       @endif
                       @if (isset($courses[4]))
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[4]->title}}</a></h2>
                           <p>{{$courses[4]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[4]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[4]->image}}"  alt="" height="100px" width="100px" />
                       </div><!--//news-item-->
                       @endif
                       @if (isset($courses[5]))
                       <div class="col-md-4 news-item">
                           <h2 class="title"><a href="news-single.html">{{$courses[5]->title}}</a></h2>
                           <p>{{$courses[5]->description}}</p>
                           <a class="read-more" href="{{ route('course_path',['course'=>$courses[5]->id]) }}">Leer más<i class="fa fa-chevron-right"></i></a>
                           <img class="thumb" src="{{ asset('images/courses') }}/{{$courses[5]->image}}"  alt="" height="100px" width="100px" />
                       </div><!--//news-item-->
                       @endif
                   </div><!--//item-->
                   @endif
               </div><!--//carousel-inner-->
           </div><!--//news-carousel-->
       </div><!--//section-content-->
   </section><!--//news-->
  <!--div class="row cols-wrapper">
      <div class="col-md-3">
          <section class="events">
              <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
              <div class="section-content">
                  <div class="event-item">
                      <p class="date-label">
                          <span class="month">FEB</span>
                          <span class="date-number">18</span>
                      </p>
                      <div class="details">
                          <h2 class="title">Open Day</h2>
                          <p class="time"><i class="fa fa-clock-o"></i>10:00am - 18:00pm</p>
                          <p class="location"><i class="fa fa-map-marker"></i>East Campus</p>
                      </div>
                  </div>
                  <div class="event-item">
                      <p class="date-label">
                          <span class="month">SEP</span>
                          <span class="date-number">06</span>
                      </p>
                      <div class="details">
                          <h2 class="title">E-learning at College Green</h2>
                          <p class="time"><i class="fa fa-clock-o"></i>10:00am - 16:00pm</p>
                          <p class="location"><i class="fa fa-map-marker"></i>Learning Center</p>
                      </div>
                  </div>
                  <div class="event-item">
                      <p class="date-label">
                          <span class="month">JUN</span>
                          <span class="date-number">23</span>
                      </p>
                      <div class="details">
                          <h2 class="title">Career Fair</h2>
                          <p class="time"><i class="fa fa-clock-o"></i>09:45am - 16:00pm</p>
                          <p class="location"><i class="fa fa-map-marker"></i>Library</p>
                      </div>
                  </div>
                  <div class="event-item">
                      <p class="date-label">
                          <span class="month">May</span>
                          <span class="date-number">17</span>
                      </p>
                      <div class="details">
                          <h2 class="title">Science Seminar</h2>
                          <p class="time"><i class="fa fa-clock-o"></i>14:00pm - 18:00pm</p>
                          <p class="location"><i class="fa fa-map-marker"></i>Library</p>
                      </div>
                  </div>
                  <a class="read-more" href="events.html">All events<i class="fa fa-chevron-right"></i></a>
              </div>
          </section>
      </div>
      <div class="col-md-6">
          <section class="video">
              <h1 class="section-heading text-highlight"><span class="line">Video Tour</span></h1>
              <div class="carousel-controls">
                  <a class="prev" href="#videos-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                  <a class="next" href="#videos-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
              </div>
              <div class="section-content">
                 <div id="videos-carousel" class="videos-carousel carousel slide">
                      <div class="carousel-inner">
                          <div class="item active">
                              <iframe class="video-iframe" src="//www.youtube.com/embed/r9LelXa3U_I?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                          </div>
                          <div class="item">
                              <iframe class="video-iframe" src="//www.youtube.com/embed/RcGyVTAoXEU?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                          </div>
                          <div class="item">
                              <iframe class="video-iframe" src="//www.youtube.com/embed/Ks-_Mh1QhMc?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                          </div>
                      </div>
                 </div>
                  <p class="description">Aenean feugiat a diam tempus sodales. Quisque lorem nulla, ultrices imperdiet malesuada at, suscipit vel lorem. Nulla dignissim nisi ac aliquet semper.</p>
              </div>
          </section>
      </div>
      <div class="col-md-3">
          <section class="links">
              <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
              <div class="section-content">
                  <p><a href="#"><i class="fa fa-caret-right"></i>E-learning Portal</a></p>
                  <p><a href="#"><i class="fa fa-caret-right"></i>Gallery</a></p>
                  <p><a href="#"><i class="fa fa-caret-right"></i>Job Vacancies</a></p>
                  <p><a href="#"><i class="fa fa-caret-right"></i>Contact</a></p>
              </div>
          </section>
      </div>
  </div-->
  <section class="awards">
      <div id="awards-carousel" class="awards-carousel carousel slide">
          <div class="carousel-inner">
              <div class="item active">
                  <ul class="logos">
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.utm.mx/"  target="_blank"><img class="img-responsive" src="{{ asset('images/awards/utm.png') }}"  alt="UTM" /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.umar.mx/index2.html" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/umar.png') }}"  alt="UMAR"  /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unistmo.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unistmo.png') }}"  alt="UNISTMO" /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unpa.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unpa.jpg') }}"  alt="UNPA" /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unsis.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unsis.png') }}"  alt="UNSIS" /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unsij.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unsij.png') }}"  alt="UNSIJ" /></a>
                      </li>
                  </ul><!--//slides-->
              </div><!--//item-->

              <div class="item">
                  <ul class="logos">
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unca.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unca.png') }}"  alt="UNCA"  /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.novauniversitas.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/nu.png') }}"  alt="NU"  /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.uncos.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/uncos.jpg') }}"  alt="UNCOS"  /></a>
                      </li>
                      <li class="col-md-2 col-sm-2 col-xs-4">
                          <a href="http://www.unicha.edu.mx/" target="_blank"><img class="img-responsive" src="{{ asset('images/awards/unicha.jpg') }}"  alt="UNICHA"  /></a>
                      </li>
                  </ul><!--//slides-->
              </div><!--//item-->
          </div><!--//carousel-inner-->
          <a class="left carousel-control" href="#awards-carousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
          </a>
          <a class="right carousel-control" href="#awards-carousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
          </a>

      </div>
  </section>
@endsection

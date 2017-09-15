@extends('layouts.app')

@section('content')

<div class="content container">
  <div class="page-wrapper">
    <header class="page-heading clearfix">
      <h1 class="heading-title pull-left">Política de Privacidad</h1>
      <div class="breadcrumbs pull-right">
        <ul class="breadcrumbs-list">
          <li><a href="{{ url('/') }}">Home</a><i class="fa fa-angle-right"></i></li>
          <li class="current">Política de Privacidad</li>
        </ul>
      </div>
    </header>
    <div class="page-content">
      <div class="row page-row">
        <div class="terms-wrapper col-md-8 col-sm-7">
          <div class="page-row">
            <h4 class="text-highlight">Introducción</h4>
            <p align="justify">
            Su privacidad es importante para NUX.
            Esta declaración de privacidad proporciona información personal que NUX recopila y las formas en que se utiliza esa información personal.
            </p>
          </div>

          <div class="page-row">
            <h4 class="text-highlight">Recopilación de información personal</h4>
            <p align="justify">
            Nux puede recopilar y usar los suiguientes tipos de información personal:
            <ul>
              <li>Información sobre el uso de este sitio.</li>
              <li>Información que proporcione al registrarse en este sitio.</li>
              <li>Y cualquier otra información que envíe a NUX</li>
            </ul>
            </p>
          </div>

          <div class="page-row">
            <h4 class="text-highlight">Uso de información personal</h4>
            <p>Nux puede usar su información personal para:</p>
            <ul>
              <li>Administrar este sitio web.</li>
              <li>Personalizar el sitio web para usted.</li>
              <li>Publicar información sobre usted en el sitio web.</li>
            </ul>
            <p align="justify">Donde NUX revela su información personal a sus agentes o subcontratistas para estos propósitos,
               el agente o subcontratista en cuestión estará obligado a usar esa información personal de acuerdo
                con los términos de esta declaración de privacidad.
            </p>
            <p align="justify">
              Además de las revelaciones razonablemente necesarias para los fines identificados anteriormente,
               NUX podrá revelar su información personal en la medida en que la ley así lo exija,
                en relación con cualquier procedimiento legal o procedimiento judicial futuro, y con el
                 fin de establecer, ejercer o defender sus derechos legales.
            </p>

          </div>

          <div class="page-row">
            <h4 class="text-highlight">Cómo proteger sus datos</h4>
            <p align="justify">
              NUX tomará las precauciones técnicas y organizativas razonables para prevenir la pérdida,
               mal uso o alteración de su información personal.
            </p>
            <p>
              NUX almacenará toda la información personal que proporcione [en sus servidores seguros].
            </p>
            <p align="justify">
              La información relativa a las transacciones electrónicas realizadas a través de este sitio web estará protegida por tecnología de cifrado.
            </p>
          </div>

          <div class="page-row">
              <h4 class="text-highlight">Actualización de esta declaración</h4>
              <p align="justify">
                NUX puede actualizar esta política de privacidad publicando una nueva versión en este sitio web.
              </p>
              <p align="justify">
                Debe consultar esta página de vez en cuando para asegurarse de estar familiarizado con los cambios.
              </p>
          </div>

          <div class="page-row">
            <h4 class="text-highlight">Otros sitios web</h4>
            <p>
              Este sitio web puede contener enlaces a otros sitios web.
            </p>
          </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

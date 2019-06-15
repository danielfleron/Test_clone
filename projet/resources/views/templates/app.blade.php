{{--
  ressources/views/templates/app.blade.php
  Template générale
  Variables disponibles: pas de variables
--}}
<!DOCTYPE HTML>
<html>

	 @include('templates.partials.head')
   {{-- include le fichier head.blade.php qui se trouve dans partials qui se trouve dans templates --}}

	<body data-baseURL="{{ url('/') }}">

    @include('templates.partials.header')

    @include('templates.partials.nav')

    @include('templates.partials.filter')

    @include('templates.partials.portfolio')

    @include('templates.partials.scripts')

    @include('templates.partials.preloader')

    @section('script_app')
    @show

	</body>

</html>

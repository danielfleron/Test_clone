{{--
  ./resources/views/pages/menu.blade.php
  Variables disponibles
      - $pages ARRAY(ARRAY(id, titre, ...))
 --}}

<div id="wrapper-navbar">
	<div class="navbar object">
    <div id="wrapper-bouton-icon">
              @foreach ($categorie as $categories)
              <a href="{{ url('./categories/'.$categories->id) }}">
                <div id="{{ $categories->slug }}"><img src="{{asset('/img/'.$categories->nom_icone)}}" alt="illustrator" title="Illustrator" height="28" width="28"></div>
              </a>
              @endforeach
			</div>
 	</div>
</div>

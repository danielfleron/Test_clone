{{--
  ./resources/views/pages/menu.blade.php
  Variables disponibles
      - $pages ARRAY(ARRAY(id, titre, ...))
 --}}



 <div id="wrapper-navbar">
 		<div class="navbar object">

      <div id="wrapper-bouton-icon">

        @foreach ($categories as $categorie)

        <a href="./categories/{{$categorie->id}}">
          <div id="{{ $categorie->slug }}"><img src="http://localhost/laravel/public/img/{{$categorie->image}}" alt="illustrator" title="Illustrator" height="28" width="28"></div>
        </a>
        @endforeach


 			</div>
     	</div>
     </div>






    </body>
</html>

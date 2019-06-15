
{{--
      resources/views/pages/show.blade.php
      Variables disponibles :
        $page: Pages(id, titre,...)
 --}}

 @extends('templates.app')
 @section('contenu')


 @foreach ($ressource as $ressources)
 <figure class="white">
   <a href="../ressources/{{$ressources->id}}">
     <img src="{{asset('/img/'.$ressources->nom_image.'.jpg')}}" alt="image" />
     <dl>
       <dt>{{$ressources->slug}}</dt>
       <dd>{{$ressources->description}}</dd>
     </dl>
   </a>
   @foreach($categorie as $categories)


               <div class="wrapper-file">
                   <div class="icon-file"><img src="{{asset('/img/'.$categories->nom_icone)}}" alt="image" width="21" height="21"/></div>
                     <div class="text-file">{{$categories->nom}}</div>
                 </div>

   @endforeach



 </figure>


 @endforeach
 <div id="wrapper-oldnew">
  <div class="oldnew">
      <div class="wrapper-oldnew-prev">
            <a href="{{ url('/categories') }}">	<div id="oldnew-prev"></div></a>
      </div>
         <div class="wrapper-oldnew-next">
          <a href="{{ url('/categories/5/?page=2') }}"><div id="oldnew-next"></div></a>

    </div>
     </div>
</div>
 @stop

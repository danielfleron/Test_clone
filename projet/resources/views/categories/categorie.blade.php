@foreach ($categorie as $categories)

              <div id="wrapper-part-info">

                <div class="part-info-image"><img src="{{asset('/img/'.$categories->nom_icone)}}" alt="image" width="28" height="28"/></div>
                <div id="part-info">{{$categories->nom}}</div>
                   </div>

@endforeach

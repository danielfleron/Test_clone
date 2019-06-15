
{{--
      resources/views/pages/show.blade.php
      Variables disponibles :
        $page: Pages(id, titre,...)
 --}}

 @extends('templates.app')
 @section('entete')

                 <div class="title-item">
                 	<div class="title-icon"></div>
                     <div class="title-text">{{$ressource->slug }}</div>
                     @foreach($user as $users)
                     <div class="title-text-2">{{ $ressource->date_creation->format('d/m/Y') }} by {{$users->name }}</div>
                     @endforeach
                 </div>

    <!-- Modifié par Daniel-->
    <figure class="white" id="id-ressource" data-ress="{{ $ressource->id }}" data-util="1">
         <img src="{{asset('img/'.$ressource->nom_image.'.jpg')}}" alt="" />

                                  </figure>

          <div class="wrapper-text-description">


<!--categorie !!!!-->

@foreach($categorie as $categories)


            <div class="wrapper-file">
                <div class="icon-file"><img src="{{asset('/img/icon-psdfile.svg')}}" alt="" width="21" height="21"/></div>
                  <div class="text-file">{{$categories->nom}}</div>
              </div>

@endforeach


            <div class="wrapper-weight">
              <div class="icon-weight"><img src="{{asset('img/icon-weight.svg')}}" alt="" width="20" height="23"/></div>
                <div class="text-weight">{{$ressource->poids_image}} Mo</div>
            </div>

            <div class="wrapper-desc">
              <div class="icon-desc"><img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24"/></div>
                <div class="text-desc">{{$ressource->description}} </div>
            </div>
            <div class="wrapper-download">
              <div class="icon-download"><img src="{{asset('img/icon-download.svg')}}" alt="" width="19" height="26"/></div>
                <div class="text-download"><a href="{{asset('pdf/ressources/' . $ressource->id )}}"><b>Download</b></a></div>
            </div>

              <div class="wrapper-morefrom">
                <div class="text-morefrom">More from .psd</div>
                  <div class="image-morefrom">
                    <!--Ici ma boucle-->
                    <a href="#"><div class="image-morefrom-1"><img src="{{asset('img/psd-1.jpg')}}" alt="" width="430" height="330"/></div></a>
                      <a href="#"><div class="image-morefrom-2"><img src="{{asset('img/psd-2.jpg')}}" alt="" width="430" height="330"/></div></a>
                      <a href="#"><div class="image-morefrom-3"><img src="{{asset('img/psd-3.jpg')}}" alt="" width="430" height="330"/></div></a>
                      <a href="#"><div class="image-morefrom-4"><img src="{{asset('img/psd-6.jpg')}}" alt="" width="430" height="330"/></div></a>
                  </div>
              </div>

          </div>

                  <div class="post-reply">
                      <div id="title-post-send">
                          <hr/><h2>Your comments</h2>
                      </div>


            </div>

<!-- Modifié par Daniel-->
<div id="commentaires">
            <div class="post-reply">
                <div class="image-reply-post"></div>
                <div class="name-reply-post">Igor vlademir</div>
                <div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
            </div>

              <div class="post-reply-2">
                <div class="image-reply-post-2"></div>
                <div class="name-reply-post-2">Nathan Shaw</div>
                <div class="text-reply-post-2">Well done ! I like the way you did it. Awesome ! </div>
             </div>
</div>
            <div class="post-send">
                <div id="main-post-send">
                      <div id="title-post-send">Add your comment</div>
                      @include('templates/partials/commentaires/comment-form')
                </div>
            </div>


 @stop
 @section('contenu')
@section('script_app')
  <script src="{{ asset('js/commentaires/comment.js') }}"></script>
@stop

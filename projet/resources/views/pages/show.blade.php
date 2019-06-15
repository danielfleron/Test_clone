{{--
  ressources/views/pages/show.blade.php
  Variables disponibles:
    $page: OBJ(id, nom, description, slug, created_at, updated_at)
--}}
@extends('templates.app')

@section('title')
  {{ $page->nom }}
@stop

@section('contenu')
  <h1>Coucou ! de la vue SHOW !!!</h1>
  <p>{{ $page->description }}</p>
@stop

<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Page as pagesMdl;    // utilise le model Page  que nous appelons pagesMdl
       use Illuminate\Support\Facades\View;

       class pagesController extends Controller {

         /**
          * Détails de la page $id
          * @param  integer $id [id de la page à afficher]
          * @return View      [Vue pages/show.blade.php]
          */
         public function show($id = 1){
                $page = PagesMdl::find($id);
                // return View::make('pages.show', [ 'page' => $page ] );   // charge la vue 'show' qui se trouve dans la dossier 'pages'
                // OU
                return View::make('pages.show', compact('page') );
         }

       }

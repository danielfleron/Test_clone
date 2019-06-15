<?php
       namespace App\Http\Controllers;
       use App\Http\Models\commentaires as commentairesMdl;
       use Illuminate\Support\Facades\View;

       // Pour récupérer des données GET post
       use Illuminate\Http\Request;

       class commentairesController extends Controller {

         /**
          * Ajoute un commentaire dans la base de données
          * @return
          */
         public function ajaxAdd(Request $request){
                // id,	commentaire,	date_creation,	ressource_id,	utilisateur_id,	created_at,	updated_at
                // ADD
                $addcommentaire = new CommentairesMdl;
                $addcommentaire->commentaire = $request->get('contenu');
                $addcommentaire->date_creation = now();
                $addcommentaire->ressource_id = $request->get('idressource') ;
                $addcommentaire->utilisateur_id = $request->get('idutil') ;
                $addcommentaire->created_at = now();
                $addcommentaire->updated_at = now();
                return ( $addcommentaire->save() )?1:0;

                // UPDATE
                // $commentaire = CommentairesMdl::find(2);   modifier le commentaire 2 par exemple
                // $commentaire->commentaire = 'commentaire update';
                // $commentaire->date_creation = "2019-06-01";
                // $commentaire->ressource_id = 50 ;
                // $commentaire->utilisateur_id = 5 ;
                // $commentaire->created_at = "2019-06-01";
                // $commentaire->updated_at = "2019-06-01";
                // $commentaire->save();
                // return ( $commentaire->save(); )?1:0;

                // return "blabla bla";

         }
       }

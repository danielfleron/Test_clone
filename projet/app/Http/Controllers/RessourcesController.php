<?php

namespace App\Http\Controllers;
use App\Http\Models\Categories as CategoriesMdl;
use App\Http\Models\Ressources as RessourcesMdl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use PDF;

class RessourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // recherche dans la DB

      $ressource  = DB::table('ressources')->simplePaginate(20);

      $ressource->setPath('/url');
      //$categorie = CategoriesMdl::all();
      // Retourne la vue show
      return View::make('ressources.index', ['ressource' => $ressource]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id = 1){    // id = par défaut
                $user = DB::table('ressources')
               ->join('users', 'users.id', '=', 'ressources.utilisateur_id')
               ->select('users.name')

               ->where('ressources.id', $id)

               ->get();
               $categorie = DB::table('ressources')
              ->join('categories', 'categories.id', '=', 'ressources.categorie_id')
              ->select('categories.nom')

              ->where('ressources.id', $id)

              ->get();
              $ressource= RessourcesMdl::find($id);
              return View::make('ressources.show', ['ressource' => $ressource ,'user'=>$user,'categorie'=>$categorie]);
           }

           /**
            * Export PDF
            *
            * @return $pdf
            */
           public function showPDF($id = 1)
           {
             $user = DB::table('ressources')
            ->join('users', 'users.id', '=', 'ressources.utilisateur_id')
            ->select('users.name')

            ->where('ressources.id', $id)

            ->get();
            $categorie = DB::table('ressources')
           ->join('categories', 'categories.id', '=', 'ressources.categorie_id')
           ->select('categories.nom')

           ->where('ressources.id', $id)

           ->get();
           $ressource= RessourcesMdl::find($id);

             $pdf = PDF::loadView('ressources.show_pdf', ['ressource' => $ressource ,'user'=>$user,'categorie'=>$categorie]);
             return $pdf->download('hdtuto.pdf');
           }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

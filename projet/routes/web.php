<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// ROUTES VOYAGER -----------------------------------------------------------------
/*
  Backoffice
  PATTERN : /admin
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// ROUTES AJAX -----------------------------------------------------------------
/*
  Ajax Ajouter un commentaire dans la base de données
  PATTERN : /ajax/ajaxAddComment
  CTRL: CommentairesController
  ACTION: ajaxAdd
 */
 Route::get('ajax/ajaxAddComment', [

    'as' => 'commentaires.ajax.add',

    'uses' => 'CommentairesController@ajaxAdd',

 ]);
// ROUTES STANDARDS ------------------------------------------------------------
View::composer('categories.index', function($view){
  $view->with('categorie', App\Http\Models\categories::all());
});

Route::get('/', function (){
  return view('templates.app');
});
Route::get('/categories/{id}', [

   'as' => 'categories.show',

   'uses' => 'CategoriesController@show',

]);


Route::get('/', [

   'as' => 'ressources.index',

   'uses' => 'RessourcesController@index',

]);


// ROUTES domPDF -----------------------------------------------------------------
/*
  Generate HTML to PDF
  PATTERN : /pdf/ressources/{id}
  CTRL: RessourcesController
  ACTION: showPDF
 */
Route::get('/pdf/ressources/{id}','RessourcesController@showPDF');


Route::get('/ressources/{id}', [

   'as' => 'ressources.show',

   'uses' => 'RessourcesController@show',

]);

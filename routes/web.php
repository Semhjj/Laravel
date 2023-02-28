<?php

use App\Http\Controllers\indexcontroller;
use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::get('/', function () {
//   return view('todos', [
//       'todos' => ToDo::all()
//   ]);
//});


//source routes
//index - alle opdrachten laten zien
//show - laat een opdracht zien
//create - maak nieuwe opdracht aan
//store - voeg nieuwe opdracht toe naar databse
//edit - pas een opdracht aan
//update - edit toevoegen aan database
//destroy - verwijder opdracht

//get info
//Route::get('/', [\App\Http\Controllers\indexcontroller::class, 'index']);
//
//
////form create
//Route::get('/listings/create', [\App\Http\Controllers\indexcontroller::class, 'create']);
//
////store listing
//Route::post('/listings', [\App\Http\Controllers\indexcontroller::class, 'store']);
//
////aanpassen van opdracht
//Route::get('/listings/{todo}/edit', [indexcontroller::class, 'edit']);
//
////listing updaten na het aanpassen
//Route::put('/listings/{todo}', [indexcontroller::class, 'update']);
//
////route naar verwijderpagina
////Route::get('listings/{todo}/tussenpaginaVerwijder', [indexcontroller::class, 'verwijderPagina']);
//
//
//Route::delete('/listings/{todo}', [indexcontroller::class, 'destroy']);
//
////single page verwijder
//Route::get('listings/{id}/tussenpagina', [indexcontroller::class, 'show']);

//Route::get('/listings/{id}', function ($id) {
//   return view('tussenpaginaVerwijder', [
//     'tussenpaginaVerwijder' => ToDo::find($id)
//   ]);
//});

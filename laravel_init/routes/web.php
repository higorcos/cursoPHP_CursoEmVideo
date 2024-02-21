<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Refatorando 
Route::view('/', 'welcome');

//parametro
Route::get("/a/{id}", function ($id) {
    return "" . $id;
});
//parametro opcional
Route::get("/a/{id}/{id2?}", function ($id, $id2) {
    return "" . $id . "  " . $id2;
});

//redirecinar
Route::redirect("/redi", "/");

//rotas nomeadas
Route::get("/news", function () {
    return "ROTA NOTICAS - NOMEADA";
})->name("todas as noticias");

Route::get("/novidades", function () {
    return redirect()->route('todas as noticias');
})->name("ultimas novidades");

Route::get("/pagina-dos-admins", function () {
    return redirect()->route('admin.home');
})->name("redirect pagina admin");


//Grupo de rotas
//Admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {

    Route::get("home", function () {
        return "ROTA ADMIN - Página principal";
    })->name("home");
    Route::get("list-users", function () {
        return "ROTA ADMIN - lista de usuários";
    })->name("users");
});

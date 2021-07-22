<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
use App\Models\Fruit;
use App\Models\Legume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

/* ---------------------------------- Fruit --------------------------------- */
Route::get('/fruits', [FruitController::class, "index"]);
Route::get('/fruit/{id}', [FruitController::class, "show"]);


/* --------------------------------- Legume --------------------------------- */
Route::get('/legumes', [LegumeController::class, "index"]);
Route::get('/legume/{id}', [LegumeController::class, "show"]);


/* -------------------------------------------------------------------------- */
/*                               Administration                               */
/* -------------------------------------------------------------------------- */
Route::get('/administration', function (Request $request) {
    if ($request->login == null) {
        return redirect(url()->previous());
    }
    if (str_contains($request->login, "@") == true) {
        return view('pages.backOffice.backOffice');
    }
    if (str_contains($request->login, "@") == false) {
        return redirect(url()->previous());
    }
});


// ? Fruit

Route::get('/administration/fruits', function () {
    $fruits = Fruit::all();
    return view('pages.backOffice.pages.fruit', compact('fruits'));
});


Route::get("/administration/ajouter-fruit", function () {
    return view("pages.backOffice.pages.addFruit");
});

Route::post('/administration/fruits/add', function (Request $request) {
    $store = new Fruit();
    $store->name = $request->name;
    $store->quantity = $request->quantity;
    $store->save();
    return redirect("/administration/fruits");
});

Route::get('/administration/fruit/{id}', function ($id) {
    $show = Fruit::find($id);
    return view("pages.backOffice.pages.showFruit", compact('show'));
});

Route::delete("/administration/fruit/{id}/delete", function ($id) {
    $destroy = Fruit::find($id);
    $destroy->delete();
    return redirect(url()->previous());
});


// ? Legumes

Route::get('/administration/legumes', function () {
    $legumes = Legume::all();
    return view('pages.backOffice.pages.legume', compact("legumes"));
});

Route::get("/administration/ajouter-legume", function () {
    return view("pages.backOffice.pages.addLegume");
});

Route::post('/administration/legumes/add', function (Request $request) {
    $store = new Legume();
    $store->name = $request->name;
    $store->quantity = $request->quantity;
    $store->save();
    return redirect("/administration/legumes");
});


Route::get('/administration/legume/{id}', function ($id) {
    $show = Legume::find($id);
    return view("pages.backOffice.pages.showLegume", compact('show'));
});

Route::delete("/administration/legume/{id}/delete", function ($id) {
    $destroy = Legume::find($id);
    $destroy->delete();
    return redirect(url()->previous());
});
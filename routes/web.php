<?php

use App\Http\Controllers\HeroPageController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as RoutingRoute;

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
    return view('welcome');
});

Route::get('index/page',[PagesController::class,'index'])->name('index.page');
Route::get('dashboard/page',[PagesController::class,'dashboard'])->name('dashboard.page');
Route::get('dashboard/main',[PagesController::class, 'main'])->name('dashboard.main');

// hero section start 

Route::get('hero/page',[HeroPageController::class,'hero'])->name('hero.page');
Route::put('store/hero',[HeroPageController::class, 'store'])->name('store.hero');
Route::get('list/page/hero',[HeroPageController::class, 'list'])->name('list.page.hero');
Route::get('edit/hero/{id}',[HeroPageController::class, 'edit'])->name('edit.hero');
Route::put('update/hero/{id}',[HeroPageController::class, 'update'])->name('update.hero');
Route::delete('delete/hero/{id}',[HeroPageController::class, 'delete'])->name('delete.hero');




<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Taxonomy;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::get('/taxonomies/all', function (Request $request) {

     $data = [];
     foreach (Taxonomy::all() as $taxonomy) {
         $data[$taxonomy->handle()] = $taxonomy->title();
     }

     return json_encode(['data' => $data]);
 });

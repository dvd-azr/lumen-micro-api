<?php
ini_set('memory_limit', '2048M');

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', function () use ($router) {
    return App\Models\User::all();
});
$router->get('/kode-wilayah', function () use ($router) {

    // $json = file_get_contents(storage_path('app\data\wilayah_2022.json'));
    // $objs = json_decode($json, true);

    // $chunks = collect($objs)->chunk(500);
    // foreach ($chunks as $chunk) {
    //     DB::table('wilayah')->insert($chunk->toArray());
    // }

    // dd("Finished adding data in wilayah table");
    // return App\Models\Wilayah::all();
    return App\Models\Wilayah::paginate(10);
});
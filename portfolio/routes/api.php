<?php

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
use App\Models\Qualification;
use App\Models\Project;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Découverte API

// Route::get('/skill', function () {
//         header("Access-Control-Allow-Origin: *");
//         header('Access-Control-Allow-Methods: GET');
//         return Skill::get();
// });

Route::middleware('auth:api')->get('/user', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return User::get();
});

Route::middleware('auth:api')->get('/skill', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Skill::get();
});

Route::middleware('auth:api')->get('/qualification', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Qualification::get();
});

Route::middleware('auth:api')->get('/project', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Project::get();
});
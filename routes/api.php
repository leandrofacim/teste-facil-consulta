<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::group(['prefix' => 'cidades'], function () {
    Route::get('{id_cidade}/medicos', 'App\Http\Controllers\MedicoController@listaMedicosPorCidade');
});

Route::group(['prefix' => 'medicos'], function () {
    Route::post('{id_medico}/pacientes', 'App\Http\Controllers\MedicoController@vincularPacienteMedico');
    Route::get('{id_medico}/pacientes', 'App\Http\Controllers\PacienteController@pacientePorMedico')->middleware('auth');
});


Route::resource('medicos', 'App\Http\Controllers\MedicoController', ['except' => ['create', 'edit']]);
Route::resource('cidades', 'App\Http\Controllers\CidadeController', ['except' => ['create', 'edit']]);
Route::resource('pacientes', 'App\Http\Controllers\PacienteController', ['except' => ['create', 'edit']])->middleware('auth');

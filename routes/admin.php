<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\OperadorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('operadores', function () {
    return view('welcome');
});

Route::get('operadores', ['as' => 'admin.operadores', 'uses' => 'Admin\OperadorController@index']);


/*START EMPRESA*/
Route::prefix('operador')->group(function () {
    Route::get('index', ['as' => 'admin.operador.index', 'uses' => 'Admin\OperadorController@index']);
    Route::get('create', ['as' => 'admin.operador.create', 'uses' => 'Admin\OperadorController@create']);
    Route::post('store', ['as' => 'admin.operador.store', 'uses' => 'Admin\OperadorController@store']);
    Route::get('show/{id}', ['as' => 'admin.operador.show', 'uses' => 'Admin\OperadorController@show']);
    Route::get('edit/{id}', ['as' => 'admin.operador.edit', 'uses' => 'Admin\OperadorController@edit']);
    Route::post('update/{id}', ['as' => 'admin.operador.update', 'uses' => 'Admin\OperadorController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.operador.destroy', 'uses' => 'Admin\OperadorController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.operador.purge', 'uses' => 'Admin\OperadorController@purge']);
});

/*END EMPRESA*/


/*START TELEFONE*/
Route::prefix('telefone')->group(function () {
    Route::get('index', ['as' => 'admin.telefone.index', 'uses' => 'Admin\TelefoneController@index']);
    Route::get('create', ['as' => 'admin.telefone.create', 'uses' => 'Admin\TelefoneController@create']);
    Route::post('store', ['as' => 'admin.telefone.store', 'uses' => 'Admin\TelefoneController@store']);
    Route::get('show/{id}', ['as' => 'admin.telefone.show', 'uses' => 'Admin\TelefoneController@show']);
    Route::get('edit/{id}', ['as' => 'admin.telefone.edit', 'uses' => 'Admin\TelefoneController@edit']);
    Route::post('update/{id}', ['as' => 'admin.telefone.update', 'uses' => 'Admin\TelefoneController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.telefone.destroy', 'uses' => 'Admin\TelefoneController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.telefone.purge', 'uses' => 'Admin\TelefoneController@purge']);
});

/*END TELEFONE*/

/*START TELEFONE*/
Route::prefix('ponto-focal')->group(function () {
    Route::get('index', ['as' => 'admin.ponto_focal.index', 'uses' => 'Admin\PontoFocalController@index']);
    Route::get('create', ['as' => 'admin.ponto_focal.create', 'uses' => 'Admin\PontoFocalController@create']);
    Route::post('store', ['as' => 'admin.ponto_focal.store', 'uses' => 'Admin\PontoFocalController@store']);
    Route::get('show/{id}', ['as' => 'admin.ponto_focal.show', 'uses' => 'Admin\PontoFocalController@show']);
    Route::get('edit/{id}', ['as' => 'admin.ponto_focal.edit', 'uses' => 'Admin\PontoFocalController@edit']);
    Route::post('update/{id}', ['as' => 'admin.ponto_focal.update', 'uses' => 'Admin\PontoFocalController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.ponto_focal.destroy', 'uses' => 'Admin\PontoFocalController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.ponto_focal.purge', 'uses' => 'Admin\PontoFocalController@purge']);
});

/*END TELEFONE*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

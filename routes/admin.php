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


/*START OPERADOR*/
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

/*END OPERADOR*/


/*START CategoriaTituloHabitante*/
Route::prefix('categoria_titulo_habitante')->group(function () {
    Route::get('index', ['as' => 'admin.categoria_titulo_habitante.index', 'uses' => 'Admin\CategoriaTituloHabitanteController@index']);
    Route::get('create', ['as' => 'admin.categoria_titulo_habitante.create', 'uses' => 'Admin\CategoriaTituloHabitanteController@create']);
    Route::post('store', ['as' => 'admin.categoria_titulo_habitante.store', 'uses' => 'Admin\CategoriaTituloHabitanteController@store']);
    Route::get('show/{id}', ['as' => 'admin.categoria_titulo_habitante.show', 'uses' => 'Admin\CategoriaTituloHabitanteController@show']);
    Route::get('edit/{id}', ['as' => 'admin.categoria_titulo_habitante.edit', 'uses' => 'Admin\CategoriaTituloHabitanteController@edit']);
    Route::post('update/{id}', ['as' => 'admin.categoria_titulo_habitante.update', 'uses' => 'Admin\CategoriaTituloHabitanteController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.categoria_titulo_habitante.destroy', 'uses' => 'Admin\CategoriaTituloHabitanteController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.categoria_titulo_habitante.purge', 'uses' => 'Admin\CategoriaTituloHabitanteController@purge']);
});

/*END CategoriaTituloHabitante*/



/*START CategoriaServico*/
Route::prefix('categoria_servico')->group(function () {
    Route::get('index', ['as' => 'admin.categoria_servico.index', 'uses' => 'Admin\CategoriaServicoController@index']);
    Route::get('create', ['as' => 'admin.categoria_servico.create', 'uses' => 'Admin\CategoriaServicoController@create']);
    Route::post('store', ['as' => 'admin.categoria_servico.store', 'uses' => 'Admin\CategoriaServicoController@store']);
    Route::get('show/{id}', ['as' => 'admin.categoria_servico.show', 'uses' => 'Admin\CategoriaServicoController@show']);
    Route::get('edit/{id}', ['as' => 'admin.categoria_servico.edit', 'uses' => 'Admin\CategoriaServicoController@edit']);
    Route::post('update/{id}', ['as' => 'admin.categoria_servico.update', 'uses' => 'Admin\CategoriaServicoController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.categoria_servico.destroy', 'uses' => 'Admin\CategoriaServicoController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.categoria_servico.purge', 'uses' => 'Admin\CategoriaServicoController@purge']);
});

/*END CategoriaServico*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

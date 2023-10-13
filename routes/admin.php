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

/*START FrequenciaNumeracao*/
Route::prefix('frequencia_numeracao')->group(function () {
    Route::get('index', ['as' => 'admin.frequencia_numeracao.index', 'uses' => 'Admin\FrequenciaNumeracaoController@index']);
    Route::get('create', ['as' => 'admin.frequencia_numeracao.create', 'uses' => 'Admin\FrequenciaNumeracaoController@create']);
    Route::post('store', ['as' => 'admin.frequencia_numeracao.store', 'uses' => 'Admin\FrequenciaNumeracaoController@store']);
    Route::get('show/{id}', ['as' => 'admin.frequencia_numeracao.show', 'uses' => 'Admin\FrequenciaNumeracaoController@show']);
    Route::get('edit/{id}', ['as' => 'admin.frequencia_numeracao.edit', 'uses' => 'Admin\FrequenciaNumeracaoController@edit']);
    Route::post('update/{id}', ['as' => 'admin.frequencia_numeracao.update', 'uses' => 'Admin\FrequenciaNumeracaoController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.frequencia_numeracao.destroy', 'uses' => 'Admin\FrequenciaNumeracaoController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.frequencia_numeracao.purge', 'uses' => 'Admin\FrequenciaNumeracaoController@purge']);
});

/*END FrequenciaNumeracao*/


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

/*START PONTO FOCAL*/
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

/*END PONTO FOCAL*/

/*START MORADA SEDE*/
Route::prefix('morada-sede')->group(function () {
    Route::get('index', ['as' => 'admin.morada_sede.index', 'uses' => 'Admin\MoradaSedeController@index']);
    Route::get('create', ['as' => 'admin.morada_sede.create', 'uses' => 'Admin\MoradaSedeController@create']);
    Route::post('store', ['as' => 'admin.morada_sede.store', 'uses' => 'Admin\MoradaSedeController@store']);
    Route::get('show/{id}', ['as' => 'admin.morada_sede.show', 'uses' => 'Admin\MoradaSedeController@show']);
    Route::get('edit/{id}', ['as' => 'admin.morada_sede.edit', 'uses' => 'Admin\MoradaSedeController@edit']);
    Route::post('update/{id}', ['as' => 'admin.morada_sede.update', 'uses' => 'Admin\MoradaSedeController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.morada_sede.destroy', 'uses' => 'Admin\MoradaSedeController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.morada_sede.purge', 'uses' => 'Admin\MoradaSedeController@purge']);
});

/*END MORADA SEDE*/

/*START EMAIL*/
Route::prefix('email')->group(function () {
    Route::get('index', ['as' => 'admin.email.index', 'uses' => 'Admin\EmailController@index']);
    Route::get('create', ['as' => 'admin.email.create', 'uses' => 'Admin\EmailController@create']);
    Route::post('store', ['as' => 'admin.email.store', 'uses' => 'Admin\EmailController@store']);
    Route::get('show/{id}', ['as' => 'admin.email.show', 'uses' => 'Admin\EmailController@show']);
    Route::get('edit/{id}', ['as' => 'admin.email.edit', 'uses' => 'Admin\EmailController@edit']);
    Route::post('update/{id}', ['as' => 'admin.email.update', 'uses' => 'Admin\EmailController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.email.destroy', 'uses' => 'Admin\EmailController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.email.purge', 'uses' => 'Admin\EmailController@purge']);
});

/*END EMAIL*/

/*START EMAIL*/
Route::prefix('serviço-licenciado')->group(function () {
    Route::get('index', ['as' => 'admin.servico_licenciado.index', 'uses' => 'Admin\ServicoLicenciadoController@index']);
    Route::get('create', ['as' => 'admin.servico_licenciado.create', 'uses' => 'Admin\ServicoLicenciadoController@create']);
    Route::post('store', ['as' => 'admin.servico_licenciado.store', 'uses' => 'Admin\ServicoLicenciadoController@store']);
    Route::get('show/{id}', ['as' => 'admin.servico_licenciado.show', 'uses' => 'Admin\ServicoLicenciadoController@show']);
    Route::get('edit/{id}', ['as' => 'admin.servico_licenciado.edit', 'uses' => 'Admin\ServicoLicenciadoController@edit']);
    Route::post('update/{id}', ['as' => 'admin.servico_licenciado.update', 'uses' => 'Admin\ServicoLicenciadoController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.servico_licenciado.destroy', 'uses' => 'Admin\ServicoLicenciadoController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.servico_licenciado.purge', 'uses' => 'Admin\ServicoLicenciadoController@purge']);
});

/*END EMAIL*/

/*START EMAIL*/
Route::prefix('motivo-revogação-licença')->group(function () {
    Route::get('index', ['as' => 'admin.motivo_revogacao_licenca.index', 'uses' => 'Admin\MotivoRevogacaoLicencaController@index']);
    Route::get('create', ['as' => 'admin.motivo_revogacao_licenca.create', 'uses' => 'Admin\MotivoRevogacaoLicencaController@create']);
    Route::post('store', ['as' => 'admin.motivo_revogacao_licenca.store', 'uses' => 'Admin\MotivoRevogacaoLicencaController@store']);
    Route::get('show/{id}', ['as' => 'admin.motivo_revogacao_licenca.show', 'uses' => 'Admin\MotivoRevogacaoLicencaController@show']);
    Route::get('edit/{id}', ['as' => 'admin.motivo_revogacao_licenca.edit', 'uses' => 'Admin\MotivoRevogacaoLicencaController@edit']);
    Route::post('update/{id}', ['as' => 'admin.motivo_revogacao_licenca.update', 'uses' => 'Admin\MotivoRevogacaoLicencaController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.motivo_revogacao_licenca.destroy', 'uses' => 'Admin\MotivoRevogacaoLicencaController@destroy']);
    Route::get('purge/{id}', ['as' => 'admin.motivo_revogacao_licenca.purge', 'uses' => 'Admin\MotivoRevogacaoLicencaController@purge']);
});

/*END EMAIL*/






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

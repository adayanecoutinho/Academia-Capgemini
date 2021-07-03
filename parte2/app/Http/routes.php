<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rota do Home
Route::get('/', function () {
    //session_unset()
    return view('welcome');
})->name('home');

//Rotas do Cadastro
Route::get('/cadastro', 'CadastroController@lista')->name('cadastro');
Route::post('/enviar', function(Illuminate\Http\Request $request){ 
    
    if($request->get('anuncio') == '' || $request->get('cliente') == '' || $request->get('dtinicio') == '' || $request->get('dtfim') == '' 
    || $request->get('investimento') == ''){
        session()->now('obrigatorio', 1);
        return view('cadastro');
    }    

    $cadastro                = new App\Cadastro();
    $cadastro->nome_anuncio  = $request->get('anuncio');
    $cadastro->cliente       = $request->get('cliente');
    $cadastro->dt_inicio     = date('Y-d-m' , strtotime($request->get('dtinicio')));
    $cadastro->dt_fim        = date('Y-d-m' , strtotime($request->get('dtfim')));
    $cadastro->invest_diario = $request->get('investimento');

    if ($cadastro->save()){
        session()->now('status', 1);
    }
        
    return view('cadastro');            
    
})->name('enviar');

Route::post('/voltar', function () {
    return view('welcome');
})->name('voltar');


// rotas do Relatorio
Route::get('/filtrorelatorio', 'RelatorioController@lista')->name('filtrorelatorio');
Route::post('/relatorio', function(Illuminate\Http\Request $request){ 

    $cadastro = new App\Cadastro();

    if($request->get('cliente') != ''){
        $condicoes = ['cliente' => $request->get('cliente')];
    }

    if($request->get('dt_inicio') != '' && $request->get('dt_fim') != ''){
        $condicoes = ['dt_inicio' => date('Y-d-m' , strtotime($request->get('dtinicio'))), 'dt_fim' => ate('Y-d-m' , strtotime($request->get('dtfim')))];
    }

    if($request->get('dtinicio') != '' && $request->get('dtfim') == ''){
        session()->now('obrigatorio', 1);
        return view('filtrorelatorio');

    }elseif($request->get('dtinicio') == '' && $request->get('dtfim') != ''){
        session()->now('obrigatorio', 1);
        return view('filtrorelatorio');
    }
 
    $result = $cadastro::where($condicoes)->get();

    foreach($result as $r){

        $dias = date_diff(date_create_from_format('Y-m-d',$r['dt_fim']),date_create_from_format('Y-m-d',$r['dt_inicio']));
        var_dump($dias);
        die($dias['days']);


    }

    return view('resultrelatorio')->with('results', $result);
 
})->name('relatorio');
Route::get('/resultrelatorio', 'RelatorioController@lista')->name('resultrelatorio');
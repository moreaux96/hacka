<?php

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
    return redirect('login');
});

// ==========================  ALUNOS =============================================
Route::get('/sala/{id}', 'SalaController@getSala');

Route::post('/respostas', 'loginController@respostaAluno');
//=====================================================================================

//=========================  CLASSE ===================================================
Route::get('/minha_area', function () {
    return view('minha_area');
});

Route::get('/avaliar', 'AvaliacaoController@getAvalicao');
Route::post('/avaliar', 'AvaliacaoController@postAvalicao');


//======================================================================================

// ==================================IMAGEM E PERGUNTAS ==================================
Route::get('/perguntas_aluno', function () {
    return view('perguntas_aluno');
});

Route::post('/uploadimagem','loginController@postImagem');

//======================================================================================

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/professor', 'loginController@postLogin')->name('/login/professor');

Route::get('/perguntas_aluno', function () {
    return view('perguntas_aluno');
});
Route::get('/salas', "SalasController@getSalas");

Route::get('/obrigado', function () {
    return view('obrigado');
});


Route::post('/obrigadoProf','loginController@postObrigado');



Route::get('/camera', function () {
    return view('camera');
});




Route::post('/foto/','uploadPicture@postImages');

Route::get('/base64/{oi}','uploadPicture@convertTObase64');
Route::post('/meuAluno', 'RelatorioAlunoController@postRelatorioAluno');

Route::get('alunos/{id}', 'AlunosController@getAlunos');


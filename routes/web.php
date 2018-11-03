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
    return view('welcome');
});

// ==========================  ALUNOS =============================================
Route::get('/primeiro', function () {
    return view('primeiro');
});

Route::post('/respostas', 'loginController@respostaAluno');
//=====================================================================================

//=========================  CLASSE ===================================================
Route::get('/minha_area', function () {
    return view('minha_area');
});

Route::get('/avaliar', 'loginController@getAvalicao');

//======================================================================================

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/professor', 'loginController@postLogin');

    Route::get('/perguntas_aluno', function () {
    return view('perguntas_aluno');
});
Route::get('/salas', function () {
    return view('salas');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});


Route::post('/obrigadoProf','loginController@postObrigado');



Route::get('/camera', function () {
    return view('camera');
});




Route::post('/foto/','uploadPicture@postImages');

Route::get('/base64/{oi}','uploadPicture@convertTObase64');
Route::get('/meusalunos', function () {
    return view('meusalunos');
});

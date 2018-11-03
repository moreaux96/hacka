<?php

namespace App\Http\Controllers;

use App\Model\ClasseModel;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    //
    public function getSalas(){
        $classes = ClasseModel::where('id','<>','')->get();
        dd($classes);
        foreach ($classes as $classe) {
            $classeArray[] = ['id' => $classe->id, 'descricao' => $classe->descricao];
        }
        return view('salas', ['classes' => $classeArray]);
    }
}

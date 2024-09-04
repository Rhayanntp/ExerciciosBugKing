<?php

namespace App\service;
use App\Models\Tarefa;
use GuzzleHttp\Psr7\Request;

class TarefaService
    {
public function getAll(){
    $Tarefa = Tarefa::all();
    return [
        'status' => true,
        'menssagem' => 'pesquisa efetuada com sucesso',
        'data' => $Tarefa

    ];

}

}

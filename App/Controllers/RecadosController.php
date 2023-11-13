<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Repositories\RecadosRepository;

class RecadosController {

    private mixed $container;
    
    private RecadosRepository $repository;

    public function __construct($container)
    {
        $this->container = $container;
        $this->repository = new RecadosRepository();
    }
    
    //Adicione seus métodos aqui:
    

}

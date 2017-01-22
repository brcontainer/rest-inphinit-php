<?php
namespace Controller;

use Inphinit\App;
use Inphinit\Response;
use Inphinit\Routing\Route;

class Usuario
{
    public function __construct()
    {
        Response::type('application/json');
    }

    // acesse via GET http://site/usuario/
    public function index()
    {
        //O metodo json só criei pra facilitar
        $this->json(array(
            'response' => 'Olá, mundo!'
        ));
    }

    // acesse via GET http://site/usuario/create
    public function create()
    {
        $this->json(array(
            'response' => 'criou algo'
        ));
    }

    // acesse via POST http://site/usuario/
    public function store()
    {
        $this->json(array(
            'response' => 'salvou dados do usuário'
        ));
    }

    // acesse via GET http://site/usuario/show/<digite o nome ou ID>
    public function show($id)
    {
        $this->json(array(
            'response' => 'exibir dados usuário: ' . $id
        ));
    }

    // acesse via GET http://site/usuario/show/<digite o nome ou ID>/edit
    public function edit($id)
    {
        $this->json(array(
            'response' => 'editar usuário: ' . $id
        ));
    }

    // acesse via PUT http://site/usuario/<digite o nome ou ID>
    public function update($id)
    {
        $this->json(array(
            'response' => 'atualizar usuário: ' . $id
        ));
    }

    // acesse via DELETE http://site/usuario/<digite o nome ou ID>
    public function destroy($id)
    {
        $this->json(array(
            'response' => 'deletar usuário: ' . $id
        ));
    }

    private function json($saida)
    {
        //Só envia saida depois do evento ready
        App::on('ready', function() use ($saida) {
            echo json_encode($saida);
        });
    }
}

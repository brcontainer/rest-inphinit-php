<?php
namespace Controller;

use Inphinit\App;
use Inphinit\Response;
use Inphinit\Routing\Route;

class Photo
{
    public function __construct()
    {
        Response::type('application/json');
    }

    // acesse via GET http://site/photo/
    public function index()
    {
        //O metodo json só criei pra facilitar
        $this->json(array(
            'response' => 'Olá, mundo!'
        ));
    }

    // acesse via GET http://site/photo/create
    public function create()
    {
        $this->json(array(
            'response' => 'criou algo'
        ));
    }

    // acesse via POST http://site/photo/
    public function store()
    {
        $this->json(array(
            'response' => 'enviou uma foto'
        ));
    }

    // acesse via GET http://site/photo/show/<digite o nome ou ID>
    public function show($id)
    {
        $this->json(array(
            'response' => 'exibir foto: ' . $id
        ));
    }

    // acesse via GET http://site/photo/show/<digite o nome ou ID>/edit
    public function edit($id)
    {
        $this->json(array(
            'response' => 'editar foto: ' . $id
        ));
    }

    // acesse via PUT http://site/photo/<digite o nome ou ID>
    public function update($id)
    {
        $this->json(array(
            'response' => 'atualizar foto: ' . $id
        ));
    }

    // acesse via DELETE http://site/photo/<digite o nome ou ID>
    public function destroy($id)
    {
        $this->json(array(
            'response' => 'deletar foto: ' . $id
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

<?php
namespace Controller;

use Inphinit\App;
use Inphinit\Response;
use Inphinit\Routing\Route;

class Photo
{
    // acesse via GET http://site/photo/
    public function index()
    {
        return json_encode(array(
            'response' => 'Olá, mundo!'
        ));
    }

    // acesse via GET http://site/photo/create
    public function create()
    {
        return json_encode(array(
            'response' => 'criou algo'
        ));
    }

    // acesse via POST http://site/photo/
    public function store()
    {
        return json_encode(array(
            'response' => 'enviou uma foto'
        ));
    }

    // acesse via GET http://site/photo/show/<digite o nome ou ID>
    public function show($id)
    {
        return json_encode(array(
            'response' => 'exibir foto: ' . $id
        ));
    }

    // acesse via GET http://site/photo/show/<digite o nome ou ID>/edit
    public function edit($id)
    {
        return json_encode(array(
            'response' => 'editar foto: ' . $id
        ));
    }

    // acesse via PUT http://site/photo/<digite o nome ou ID>
    public function update($id)
    {
        return json_encode(array(
            'response' => 'atualizar foto: ' . $id
        ));
    }

    // acesse via DELETE http://site/photo/<digite o nome ou ID>
    public function destroy($id)
    {
        return json_encode(array(
            'response' => 'deletar foto: ' . $id
        ));
    }
}

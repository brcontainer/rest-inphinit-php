<?php
namespace Controller;

use Inphinit\App;
use Inphinit\Routing\Route;

class Usuario
{
    // acesse via GET http://site/usuario/
    public function index()
    {
        return json_encode(array(
            'response' => 'Olá, mundo!'
        ));
    }

    // acesse via GET http://site/usuario/create
    public function create()
    {
        return json_encode(array(
            'response' => 'criou algo'
        ));
    }

    // acesse via POST http://site/usuario/
    public function store()
    {
        return json_encode(array(
            'response' => 'salvou dados do usuário'
        ));
    }

    // acesse via GET http://site/usuario/show/<digite o nome ou ID>
    public function show($id)
    {
        return json_encode(array(
            'response' => 'exibir dados usuário: ' . $id
        ));
    }

    // acesse via GET http://site/usuario/show/<digite o nome ou ID>/edit
    public function edit($id)
    {
        return json_encode(array(
            'response' => 'editar usuário: ' . $id
        ));
    }

    // acesse via PUT http://site/usuario/<digite o nome ou ID>
    public function update($id)
    {
        return json_encode(array(
            'response' => 'atualizar usuário: ' . $id
        ));
    }

    // acesse via DELETE http://site/usuario/<digite o nome ou ID>
    public function destroy($id)
    {
        return json_encode(array(
            'response' => 'deletar usuário: ' . $id
        ));
    }
}

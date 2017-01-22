<?php
use Inphinit\App;
use Inphinit\Request;
use Inphinit\Response;
use Inphinit\Routing\Route;
use Inphinit\Experimental\Routing\Rest;
use Inphinit\Experimental\Routing\Group;

/*
    Essa parte é opcional
 */

App::on('changestatus', function ($status, $msg) {
    if ($status === 503) {
        Response::type('application/json');

        echo json_encode(array(
            'error' => 'This site is currently down for maintenance and should be back soon!'
        ));
    } elseif (in_array($status, array(401, 403, 404, 500, 501))) {
        Response::type('application/json');

        echo json_encode(array(
            'error'   => $msg ? $msg : 'This page is not reachable',
            'details' => array(
                'method' => $_SERVER['REQUEST_METHOD'],
                'path'   => Request::path(),
                'route'  => Request::path(true),
                'status' => $status
            )
        ));

        exit;
    }
});

//Apenas para exibir a index como um guia
Route::set('ANY', '/', 'Home:index');

/*
    Adiciona o prefixo /photo para que todas urls do REST precisem acessar como:
    * http://site/foo/bar/photo
    * http://site/foo/bar/photo/create
    * http://site/foo/bar/photo/delete/id
*/

Group::create()->path('/photo/')->then(function() {
    //Cria rotas do REST
    Rest::create('Photo')->prepare();
})->prepare();

Group::create()->path('/usuario/')->then(function() {
    //Cria rotas do REST
    Rest::create('Usuario')->prepare();
})->prepare();

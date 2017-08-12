<?php
namespace Controller;

use Inphinit\Request;
use Inphinit\Viewing\View;

class Home
{
    public function index()
    {
        $host  = Request::is('secure') ? 'https://' : 'http://';
        $host .= Request::header('host');

        View::render('home', array(
            'host' => $host,
            'rootpath' => Request::path()
        ));
    }
}

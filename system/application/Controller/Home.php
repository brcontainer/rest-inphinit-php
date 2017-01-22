<?php
namespace Controller;

use Inphinit\View;
use Inphinit\Request;

class Home
{
    public function index()
    {
        View::render('home', array(
            'rootpath' => Request::path()
        ));
    }
}

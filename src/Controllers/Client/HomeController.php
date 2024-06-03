<?php

namespace Asus\MvcCrud1\Controllers\Client;

use Asus\MvcCrud1\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Hoanntph45196';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}

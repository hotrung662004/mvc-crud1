<?php

namespace Asus\MvcCrud\Controllers\Client;

use Asus\MvcCrud\Commons\Controller;

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

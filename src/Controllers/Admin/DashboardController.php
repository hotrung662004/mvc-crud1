<?php


namespace Asus\MvcCrud1\Controllers\Admin;

use Asus\MvcCrud1\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
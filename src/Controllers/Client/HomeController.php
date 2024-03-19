<?php

namespace Ducan\Webstore\Controllers\Client;

use Ducan\Webstore\Common\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->renderViewClient('home');
    }
}
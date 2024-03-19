<?php

namespace Ducan\Webstore\Common;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewClient($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Client';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
}
<?php

namespace App\Controller;

use App\Pages\Renderer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(Request $request): Response
    {
        return Renderer::render_template($request);
    }
}

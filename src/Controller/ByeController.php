<?php

namespace App\Controller;

use App\Pages\Renderer;
use Symfony\Component\HttpFoundation\Response;

class ByeController
{
    public function index($request): Response
    {
        return Renderer::render_template($request);
    }
}
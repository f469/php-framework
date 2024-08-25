<?php

namespace App\Controller;

use App\Pages\Renderer;
use Symfony\Component\HttpFoundation\Response;

class FormController
{
    public function index($request): Response
    {
        return Renderer::render_template($request);
    }
}
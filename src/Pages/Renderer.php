<?php

namespace App\Pages;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class Renderer
{
    public static function render_template(Request $request): Response
    {
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf(__DIR__ . '/%s.php', $_route);

        return new Response(ob_get_clean());
    }
}

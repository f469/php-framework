<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use App\Controller\HelloController;
use App\Pages\Renderer;
use App\Controller\FormController;
use App\Controller\ByeController;

$request = Request::createFromGlobals();

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello', [
    '_controller' => [new HelloController(), 'index']
]));
$routes->add('form', new Route('/form', [
    '_controller' => [new FormController(), 'index']
]));
$routes->add('bye', new Route('/bye', [
    '_controller' => [new ByeController(), 'index']
]));

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
    $request->attributes->add($matcher->match($request->getPathInfo()));
    $response = call_user_func($request->attributes->get('_controller'), $request);
} catch (ResourceNotFoundException $exception) {
    $response = new Response('Not Found', 404);
} catch (Exception $exception) {
    $response = new Response('An error occurred', 500);
}

$response->send();

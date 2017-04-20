<?php

namespace SilexApp\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction(Application $app, Request $request, $name)
    {
        $content = $app['twig']->render('hello.twig', ['user' => $name]);
        $response = new Response();
        $response->setStatusCode($response::HTTP_OK);
        $response->headers->set('Content-type', 'text/html');
        $response->setContent($content);
        return $response;
    }
}
<?php

namespace SilexApp\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginUserController
{
    public function loginAction(Application $app, Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (false === $this->validCredentials($email, $password)) {
            $content = $app['twig']->render('login.twig');
            return new Response(
                $content, Response::HTTP_FORBIDDEN);
        }
        return new RedirectResponse('/');
    }

    private function validCredentials($email, $password)
    {
        return true;
    }
}
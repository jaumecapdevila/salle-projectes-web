<?php

namespace SilexApp\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistreEmpleatController
{
    public function registreEmpleat(Application $app, Request $request)
    {
        $edat = $request->get('edat');
        $nom = $request->get('nom');

        if ($edat > 25) {
            $tipus = 'Senior';
        } else {
            $tipus = 'Junior';
        }

        $errors = $this->validaCamps($nom, $edat);

        if (false === empty($errors)) {
            $content = $app['twig']->render('registre.twig', [
                'errors' => $errors
            ]);
            return new Response(
                $content, Response::HTTP_BAD_REQUEST);
        }

        $this->registreUsuariAlSistema($nom, $edat, $tipus);

        $content = $app['twig']->render('registre.twig');
        return new Response($content, Response::HTTP_OK);
    }

    private function registreUsuariAlSistema($nom, $edat, $tipus)
    {
        return true;
    }

    private function validaCamps($nom, $edat)
    {
        $errors = [];
        return $errors;
    }
}
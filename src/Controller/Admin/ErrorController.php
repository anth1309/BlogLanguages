<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ErrorController extends AbstractController
{


    public function show(FlattenException $flattenException, Environment $environment): Response
    {
        $view = "bundles/TwigBundle/Exeption/error{$flattenException->getStatusCode()}.html.twig";
        if (!$environment->getLoader()->exists($view)) {
            $view = "bundles/TwigBundle/Exeption/error.html.twig";
        }
        return $this->render($view);
    }
}

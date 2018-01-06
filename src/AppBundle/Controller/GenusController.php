<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class GenusController
 * @package AppBundle\Controller
 */
class GenusController
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return new Response('The genus : '.$genusName);
    }

}
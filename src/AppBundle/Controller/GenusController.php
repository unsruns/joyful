<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class GenusController
 * @package AppBundle\Controller
 */
class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return $this->render('genus/show.html.twig',[
            'name'      =>      $genusName
        ]);
    }

}
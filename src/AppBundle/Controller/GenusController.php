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
        $notes      =       [   'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'Accusamus aspernatur commodi cumque deleniti doloremque ea',
                                ' reprehenderit sequi vitae, voluptate voluptates voluptatibus?'];

        return $this->render('genus/show.html.twig',[
            'name'      =>      $genusName,
            'notes'     =>      $notes

        ]);
    }

}
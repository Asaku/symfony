<?php

namespace AppBundle\Controller\Back;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class IndexController
 * @package AppBundle\Controller\Back
 *
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="back_homepage")
     */
    public function indexAction()
    {
        return $this->render('back/index/index.html.twig', []);
    }
}

<?php

namespace FeedBackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function testAction()
    {
        return $this->render('@FeedBack/Default/index.html.twig');
    }
}

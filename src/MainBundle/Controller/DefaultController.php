<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index_page")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MainBundle:Post');
    	$posts = $repository->findAll();

        return $this->render('MainBundle:Default:index.html.twig',array(
            'posts' => $posts,
        ));
    }
}

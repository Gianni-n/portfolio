<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioBundle:Default:index.html.twig');
    }

    public function projectsAction()
    {
        return $this->render('PortfolioBundle:Default:projects.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('PortfolioBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('PortfolioBundle:Default:contact.html.twig');
    }
}
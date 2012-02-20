<?php

namespace Acme\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeMainBundle:Default:index.html.twig');
    }
    
    public function articlesAction()
    {
        return $this->render('AcmeMainBundle:Default:article.html.twig');
    }
    
    public function tutorialsAction()
    {
        return $this->render('AcmeMainBundle:Default:tutorials.html.twig');
    }
    
    public function forumAction()
    {
        return $this->render('AcmeMainBundle:Default:forum.html.twig');
    }
    
    public function projectsAction()
    {
        return $this->render('AcmeMainBundle:Default:projects.html.twig');
    }
    
    public function eventsAction()
    {
        return $this->render('AcmeMainBundle:Default:events.html.twig');
    }
    
    public function jobsAction()
    {
        return $this->render('AcmeMainBundle:Default:jobs.html.twig');
    }
    
    public function adminAction()
    {
        return $this->render('AcmeMainBundle:Default:admin.html.twig');
    }
    
    public function newsAction()
    {
        return $this->render('AcmeMainBundle:Default:news.html.twig');
    }
}

<?php

namespace AD\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADGsbBundle:Default:index.html.twig');
        
    }
    
    public function testRepositoryAction()
    {
        $repos = $this ->getDoctrine()->getManager();
        $listeUtil=$repos->getRepository('BMGsbBundle:Utilisateur')->findAll();
        return $this->render('BMGsbBundle:Default:testRepos.html.twig',array('liste'=>$listeUtil));
    }
    
    public function UtilAction() {
        $repo = $this->getDoctrine()->getManager()->getRepository('BMGsbBundle:Utilisateur');
        $laliste=$repo->laFonction();
    }
}

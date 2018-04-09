<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Formations;

class DefaultController extends Controller
{
    // /**
    //  * @Route("/", name="homepage")
    //  * @Template()
    //  */
     
    // public function indexAction(Request $request)
    // {
    //     return array();
    // }
    
     /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name="Jeanne", $firstname= "Juquelier")
    {
        $experiences = $this->getDoctrine()->getRepository('AppBundle:Experiences')->findAll();
        $loisirs = $this->getDoctrine()->getRepository('AppBundle:Loisirs')->findAll();
        $formations = $this->getDoctrine()->getRepository('AppBundle:Formations')->findAll();
        
        return array(
            'name' => $name,
            'firstname' => $firstname,
            'exps' => $experiences,
            'form' => $formations,
            'loi' => $loisirs,
        );
    }
    
     /**
     * @Route("/insert", name="homepage_bis")
     * @Template()
     */
     
    public function insertAction()
    {
        $form = new Formations();
        $form->setName("Ma formation");
        $form->setLieu("Grenoble");
        $form->setDateDebut(new \DateTime());
        $form->setDateFin(new \DateTime());
        
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        
        $eManager->flush();
        
        return array();
    }

}

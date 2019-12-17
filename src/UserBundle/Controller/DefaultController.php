<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');    }






    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository("PruductBundle:Produit")->findAll();
        return $this->render('adminLayout.html.twig', array('produits' => $produits));
    }







}

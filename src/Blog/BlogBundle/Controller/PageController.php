<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Enquiry;
use Blog\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    
    public function indexAction()
    {
       return $this->render('BlogBundle:Page:base.html.twig');
       
    }
    
    public function contactAction()
    {
        $article = new Enquiry();
        $formBuilder = $this->createFormBuilder($article);

       // On crée le FormBuilder grâce à la méthode du contrôleur
        $formBuilder = $this->createFormBuilder($article);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
          ->add('name',        'text')
          ->add('email',       'text')
          ->add('subject',     'textarea')
          ->add('body',      'text');
          
        // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('BlogBundle:Page:contact.html.twig', array(
          'form' => $form->createView(),
        ));
    }
 
     public function inscriptionAction()
    {
       
       return $this->render('BlogBundle:Page:inscription.html.twig');
       
    }  
        public function connexionAction($login,$mdp)
    {
       return $this->render('BlogBundle:Page:connexion.html.twig');
       
    }  
    
}

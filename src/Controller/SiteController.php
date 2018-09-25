<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function index()
    {
        $formSearch = $this->createFormBuilder()
                           ->add('specialisation', TextType::class, [
                               'attr' => [
                                   'placeholder'    => "Exemple : PHP Vue.js Node.js",
                                   'class'          => "form-control-lg"
                               ],
                               'label'     => false,
                               'required'  => false,
                           ])
                           ->add('location', TextType::class, [
                                'attr' => [
                                    'placeholder'   => "Région, Ville",
                                    'class'          => "form-control-lg"
                                ],
                                'label'     => false,
                                'required'  => false,
                            ])
                            ->add('search', SubmitType::class, [
                                    'label'         => "Rechercher",
                                    'attr' => [
                                        'class'         => "btn-lg"
                                    ]
                            ]);
        $form = $formSearch->getForm();

        return $this->render('site/index.html.twig', [
            'controller_name'   => 'SiteController',
            'formSearch'        => $form->createView()
        ]);
    }
}

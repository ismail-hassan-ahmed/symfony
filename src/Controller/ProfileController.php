<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Flasher\Pnotify\Prime\PnotifyFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', []);
    }

    #[Route('/profile/edit/{id}', name: 'profile_edit', methods:['GET', 'POST'])]
    public function edit(ManagerRegistry $doctrine,Request $request, User $user, SweetAlertFactory $flasher): Response
    {   
        $entityManager = $doctrine->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          

            $entityManager->persist($user);
            $entityManager->flush();
            $flasher->addSuccess('Votre profile a bien été mis à jour');
            return $this->redirectToRoute('app_profile');
        }
        return $this->render('profile/edit.html.twig',[

            'profilForm' => $form->createView()
        ]);
    }
}

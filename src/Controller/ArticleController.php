<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleFormType;
use App\Form\CommentFormType;
use App\Repository\ArticleRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Flasher\Pnotify\Prime\PnotifyFactory;
use Flasher\SweetAlert\Prime\SweetAlertFactory;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_article')]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findBy([], ['publishedAt' =>'desc']),
        ]);
    }

    #[Route('/articles/publier-un-article', name: 'article_create')]
    public function create(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, SweetAlertFactory $flasher)
    {

        $entityManager = $doctrine->getManager();
        $article = new Article;

        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $article->setUser($this->getUser());
            $article->setSlug(strtolower($slugger->slug($article->getTitle())));
            $entityManager->persist($article);
            $entityManager->flush();
            $flasher->addSuccess('Vous avez publié un article avec succés');
            return $this->redirectToRoute("app_article");
        }

        return $this->render('article/create.html.twig', [

            "FormArticle" => $form->createView()
        ]);

    }

    #[Route('/articles/{slug}', name: 'article_show')]
    public function show(Request $request,ArticleRepository $articleRepository, $slug, ManagerRegistry $doctrine,SweetAlertFactory $flasher)
    {

        $article = $articleRepository->findOneBy([

            'slug' => $slug
        ]);

        if (!$article) {
            
            return $this->redirectToRoute('app_article');
        }

        $comment = new Comment;
        $commentForm = $this->createForm(CommentFormType::class, $comment);

        $commentForm->handleRequest($request);
        //Traitement du formualire
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            
            $comment->setPublishedAt(new DateTimeImmutable('now'));
            $comment->setArticle($article);
            $comment->setUser($article->getUser());

            $em = $doctrine->getManager(); 
            $em->persist($comment);
            $em->flush();

            $flasher->addSuccess('Votre commentaire à ajouté avec succées');
            return $this->redirectToRoute('article_show', 

            ['slug' => $article->getSlug()]);
        }


        return $this->render('article/show.html.twig', [
            
            'article' => $article,
            'commentForm' => $commentForm->createView()
        ]);
    }
   
}

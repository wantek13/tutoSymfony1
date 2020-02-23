<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
    * @Route("/", name="article_list")
    */
    public function index() : Response
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', ['articles' => $articles]);
    }

    /**
    * @Route("article/{id}", name="article_show")
    */
    public function show($id) : Response
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('articles/show.html.twig', ['article' => $article]);
    }

     //   /**
     //   * @Route("/article/save")
     //   */
     //   public function save()
     //   {
     //       $entityManager = $this->getDoctrine()->getManager();

      //      $article = new Article();
      //      $article->setTitle('Article One');
      //      $article->setBody('This the the body for article One');

      //      $entityManager->persist($article);
      //      $entityManager->flush();

      //      return new Response('Saves an article with the id of ' . $article->getId());
      //  }
}
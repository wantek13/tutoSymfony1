<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function index() : Response
    {
        $articles = ['article 1', 'article 2', 'article 3'];

        return $this->render('articles/index.html.twig',
            ['articles' => $articles]);
    }
}
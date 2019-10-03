<?php

namespace App\Controller;

use App\Helpers\MarkdownHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="post")
     */
    public function index(MarkdownHelper $parser)
    {
       

        return $this->render('post/index.html.twig', [
            
            'posts' => $parser->getParse()
        ]);
    }
}

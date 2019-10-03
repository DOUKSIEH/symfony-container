<?php 

namespace App\Helpers;

use cebe\markdown\Markdown;
use App\Repository\PostRepository;

class MarkdownHelper {

    protected $parser;
    protected $repo;
    

    public function __construct(Markdown $parser, PostRepository $repo)
    {
        $this->parser = $parser;
        $this->repo = $repo;

    }
    /**
     * Permet de parser le contenu 
     *
     * @return array
     */
    public function getParse() : array {

        $posts = $this->repo->findAll();

        $parsedPosts = [];

        foreach ($posts as $post) {
            # code...
            $parsedPosts[] = [
                'title' => $post->getTitle(),
                'content' => $this->parser->parse($post->getContent())
            ];

        }

        return $parsedPosts;

    }


    
}


<?php

namespace App\Controller;

use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TagController
{
    #[Route('/tag/{id}', name: 'tag', methods: ['GET'])]
    public function __invoke(Request $request, #[MapEntity] Tag $tag): Response
    {
        return new Response($tag->getId());
    }
}
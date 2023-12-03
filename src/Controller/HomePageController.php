<?php

namespace App\Controller;

use App\Entity\Tag;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function __invoke(EntityManagerInterface $entityManager): Response
    {
        $tag = new Tag();
        $entityManager->persist($tag);
        $entityManager->flush();

        return $this->render('homepage.html.twig', [
            'tag' => $tag,
        ]);
    }
}

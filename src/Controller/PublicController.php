<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
        
        ]);
    }
    #[Route('/page/{id}',
    name: 'page',
    requirements:['id'=>'\d+'],
    defaults:['id'=>1],
    methods:['GET'] 
    )]
    public function page($id): Response
    {
        
        return $this->render('public/page.html.twig', [
            'page' => $id,
        ]);
}


#[Route('/form',
name: 'form',
methods:['GET'])]
public function form(): Response
{
    return $this->render('public/form.html.twig', [
]);
}


    #[Route('/page/haha',
    name: 'error',
    methods:['GET'] 
    )]
    public function error(): Response
    {
        
        return $this->render('public/error.html.twig', [
    
        ]);
}

}

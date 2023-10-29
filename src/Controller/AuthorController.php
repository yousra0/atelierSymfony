<?php

namespace App\Controller;

use Doctrine\DBAL\Schema\View;
use phpDocumentor\Reflection\DocBlock\Tags\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/showAuthor/{name}', name: 'showAuthor')]
    public function showAuthor($name)
    {
        return $this->render('author/showAuthor.html.twig', [
            'n' => $name,
        ]);
    }

    #[Route('/showList', name: 'listAuthor')]
    public function list()
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jfif', 'username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jfif', 'username' => 'William Shakespeare', 'email' =>
            'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jfif', 'username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render('author/list.html.twig', [
            'a' => $authors,
        ]);
    }

    //Créer une nouvelle méthode « auhtorDetails» qui prend en paramètre la variable « id »
    #[Route('/authorDetails/{id}', name: 'authorDetails')]
    public function authorDetails($id)
    {
        return $this->render('author/details.html.twig', [
            'id' => $id,
        ]);
    }



}

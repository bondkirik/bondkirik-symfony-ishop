<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/shop/list", name="shopList")
     */
    public function shopList(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'SHOP LIST',
        ]);
    }

    /**
     * @Route("/shop/item/{id<\d+>}", name="shopItem")
     *
     * @param int $id
     * @return Response
     */
    public function shopItem(int $id): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'SHOP ITEM' . $id,
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'title' => 'IndexController',
        ]);
    }

    /**
     * @Route("/shop/list", name="shopList")
     */
    public function shopList(): Response
    {
        return $this->render('index/shopList.html.twig', [
            'title' => 'SHOP LIST',
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
        return $this->render('index/shopItem.html.twig', [
            'title' => 'SHOP ITEM' . $id,
            'description' => 'description',
            'price' => '100',
        ]);
    }
    /**
     * @Route("/shop/cart", name="shopCart")
     */
    public function shopCart(): Response
    {
        return $this->render('index/shopCart.html.twig', [
            'title' => 'CART',
        ]);
    }

}

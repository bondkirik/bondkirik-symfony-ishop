<?php

namespace App\Controller;

use App\Entity\ShopItems;
use App\Repository\ShopItemsRepository;
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
    public function shopList(ShopItemsRepository $itemsRepository): Response
    {
        $items = $itemsRepository->findAll();

        return $this->render('index/shopList.html.twig', [
            'title' => 'SHOP LIST',
            'items' => $items,
        ]);
    }

    /**
     * @Route("/shop/item/{id<\d+>}", name="shopItem")
     *
     * @param int $id
     * @return Response
     */
    public function shopItem(ShopItems $shopItems): Response
    {
        return $this->render('index/shopItem.html.twig', [
            'id' => $shopItems->getId(),
            'title' => $shopItems->getTitle(),
            'description' => $shopItems->getDescription(),
            'price' => $shopItems->getPrice(),
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

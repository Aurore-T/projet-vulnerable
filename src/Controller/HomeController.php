<?php

namespace App\Controller;

use App\Core\Controller;
use App\Repository\ProductRepository;

class HomeController extends Controller
{
    public function index(): void
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->findAll();

        $this->render('home', [
            'products' => $products
        ]);
    }
}

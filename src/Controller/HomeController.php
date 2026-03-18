<?php

namespace App\Controller;

use App\Core\Controller;
use App\Repository\UserRepository;

class HomeController extends Controller
{
    public function index(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['connected'])) {
            $this->redirect("/login");
        }

        $userRepository = new UserRepository();
        $users = $userRepository->findAll();

        $this->render('home', [
            'users' => $users
        ]);
    }
}

<?php

namespace App\Controller;

use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use App\Api\ViewContext;

class HomeController extends AbstractController
{
    #[Route(path: '/home', name: 'app_home', methods: 'GET')]
    #[Cache(expired: 'tomorrow')]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $users = (new UserService($entityManager))->getAllUsers();
        return $this->json($users);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    #[Route('/api/users', name: 'users', methods: ['GET'])]
    public function getUsers(UserRepository $userRepository, SerializerInterface $serialiser): JsonResponse
    {
        $users = $userRepository->findAll();
        $JsonUsersList = $serialiser->serialize($users, 'json');
        return new JsonResponse([
            'data' => $JsonUsersList,
            'total' => count($users),
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\CharacterRepository;
use App\Entity\User;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    #[Route('/api/users', name: 'api_users', methods: ['GET'])]
    public function getUsers(UserRepository $userRepository, SerializerInterface $serialiser): JsonResponse
    {
        $users = $userRepository->findAll();
        $JsonUsersList = $serialiser->serialize($users, 'json', ['groups' => 'getUsers']);
        return new JsonResponse([
            'data' => json_decode($JsonUsersList),
            'total' => count($users),
        ]);
    }

    #[Route('/api/users/{userId}', name: 'api_user', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('user', options: ['mapping' => ['userId' => 'id']])]
    public function getOneUser(SerializerInterface $serialiser, User $user): JsonResponse
    {
        $JsonUser = $serialiser->serialize($user, 'json', ['groups' => 'getUsers']);
        return new JsonResponse([
            'data' => json_decode($JsonUser),
            'total' => 1,
        ], Response::HTTP_OK, ['accept' => 'json']);
    }

    #[Route('/api/users/{userId}/characters', name: 'api_user_characters', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('user', options: ['mapping' => ['userId' => 'id']])]
    public function getCharactersOfOneUser(SerializerInterface $serialiser, User $user, CharacterRepository $characterRepository): JsonResponse
    {
        $userCharacters = $characterRepository->findBy(['user' => $user]);
        $JsonUser = $serialiser->serialize($userCharacters, 'json', ['groups' => 'getCharacters']);
        return new JsonResponse([
            'data' => json_decode($JsonUser),
            'total' => count($userCharacters),
        ], Response::HTTP_OK, ['accept' => 'json']);
    }
}

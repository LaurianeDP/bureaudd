<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\CharacterRepository;
use App\Entity\Character;

class CharacterController extends AbstractController
{
    #[Route('/api/characters', name: 'api_characters', methods: ['GET'])]
    public function getCharacters(CharacterRepository $characterRepository, SerializerInterface $serialiser): JsonResponse
    {
        $characters = $characterRepository->findAll();
        $JsonCharactersList = $serialiser->serialize($characters, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonCharactersList),
            'total' => count($characters),
        ]);
    }

    #[Route('/api/characters/{characterId}', name: 'api_character', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('character', options: ['mapping' => ['characterId' => 'id']])]
    public function getOneCharacter(SerializerInterface $serialiser, Character $character): JsonResponse
    {
        $JsonCharacter = $serialiser->serialize($character, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonCharacter),
            'total' => 1,
        ], Response::HTTP_OK, ['accept' => 'json']);
    }
}

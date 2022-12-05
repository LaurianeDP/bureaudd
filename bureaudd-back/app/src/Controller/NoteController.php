<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NoteRepository;
use App\Entity\Note;

class NoteController extends AbstractController
{
    #[Route('/api/notes', name: 'api_notes', methods: ['GET'])]
    public function getNotes(NoteRepository $noteRepository, SerializerInterface $serialiser): JsonResponse
    {
        $notes = $noteRepository->findAll();
        $JsonNotesList = $serialiser->serialize($notes, 'json', ['groups' => 'getNotes']);
        return new JsonResponse([
            'data' => json_decode($JsonNotesList),
            'total' => count($notes),
        ]);
    }

    // #[Route('/api/characters/{characterId}', name: 'api_character', requirements: ['id' => '\d+'], methods: ['GET'])]
    // #[ParamConverter('character', options: ['mapping' => ['characterId' => 'id']])]
    // public function getOneCharacter(SerializerInterface $serialiser, Character $character): JsonResponse
    // {
    //     $JsonCharacter = $serialiser->serialize($character, 'json', ['groups' => 'getCharacters']);
    //     return new JsonResponse([
    //         'data' => json_decode($JsonCharacter),
    //         'total' => 1,
    //     ], Response::HTTP_OK, ['accept' => 'json']);
    // }
}

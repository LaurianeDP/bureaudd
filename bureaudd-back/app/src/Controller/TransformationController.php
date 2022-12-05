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
use App\Repository\TransformationRepository;
use App\Entity\Transformation;

class TransformationController extends AbstractController
{
    #[Route('/api/transformations', name: 'api_transformations', methods: ['GET'])]
    public function getTransformations(TransformationRepository $transformationRepository, SerializerInterface $serialiser): JsonResponse
    {
        $transformations = $transformationRepository->findAll();
        $JsonTransformationsList = $serialiser->serialize($transformations, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonTransformationsList),
            'total' => count($transformations),
        ]);
    }

    #[Route('/api/transformations/{transformationId}', name: 'api_transformation', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('transformation', options: ['mapping' => ['transformationId' => 'id']])]
    public function getOneTransformation(SerializerInterface $serialiser, Transformation $transformation): JsonResponse
    {
        $JsonTransformation = $serialiser->serialize($transformation, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonTransformation),
            'total' => 1,
        ], Response::HTTP_OK, ['accept' => 'json']);
    }
}

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
use App\Repository\FeedbackRepository;
use App\Entity\Feedback;

class FeedbackController extends AbstractController
{
    #[Route('/api/feedbacks', name: 'api_feedbacks', methods: ['GET'])]
    public function getFeedbacks(FeedbackRepository $feedbackRepository, SerializerInterface $serialiser): JsonResponse
    {
        $feedbacks = $feedbackRepository->findAll();
        $JsonFeedbacksList = $serialiser->serialize($feedbacks, 'json', ['groups' => 'getFeedbacks']);
        return new JsonResponse([
            'data' => json_decode($JsonFeedbacksList),
            'total' => count($feedbacks),
        ]);
    }

    #[Route('/api/feedbacks/{feedbackId}', name: 'api_feedback', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('feedback', options: ['mapping' => ['feedbackId' => 'id']])]
    public function getOneFeedback(SerializerInterface $serialiser, Feedback $feedback): JsonResponse
    {
        $JsonFeedback = $serialiser->serialize($feedback, 'json', ['groups' => 'getFeedbacks']);
        return new JsonResponse([
            'data' => json_decode($JsonFeedback),
            'total' => 1,
        ], Response::HTTP_OK, ['accept' => 'json']);
    }
}

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
use App\Repository\FaqRepository;
use App\Entity\Faq;

class FAQController extends AbstractController
{
    #[Route('/api/faqs', name: 'api_faqs', methods: ['GET'])]
    public function getFaqs(FaqRepository $faqRepository, SerializerInterface $serialiser): JsonResponse
    {
        $faqs = $faqRepository->findAll();
        $JsonFaqsList = $serialiser->serialize($faqs, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonFaqsList),
            'total' => count($faqs),
        ]);
    }

    #[Route('/api/faqs/{faqId}', name: 'api_faq', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[ParamConverter('faq', options: ['mapping' => ['faqId' => 'id']])]
    public function getOneFaq(SerializerInterface $serialiser, Faq $faq): JsonResponse
    {
        $JsonFaq = $serialiser->serialize($faq, 'json');
        return new JsonResponse([
            'data' => json_decode($JsonFaq),
            'total' => 1,
        ], Response::HTTP_OK, ['accept' => 'json']);
    }
}

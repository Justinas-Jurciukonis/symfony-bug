<?php

declare(strict_types=1);

namespace App\Controller;

use App\Payload\FooPayload;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

class FooController extends AbstractController
{
    #[Route(path: '/foo', methods: ['POST'])]
    public function index(
        #[MapRequestPayload]
        FooPayload $payload,
    ): JsonResponse {
        return $this->json($payload);
    }
}

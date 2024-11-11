<?php

declare(strict_types=1);

namespace OpenStudio\HealthcheckBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route(path: '/healthcheck/ping', name: 'healthcheck_ping', methods: [Request::METHOD_GET])]
class PingController
{
    public function __invoke(Request $request): Response
    {
        return new JsonResponse("pong");
    }
}

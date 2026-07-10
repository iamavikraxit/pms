<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: "Photographer Management System API",
    version: "1.0.0",
    description: "API documentation"
)]
#[OA\Server(
    url: "http://app.pms.test:8001/",
    description: "Local Server"
)]
#[OA\Get(
    path: "/api/health",
    summary: "Health check",
    responses: [
        new OA\Response(
            response: 200,
            description: "API is healthy"
        )
    ]
)]
class OpenApi
{
    
}
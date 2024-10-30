<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\HandleCors as Middleware;

class HandleCors extends Middleware
{
    protected $allowedOrigins = ['http://localhost:8080'];
    
    // Add allowed headers
    protected $allowedHeaders = ['Content-Type', 'X-Requested-With', 'Authorization', 'Accept', 'Origin', 'X-CSRF-Token'];

    // Specify allowed methods
    protected $allowedMethods = ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'];

    public function handle($request, \Closure $next)
    {
        $response = parent::handle($request, $next);

        // Add CORS headers to the response
        $response->headers->set('Access-Control-Allow-Origin', implode(', ', $this->allowedOrigins));
        $response->headers->set('Access-Control-Allow-Headers', implode(', ', $this->allowedHeaders));
        $response->headers->set('Access-Control-Allow-Methods', implode(', ', $this->allowedMethods));

        return $response;
    }
}
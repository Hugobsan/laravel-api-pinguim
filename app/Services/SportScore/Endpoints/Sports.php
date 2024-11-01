<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;

class Sports
{
    private SportScoreService $service;
    
    public function __construct()
    {
        $this->service = new SportScoreService();
    }

    public function get()
    {
        return $this->service->api->get('/sports');
    }
}
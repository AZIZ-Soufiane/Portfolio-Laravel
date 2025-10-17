<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    protected $developerService;

    public function __construct(DeveloperService $developerService)
    {
        $this->developerService = $developerService;
    }

    /**
     * Display the home page.
     */
    public function index()
    {
        $developer = $this->developerService->getProfile();
        return view('home', compact('developer'));
    }
}

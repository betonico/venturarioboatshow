<?php

namespace RioBoatShow\Http\Controllers;

use RioBoatShow\Services\InsertService;
use Illuminate\Http\Request;
use RioBoatShow\Http\Requests;

class HomeController extends Controller
{
    /**
     * @var InsertService
     */
    private $service;

    /**
     * HomeController constructor.
     *
     * @param InsertService $service
     */
    public function __construct(InsertService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Insert new register.
     *
     * @param Request $request
     * @return array|mixed
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }
}




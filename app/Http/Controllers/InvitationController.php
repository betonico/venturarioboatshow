<?php

namespace RioBoatShow\Http\Controllers;

use RioBoatShow\Services\InvitationService;
use Illuminate\Http\Request;
use RioBoatShow\Http\Requests;

class InvitationController extends Controller
{
    /**
     * @var InvitationService
     */
    private $service;

    /**
     * InvitationController constructor.
     *
     * @param InvitationService $service
     */
    public function __construct(InvitationService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('layouts.frontend.invitation');
    }

    /**
     * Invitation new register.
     *
     * @param Request $request
     * @return array|mixed
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }
}

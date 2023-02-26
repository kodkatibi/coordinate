<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\MoveRequest;
use App\Services\MoveService;

class MoveController extends BaseApiController
{
    protected MoveService $service;

    public function __construct()
    {
        $this->service = new MoveService();
    }


    public function moveX(MoveRequest $request)
    {
        $data = $this->service->moveX($request->toArray());
        return $this->response($data);
    }

    public function moveY(MoveRequest $request)
    {
        $data = $this->service->moveY($request->toArray());
        return $this->response($data);
    }

    public function moveZ(MoveRequest $request)
    {
        $data = $this->service->moveZ($request->toArray());
        return $this->response($data);
    }

}

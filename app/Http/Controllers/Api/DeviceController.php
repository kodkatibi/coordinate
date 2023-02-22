<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\DeviceRequest;
use App\Repositories\DeviceRepository;
use App\Repositories\MoveHistoryRepository;

class DeviceController extends BaseApiController
{
    protected DeviceRepository $deviceRepository;
    protected MoveHistoryRepository $historyRepository;

    public function __construct()
    {
        $this->deviceRepository = new DeviceRepository();
    }

    public function create(DeviceRequest $request)
    {
        $device = $this->deviceRepository->create($request->except('_token', '_method'));
        $moveData = [
            'device_id' => $device->id,
        ];
        $this->historyRepository = new MoveHistoryRepository();
        $this->historyRepository->create($moveData);
        return view('client', ['device' => $device]);
    }

    public function index()
    {

    }
}

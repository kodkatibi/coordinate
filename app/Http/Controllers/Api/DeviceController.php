<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\DeviceRequest;
use App\Repositories\DeviceRepository;
use App\Repositories\MoveHistoryRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

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
        Session::put('deviceId', $device->id);
        return redirect()->route('client');

    }

    public function index()
    {
        if (Session::has('deviceId')) {
            try {
                $device = $this->deviceRepository->getById(Session::get('deviceId'));
                return view('client', ['device' => $device]);
            } catch (\Exception $exception) {
                Log::error($exception->getMessage());
                return redirect()->route('wellcome');
            }
        } else {
            return redirect()->route('wellcome');
        }

    }
}

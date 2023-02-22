<?php

namespace App\Http\Controllers\Api;

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

    public function index()
    {

    }
}

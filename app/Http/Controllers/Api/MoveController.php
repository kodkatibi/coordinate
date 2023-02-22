<?php

namespace App\Http\Controllers\Api;

use App\Repositories\MoveHistoryRepository;

class MoveController extends BaseApiController
{
    protected MoveHistoryRepository $historyRepository;

    public function __construct()
    {
        $this->historyRepository = new MoveHistoryRepository();
    }

    public function index()
    {

    }
}

<?php

namespace App\Services;

use App\Repositories\MoveHistoryRepository;

abstract class AMoveService implements IMoveService
{
    protected MoveHistoryRepository $historyRepository;

    public function __construct()
    {
        $this->historyRepository = new MoveHistoryRepository();
    }

    public function moveX(array $data)
    {
        $latest = $this->getLatestCoordinate($data['device_id']);

        if ($data['value'] == '+') {
            $latest['x_position'] += 1;
        } else {
            $latest['x_position'] -= 1;
        }
        $this->historyRepository->create($latest);
        return $this->getLatestCoordinate($data['device_id']);
    }

    public function moveY(array $data)
    {
        $latest = $this->getLatestCoordinate($data['device_id']);

        if ($data['value'] == '+') {
            $latest['y_position'] += 1;
        } else {
            $latest['y_position'] -= 1;
        }
        $this->historyRepository->create($latest);
        return $this->getLatestCoordinate($data['device_id']);
    }

    public function moveZ(array $data)
    {
        $latest = $this->getLatestCoordinate($data['device_id']);

        if ($data['value'] == '+') {
            $latest['z_position'] += 1;
        } else {
            $latest['z_position'] -= 1;
        }
        $this->historyRepository->create($latest);
        return $this->getLatestCoordinate($data['device_id']);
    }

    public function getLatestCoordinate($deviceId)
    {
        return $this->historyRepository->getLatestByDevice($deviceId);
    }

}

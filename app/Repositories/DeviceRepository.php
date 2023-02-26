<?php

namespace App\Repositories;

use App\Models\Device;

class DeviceRepository implements IDeviceRepository
{

    public function get(array $select = ['*'])
    {
        return Device::query()->select($select)->get();
    }

    public function getById(int $id, array $select = ['*'])
    {
        return Device::query()->with('latestCoordinate')->where('id', $id)->select($select)->first();
    }

    public function create(array $request)
    {
        return Device::query()->with('latestCoordinate')->create($request);
    }

    public function update(array $request, int $id)
    {
        return Device::query()->find($id)->update($request);
    }

    public function delete(int $id)
    {
        return Device::query()->find($id)->delete();
    }
}

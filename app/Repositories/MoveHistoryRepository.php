<?php

namespace App\Repositories;

use App\Models\MoveHistory;

class MoveHistoryRepository implements IHistoryRepository
{

    public function get(array $select = ['*'])
    {
        return MoveHistory::query()->select($select)->get();
    }

    public function getById(int $id, array $select = ['*'])
    {
        return MoveHistory::query()->find($id)->select($select);
    }

    public function create(array $request)
    {
        return MoveHistory::query()->create($request);
    }

    public function update(array $request, int $id)
    {
        return MoveHistory::query()->find($id)->update($request);
    }

    public function delete(int $id)
    {
        return MoveHistory::query()->find($id)->delete();
    }

    public function getLatestByDevice($deviceId, array $select = ['*'])
    {
        return MoveHistory::query()->where('device_id', $deviceId)->select($select)->latest()->first()->toArray();
    }
}

<?php

namespace App\Services;

interface IMoveService
{
    public function moveX(array $data);

    public function moveY(array $data);

    public function moveZ(array $data);
}

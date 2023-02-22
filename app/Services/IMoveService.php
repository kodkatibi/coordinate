<?php

namespace App\Services;

interface IMoveService
{
    public function moveX(int $value);

    public function moveY(int $value);

    public function moveZ(int $value);
}

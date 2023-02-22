<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseApiController extends Controller
{
    protected const STATUS_CODE_200 = 200;
    protected const STATUS_CODE_401 = 401;
    protected const STATUS_CODE_404 = 404;
    protected const STATUS_CODE_422 = 422;
    protected const STATUS_CODE_500 = 500;

    public function response(
        array      $data = [],
        int|string $httpCode = self::STATUS_CODE_200,
        array      $errors = []
    ): JsonResponse
    {
        $status = [
            'code' => $httpCode,
            'success' => $httpCode === self::STATUS_CODE_200,
            'msg' => $msg ?? ''
        ];

        return response()->json([
            'data' => $data,
            'status' => $status,
            'errors' => $errors
        ], $httpCode);
    }
}

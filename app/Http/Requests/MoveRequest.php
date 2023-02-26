<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoveRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'device_id' => 'required|exists:devices,id',
            'value' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

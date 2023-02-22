<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoveHistoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'x_position' => 'required_without_all:y_position,z_position',
            'y_position' => 'required_without_all:x_position,z_position',
            'z_position' => 'required_without_all:x_position,y_position',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

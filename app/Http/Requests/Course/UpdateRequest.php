<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'string',
            'description' => 'string',
            'teacher_id' => 'integer|exists:users,id',
            'status' => 'string'
        ];
    }
}

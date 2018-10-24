<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:300',
            'description' => 'required|max:300',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'description.required' => 'La descripción es requerida',
            'start_date.required' => 'La fecha de inicio es requerida',
            'due_date.required' => 'La fecha de termino es requerida',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'date'=>'required|date',
            'time'=>'required',
            'location'=>'required|string|max:255',
            'price'=>'required|numeric|min:0',
            'capacity'=>'required|integer|min:1'
        ];
    }
      public function messages(): array
    {
        return [

            'title.required' => 'Le titre est obligatoire',

            'description.required' => 'La description est obligatoire',

            'date.required' => 'La date est obligatoire',

            'time.required' => "L'heure est obligatoire",

            'location.required' => 'Le lieu est obligatoire',

            'price.required' => 'Le prix est obligatoire',
            'price.numeric' => 'Le prix doit être un nombre',

            'capacity.required' => 'La capacité est obligatoire',
            'capacity.integer' => 'La capacité doit être un entier',
            'capacity.min' => 'La capacité doit être supérieure à 0',
        ];
    }
}

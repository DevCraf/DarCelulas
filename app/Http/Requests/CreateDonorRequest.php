<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDonorRequest extends FormRequest
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
          'boarding_place' => 'required',
          'name' => 'required',
          'surname' => 'required',
          'gender' => 'required',
          'document_type' => 'required',
          'birthday' => 'required|date',
          'document_type' => 'required',
          'document' => 'required|numeric',
          'phone' => 'nullable|numeric',
          'email' => 'nullable|email',
        ];
    }
}

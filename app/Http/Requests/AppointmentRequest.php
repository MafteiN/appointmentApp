<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dataa'         => 'required',
            'hour'          => 'required',
            'user_id'       => 'nullable',
            'visible'       => 'nullable',
            'mitting'       => 'required',
            'teacher_id'    => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'dataa.required'        => 'Trebuie selectata o data',
            'hour.required'         => 'Trebuie completata ora',
            'mitting.required'      => 'Trebuie selectat numarul sedintei',
            'teacher_id.required'   => 'Trebuie selectat un utilizator',
        ];
    }
}

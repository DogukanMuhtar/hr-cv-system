<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'tc_no' => 'required|digits:11|unique:employees,tc_no',
        'phone' => 'required|max:15',
        'email' => 'required|email|unique:employees,email',

        'profession' => 'required|string|max:100',
        'position' => 'required|string|max:100',
        'reference' => 'nullable|string|max:255',
        'cv_path' => 'required|mimes:pdf|max:5120',
    ];
}

public function messages()
{
    return [
        'first_name.required' => 'Ad alanı zorunludur.',
        'last_name.required' => 'Soyad alanı zorunludur.',
        'tc_no.required' => 'TC Kimlik No alanı zorunludur.',
        'phone.required' => 'Telefon alanı zorunludur.',
        'email.required' => 'E-posta alanı zorunludur.',
        'email.email' => 'Geçerli bir e-posta adresi giriniz.',
        'profession.required' => 'Meslek alanı zorunludur.',
        'position.required' => 'Başvurulan Pozisyon alanı zorunludur.',
        'cv_path.required' => 'CV yüklemek zorunludur.',
        'cv_path.mimes' => 'CV sadece PDF formatında olmalıdır.',
        
    ];
}

}
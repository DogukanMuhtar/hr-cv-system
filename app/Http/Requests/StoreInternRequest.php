<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternRequest extends FormRequest
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
        'tc_no' => 'required|digits:11|unique:interns,tc_no',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|unique:interns,email',
        'university' => 'required|string|max:100',
        'department' => 'required|string|max:100',
        'grade' => 'required|string|max:100',
        'internship_type' => 'required|string|max:100',
        'internship_duration' => 'required|string|max:100',
        'cv_path' => 'required|mimes:pdf|max:5120',
        'reference' => 'nullable|string|max:255',
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
        'profession.required' => 'Üniversite alanı zorunludur.',
        'position.required' => 'Okuduğu Bölüm alanı zorunludur.',
        'grade.required' => 'Sınıf alanı zorunludur.',
        'internship_type.required' => 'Staj Türü alanı zorunludur.',
        'internship_duration.required' => 'Staj Süresi alanı zorunludur',
        'cv_path.required' => 'CV yüklemek zorunludur.',
        'cv_path.mimes' => 'CV sadece PDF formatında olmalıdır.',    
    ];
}

}


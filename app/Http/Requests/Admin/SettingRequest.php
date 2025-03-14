<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
            {    
                return [
                    'facebook'     => ['required'],
                    'linkedin'    => ['required'],
                    'instagram' => ['required'],
                    'number' => ['required'],
                    'logo' => ['required','image'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'facebook'     => ['required'],
                    'linkedin'    => ['required'],
                    'instagram' => ['required'],
                    'number' => ['required'],
                    'logo' => ['image'],
                ];              
            }
            default: break;
        }
    }
}

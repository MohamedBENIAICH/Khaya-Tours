<?php

// app/Http/Requests/Admin/ImageRequest.php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change to true to authorize all users by default
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'destination_id' => 'required|exists:destinations,id',
            'city' => 'required:images,city',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}

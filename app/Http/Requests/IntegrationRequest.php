<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntegrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'marketplace' => 'required|in:hepsiburada,trendyol',
            'username' => 'nullable|string',
            'password' => 'nullable|string',
        ];
    }
}
